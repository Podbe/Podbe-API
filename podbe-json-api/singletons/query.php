<?php

class JSON_API_Query {
  protected $defaults = array(
    'date_format' => 'Y-m-d H:i:s',
    'read_more' => 'Read more'
  );
  
  function __construct() {
    add_filter('query_vars', array(&$this, 'query_vars'));
  }
  
  function get($key) {
    if (is_array($key)) {
      $result = array();
      foreach ($key as $k) {
        $result[$k] = $this->get($k);
      }
      return $result;
    }
    $query_var = (isset($_REQUEST[$key])) ? $_REQUEST[$key] : null;
    $wp_query_var = $this->wp_query_var($key);
    if ($wp_query_var) {
      return $wp_query_var;
    } else if ($query_var) {
      return $this->strip_magic_quotes($query_var);
    } else if (isset($this->defaults[$key])) {
      return $this->defaults[$key];
    } else {
      return null;
    }
  }
  
  function __get($key) {
    return $this->get($key);
  }
  
  function __isset($key) {
    return ($this->get($key) !== null);
  }
  
  function wp_query_var($key) {
    $wp_translation = array(
      'json' =>           'json',
      'post_id' =>        'p',
      'post_slug' =>      'name',
      'page_id' =>        'page_id',
      'page_slug' =>      'name',
      'category_id' =>    'cat',
      'category_slug' =>  'category_name',
      'search' =>         's',
      'order' =>          'order',
      'order_by' =>       'orderby'
    );
    if ($key == 'date') {
      $date = null;
      if (get_query_var('year')) {
        $date = get_query_var('year');
      }
      if (get_query_var('monthnum')) {
        $month = get_query_var('monthnum');
        if ($month < 10) {
          $month = "0$month";
        }
        $date .= $month;
      }
      if (get_query_var('day')) {
        $day = get_query_var('day');
        if ($day < 10) {
          $day = "0$day";
        }
        $date .= $day;
      }
      return $date;
    } else if (isset($wp_translation[$key])) {
      return get_query_var($wp_translation[$key]);
    } else {
      return null;
    }
  }
  
  function strip_magic_quotes($value) {
    if (get_magic_quotes_gpc()) {
      return stripslashes($value);
    } else {
      return $value;
    }
  }
  
  function query_vars($wp_vars) {
    $wp_vars[] = 'json';
    return $wp_vars;
  }
  
  function get_controller() {
    $json = $this->get('json');
    if (empty($json)) {
      return false;
    }
    if (preg_match('/^[a-zA-Z_]+$/', $json)) {
      return $this->get_legacy_controller($json);
    } else if (preg_match('/^([a-zA-Z_]+)(\/|\.)[a-zA-Z_]+$/', $json, $matches)) {
      return $matches[1];
    } else {
      return 'core';
    }
  }
  
  function get_method($controller) {
    
    global $json_api;
    
    $method = $this->get('json');
    if (strpos($method, '/') !== false) {
      $method = substr($method, strpos($method, '/') + 1);
    } else if (strpos($method, '.') !== false) {
      $method = substr($method, strpos($method, '.') + 1);
    }
    
    if (empty($method)) {
      return false;
    } else if (method_exists("JSON_API_{$controller}_Controller", $method)) {
      return $method;
    } else if ($controller == 'core') {
      if (is_search()) {
        return 'get_search_results';
      } else if (is_home()) {
        if (empty($_GET['json'])) {
          $json_api->error("Uknown method '$method'.");
        }
        return 'get_recent_posts';
      } else if (is_page()) {
        return 'get_page';
      } else if (is_single()) {
        return 'get_post';
      } else if (is_category()) {
        return 'get_category_posts';
      } else if (is_date()) {
        return 'get_date_posts';
      } else if (is_404()) {
        return '404';
      }
    }
    return 'error';
  }
  
}

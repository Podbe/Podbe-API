<?php

class JSON_API_Post {
  
  var $slug;            // String
  var $url;             // String
  var $title;           // String
  var $categories;      // Array of objects
  
  function JSON_API_Post($wp_post = null) {
    if (!empty($wp_post)) {
      $this->import_wp_object($wp_post);
    }
  }
  
  function create($values = null) {
    unset($values['id']);
    if (empty($values) || empty($values['title'])) {
      $values = array(
        'title' => 'Untitled',
        'content' => ''
      );
    }
    return $this->save($values);
  }
  
  function update($values) {
    $values['id'] = $this->id;
    return $this->save($values);
  }
  
  function save($values = null) {
    global $json_api, $user_ID;
    
    $wp_values = array();
    
    if (!empty($values['id'])) {
      $wp_values['ID'] = $values['id'];
    }
    if (!empty($values['title'])) {
      $wp_values['post_title'] = $values['title'];
    }
    if (isset($values['categories'])) {
      $categories = explode(',', $values['categories']);
      foreach ($categories as $category_slug) {
        $category_slug = trim($category_slug);
        $category = $json_api->introspector->get_category_by_slug($category_slug);
        if (empty($wp_values['post_category'])) {
          $wp_values['post_category'] = array($category->id);
        } else {
          array_push($wp_values['post_category'], $category->id);
        }
      }
    }
    
    if (isset($wp_values['ID'])) {
      $this->id = wp_update_post($wp_values);
    } else {
      $this->id = wp_insert_post($wp_values);
    }
    
    $wp_post = get_post($this->id);
    $this->import_wp_object($wp_post);
    
    return $this->id;
  }
  function import_wp_object($wp_post) {
    global $json_api, $post;
    $date_format = $json_api->query->date_format;
    $this->id = (int) $wp_post->ID;
    setup_postdata($wp_post);
    $this->set_value('slug', $wp_post->post_name);
    $this->set_value('url', get_permalink($this->id));
    $this->set_value('title', get_the_title($this->id));
    $this->set_value('podcasting-page', get_post_meta($this->id, "_different-types"));
    $this->set_categories_value();
  }
  
  function set_value($key, $value) {
    global $json_api;
    if ($json_api->include_value($key)) {
      $this->$key = $value;
    } else {
      unset($this->$key);
    }
  }
  function set_categories_value() {
    global $json_api;
    if ($json_api->include_value('categories')) {
      $this->categories = array();
      if ($wp_categories = get_the_category($this->id)) {
        foreach ($wp_categories as $wp_category) {
          $category = new JSON_API_Category($wp_category);
          if ($category->id == 1 && $category->slug == 'uncategorized') {
            // Skip the 'uncategorized' category
            continue;
          }
          $this->categories[] = $category;
        }
      }
    } else {
      unset($this->categories);
    }
  }
  function set_custom_fields_value() {
    global $json_api;
    if ($json_api->include_value('custom_fields') &&
        $json_api->query->custom_fields) {
      $keys = explode(',', $json_api->query->custom_fields);
      $wp_custom_fields = get_post_custom($this->id);
      $this->custom_fields = new stdClass();
      foreach ($keys as $key) {
        if (isset($wp_custom_fields[$key])) {
          $this->custom_fields->$key = $wp_custom_fields[$key];
        }
      }
    } else {
      unset($this->custom_fields);
    }
  }
}

?>

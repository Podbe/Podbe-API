<h2>Podbe-Json-Api</h2>
 <img width="220px"src="http://podbe.wikibyte.org/wp-content/uploads/2013/02/podbe1.png"></td>
 
<h4>Podbe JSON API for Podcatcher:</h4>

Find more information to PJA in the <a href="https://github.com/Podbe/Podbe-API/blob/master/test-podbe-json.php">Testing PHP</a>

<h2>XML Podcastpage (meta_key: podbe-types)</h2>
There are two types of variables, for example:<br>
<b>a:31:</b><br>
<b>s:7:</b><br>
<i>a</i> = array and 31 is the dimension of the array<br>
<i>s</i> = string and 7 is the length of the string
<pre>
&lt;rss version="2.0"
  xmlns:excerpt="http://wordpress.org/export/"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
>
&lt;channel>
	&lt;title>Podbe&lt;/title>
	&lt;link>http://podbe.wikibyte.org&lt;/link>
	&lt;description>Das Podcast Verzeichnis&lt;/description>
	&lt;language>de-DE&lt;/language>
	&lt;wp:base_site_url>http://podbe.wikibyte.org&lt;/wp:base_site_url>
&lt;item>
        &lt;title>Herrenabend&lt;/title>
	&lt;link>http://podbe.wikibyte.org/herrenabend/&lt;/link>
	&lt;pubDate>Day, 01 Apr 2013 00:00:00 +0000&lt;/pubDate>
	&lt;guid isPermaLink="false">http://podbe.wikibyte.org/?p=1234&lt;/guid>
	&lt;wp:post_id>1234&lt;/wp:post_id>
	&lt;wp:post_name>herrenabend&lt;/wp:post_name>
	&lt;category domain="category" nicename="podcast">&lt;![CDATA[Banner]]>&lt;/category>
		...
		...
	&lt;wp:postmeta>
	&lt;wp:meta_key>podbe-types&lt;/wp:meta_key>
  &lt;wp:meta_value>&lt;![CDATA[
    a:31:{

	s:7:"heading";
	s:24:"Alles kann, nichts muss.";

	s:5:"image";s:92:"...1400x1400.jpg";
	s:7:"moderat";s:33:"Thilo Koldehoff / Christian Lück";

	s:15:"additional-info";
	s:689:"Zwei Herren, ein Abend, jede Menge.....“";

	s:6:"itunes";
	s:67:"https://itunes.apple.com/...";

	s:6:"podrss";
	s:34:"http://www.herrenabend-podcast.de/";

	s:3:"liz";
	s:16:"Herrenabend 2013";

	s:6:"lizurl";
	s:34:"http://podcasturl.de/";

	s:8:"feedread";
	s:47:"http://....xml";

	s:7:"pmdread";
	s:56:"http://....mp3";

	s:7:"twitter";
	s:34:"https://twitter.com/HerrenabendFTW";

	s:6:"appnet";
	s:33:"https://alpha.app.net/herrenabend";

	s:5:"gplus";
	s:79:"https://plus.google.com/...";

	s:6:"podcde";
	s:37:"http://www.podcast.de/...";

	s:9:"user-eins";
	s:5:"Thilo";

	s:16:"user-eins-avatar";
	s:81:"http://...300x300.jpg";

	s:14:"user-eins-mail";
	s:28:"thilo@herrenabend-podcast.de";

	s:14:"user-eins-info";
	s:886:"Was gibt man preis...";

	s:18:"user-eins-facebook";
	s:40:"...";

	s:17:"user-eins-twitter";
	s:28:"http://twitter.com/...";

	s:15:"user-eins-alpha";
	s:31:"https://alpha.app.net/saksa2000";

	s:9:"user-zwei";
	s:9:"Christian";

	s:16:"user-zwei-avatar";
	s:85:"http://....300x300.jpg";

	s:14:"user-zwei-mail";
	s:32:"...@....de";

	s:14:"user-zwei-info";
	s:143:"Wuppertaler; Podcaster ....";

	s:17:"user-zwei-twitter";
	s:32:"http://twitter.com/horstpaluppke";

	s:15:"user-zwei-alpha";
	s:35:"https://alpha.app.net/horstpaluppke";

	s:7:"bgolori";
	s:7:"#ffffff";

	s:16:"backgroundbanner";
	s:117:"http://....1000x10001.png";

	s:12:"playerdesign";
	s:5860:"{...}";

	s:13:"playerdesignm";
	s:125:"	{&quot;hue&quot;:&quot;177&quot;,&quot;sat&quot;:&quot;74&quot;,&quot;lum&quot;:&quot;4&quot;,&quot;gra&quot;:&quot;10&quot;}";

   }

   ]]>
       &lt;/wp:meta_value>
     &lt;/wp:postmeta>
  &lt;/item>
&lt;/channel>
</pre>
<h2>Formular informations for "Podbe Json-API" (meta_values)</h2>

<b>wp_post('title')</b> = Podcastname

<b>heading</b> = Subtitle des Podcast

<b>image</b> = Bild Url des Covers

<b>moderat</b> = Name des Moderators

<b>additional-info</b> = Description des Podcasts

<b>podrss</b>  = Website URL (old ID Name for rss url)

<b>liz</b>    = Lizenz Name 

<b>lizurl</b> = Lizenz URL / Podcasting Blog & Site URL

<h4>Additional data for a Podcasting page</h4>

<b>feedread</b> = Feed URL

..more feedlinks are working!.. (Vobis, Torrents...)

<b>pmdread</b> = MP3 URL

<b>ytcvideo</b> = YouTube ID (Style one Episode in Podlove WebPlayer!)

<h4>Podcasting Social Network (links)</h4>

<b>face</b> = Facebook URL

<b>twitter</b> = Twitter URL

<b>appnet</b> = APP.Net URL

<b>gplus</b> = G+ URL

<b>ytube</b> = YouTube URL

..more links are working!..

<h4>Podcasting Networks (as link)</h4>

<b>itunes</b> = iTunes URL

<b>poduni</b> = PodUnion URL

<b>podcde</b> = Podcast.de URL

..more networklinks are working!..

<h2>The Podcaster user data</h2>

<h3>Podcaster 1</h3>

<b>user-eins</b> = Name des Podcasters

<b>user-eins</b>-= avatar Avatar URL

<b>user-eins-mail</b> = username@podcastname.tld

<b>user-eins-info</b> = Über den Podcaster (description)

<b>user-eins-facebook</b> = (URL)

<b>user-eins-twitter</b> = (URL)

<b>user-eins-alpha</b> = (URL)

<b>user-eins-xing</b> =  (URL)

<b>user-eins-yt</b> =  (URL)

<b>user-eins-podunion</b> =  (URL)

..more sociallinks are working!..

<h3>Podcaster 2</h3>

<b>user-zwei</b> = Name des Podcasters

<b>user-zwei-avatar</b> = Avatar URL

<b>user-zwei-mail</b> = username@podcastname.tld

<b>user-zwei-info</b> = Über den Podcaster (description)

<b>user-zwei-facebook </b>=  (URL)

<b>user-zwei-twitter</b> = (URL)

<b>user-zwei-alpha</b> = (URL)

<b>user-zwei-xing</b> = (URL)

<b>user-zwei-yt</b> = (URL)

<b>user-zwei-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 3</h3>

<b>user-drei</b> = Name des Podcasters

<b>user-drei-avatar</b> = Avatar URL

<b>user-drei-mail</b> = username@podcastname.tld

<b>user-drei-info</b> = Über den Podcaster (description)

<b>user-drei-facebook</b> = (URL)

<b>user-drei-twitter</b> = (URL)

<b>user-drei-alpha</b> = (URL)

<b>user-drei-xing</b> = (URL)

<b>user-drei-yt</b> = (URL)

<b>user-drei-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 4</h3>

<b>user-vier</b> = Name des Podcasters

<b>user-vier-avatar</b> = Avatar URL

<b>user-vier-mail</b> = username@podcastname.tld

<b>user-vier-info</b> = Über den Podcaster (description)

<b>user-vier-facebook</b> = (URL)

<b>user-vier-twitter</b> = (URL)

<b>user-vier-alpha</b> = (URL)

<b>user-vier-xing</b> = (URL)

<b>user-vier-yt</b> = (URL)

<b>user-vier-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 5</h3>

<b>user-fuenf</b> = Name des Podcasters

<b>user-fuenf-avatar</b> = Avatar URL

<b>user-fuenf-mail</b> = username@podcastname.tld

<b>user-fuenf-info</b> = Über den Podcaster (description)

<b>user-fuenf-facebook</b> = (URL)

<b>user-fuenf-twitter</b> = (URL)

<b>user-fuenf-alpha</b> = (URL)

<b>user-fuenf-xing</b> = (URL)

<b>user-fuenf-yt</b> = (URL)

<b>user-fuenf-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 6</h3>

<b>user-sechs</b> = Name des Podcasters

<b>user-sechs-avatar</b> = Avatar URL

<b>user-sechs-mail</b> = username@podcastname.tld

<b>user-sechs-info</b> = Über den Podcaster (description)

<b>user-sechs-facebook</b> = (URL)

<b>user-sechs-twitter</b> = (URL)

<b>user-sechs-alpha</b> = (URL)

<b>user-sechs-xing</b> = (URL)

<b>user-sechs-yt</b> = (URL)

<b>user-sechs-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 7</h3>

<b>user-sieben</b> = Name des Podcasters

<b>user-sieben-avatar</b> = Avatar URL

<b>user-sieben-mail</b> = username@podcastname.tld

<b>user-sieben-info</b> = Über den Podcaster (description)

<b>user-sieben-facebook</b> = (URL)

<b>user-sieben-twitter</b> = (URL)

<b>user-sieben-alpha</b> = (URL)

<b>user-sieben-xing</b> = (URL)

<b>user-sieben-yt</b> = (URL)

<b>user-sieben-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 8</h3>

<b>user-acht</b> = Name des Podcasters

<b>user-acht-avatar</b> = Avatar URL

<b>user-acht-mail</b> = username@podcastname.tld

<b>user-acht-info</b> = Über den Podcaster (description)

<b>user-acht-facebook</b> = (URL)

<b>user-acht-twitter</b> = (URL)

<b>user-acht-alpha</b> = (URL)

<b>user-acht-xing</b> = (URL)

<b>user-acht-yt</b> = (URL)

<b>user-acht-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 9</h3>

<b>user-neun</b> = Name des Podcasters

<b>user-neun-avatar</b> = Avatar URL

<b>user-neun-mail</b> = username@podcastname.tld

<b>user-neun-info</b> = Über den Podcaster (description)

<b>user-neun-facebook</b> = (URL)

<b>user-neun-twitter</b> = (URL)

<b>user-neun-alpha</b> = (URL)

<b>user-neun-xing</b> = (URL)

<b>user-neun-yt</b> = (URL)

<b>user-neun-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcaster 10</h3>

<b>user-zehn</b> = Name des Podcasters

<b>user-zehn-avatar</b> = Avatar URL

<b>user-zehn-mail</b> = username@podcastname.tld

<b>user-zehn-info</b> = Über den Podcaster (description)

<b>user-zehn-facebook</b> = (URL)

<b>user-zehn-twitter</b> = (URL)

<b>user-zehn-alpha</b> = (URL)

<b>user-zehn-xing</b> = (URL)

<b>user-zehn-yt</b> = (URL)

<b>user-zehn-podunion</b> = (URL)

..more sociallinks are working!..

<h3>Podcasting Guests</h3>

guests = Gästelinks

<h2>Pagedesign</h2>

<b>backgrounduri</b> = Hintergrund Bild (URL)

<b>bgolori</b> = Hintergrund Farbe (#XXXXXX)

<b>backgroundbanner</b> = Hintergrund Banner (URL)

<b>playerdesign</b> = CSS des Web Player

<b>playerdesignm</b> = Player Modal {"hue":"360","sat":"99","lum":"66","gra":"9"}

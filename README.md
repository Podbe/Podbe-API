<h2>Podbe-Json-Api</h2>
 <img width="220px"src="http://podbe.wikibyte.org/wp-content/uploads/2013/02/podbe1.png"></td>
 
<h4>Podbe JSON API for Podcatcher:</h4>

Finde more information to PJA in the <a href="https://github.com/Podbe/Podbe-API/blob/master/test-podbe-json.php">Test PHP</a>

<h2>XML Podcastpage (meta_key: podbe-types)</h2>
There are two types of variables, for example:
a:31:
s:7:
a = array and 31 is the dimension of the array
s = string and 7 is the length of the string
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
<h2>Formular informations: Podbe Json-API (meta_values)</h2>

<span style="color: #1585c9;">wp_post('title')</span> = Podcastname

<span style="color: #1585c9;">heading</span> = Subtitle des Podcast

<span style="color: #1585c9;">image</span> = Bild Url des Covers

<span style="color: #1585c9;">moderat</span> = Name des Moderators

<span style="color: #1585c9;">additional-info</span> = Description des Podcasts

<span style="color: #1585c9;">podrss</span> (old ID) = Website URL

<span style="color: #1585c9;">liz</span> = Lizenz Name

<span style="color: #1585c9;">lizurl</span> = Lizenz URL / Podcast Site URL

<h6>Zusatzdaten Podcast</h6>

<span style="color: #1585c9;">feedread</span> = Feed URL

<span style="color: #1585c9;">pmdread</span> = MP3 URL

<span style="color: #1585c9;">ytcvideo</span> = YouTube ID

<h6>Podcast Sozial Links</h6>

<span style="color: #1585c9;">face</span> = Facebook URL

<span style="color: #1585c9;">twitter</span> = Twitter URL

<span style="color: #1585c9;">appnet</span> = APP.Net URL

<span style="color: #1585c9;">gplus</span> = G+ URL

<span style="color: #1585c9;">ytube</span> = YouTube URL

<h6>Podcast Netzwerke</h6>

<span style="color: #1585c9;">poduni</span> = PodUnion URL

<span style="color: #1585c9;">podcde</span> = Podcast.de URL

<span style="color: #1585c9;">itunes</span> =  iTunes URL

<h2>Die Podcaster Daten</h2>

<h3>Podcaster 1</h3>

<span style="color: #1585c9;">user-eins</span> = Name des Podcasters

<span style="color: #1585c9;">user-eins</span>-= avatar Avatar URL

<span style="color: #1585c9;">user-eins-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-eins-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-eins-facebook</span> = (URL)

<span style="color: #1585c9;">user-eins-twitter</span> = (URL)

<span style="color: #1585c9;">user-eins-alpha</span> = (URL)

<span style="color: #1585c9;">user-eins-xing</span> =  (URL)

<span style="color: #1585c9;">user-eins-yt</span> =  (URL)

<span style="color: #1585c9;">user-eins-podunion</span> =  (URL)

<h3>Podcaster 2</h3>

<span style="color: #1585c9;">user-zwei</span> = Name des Podcasters

<span style="color: #1585c9;">user-zwei-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-zwei-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-zwei-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-zwei-facebook </span>=  (URL)

<span style="color: #1585c9;">user-zwei-twitter</span> = (URL)

<span style="color: #1585c9;">user-zwei-alpha</span> = (URL)

<span style="color: #1585c9;">user-zwei-xing</span> = (URL)

<span style="color: #1585c9;">user-zwei-yt</span> = (URL)

<span style="color: #1585c9;">user-zwei-podunion</span> = (URL)

<h3>Podcaster 3</h3>

<span style="color: #1585c9;">user-drei</span> = Name des Podcasters

<span style="color: #1585c9;">user-drei-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-drei-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-drei-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-drei-facebook</span> = (URL)

<span style="color: #1585c9;">user-drei-twitter</span> = (URL)

<span style="color: #1585c9;">user-drei-alpha</span> = (URL)

<span style="color: #1585c9;">user-drei-xing</span> = (URL)

<span style="color: #1585c9;">user-drei-yt</span> = (URL)

<span style="color: #1585c9;">user-drei-podunion</span> = (URL)

<h3>Podcaster 4</h3>

<span style="color: #1585c9;">user-vier</span> = Name des Podcasters

<span style="color: #1585c9;">user-vier-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-vier-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-vier-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-vier-facebook</span> = (URL)

<span style="color: #1585c9;">user-vier-twitter</span> = (URL)

<span style="color: #1585c9;">user-vier-alpha</span> = (URL)

<span style="color: #1585c9;">user-vier-xing</span> = (URL)

<span style="color: #1585c9;">user-vier-yt</span> = (URL)

<span style="color: #1585c9;">user-vier-podunion</span> = (URL)

<h3>Podcaster 5</h3>

<span style="color: #1585c9;">user-fuenf</span> = Name des Podcasters

<span style="color: #1585c9;">user-fuenf-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-fuenf-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-fuenf-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-fuenf-facebook</span> = (URL)

<span style="color: #1585c9;">user-fuenf-twitter</span> = (URL)

<span style="color: #1585c9;">user-fuenf-alpha</span> = (URL)

<span style="color: #1585c9;">user-fuenf-xing</span> = (URL)

<span style="color: #1585c9;">user-fuenf-yt</span> = (URL)

<span style="color: #1585c9;">user-fuenf-podunion</span> = (URL)

<h3>Podcaster 6</h3>

<span style="color: #1585c9;">user-sechs</span> = Name des Podcasters

<span style="color: #1585c9;">user-sechs-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-sechs-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-sechs-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-sechs-facebook</span> = (URL)

<span style="color: #1585c9;">user-sechs-twitter</span> = (URL)

<span style="color: #1585c9;">user-sechs-alpha</span> = (URL)

<span style="color: #1585c9;">user-sechs-xing</span> = (URL)

<span style="color: #1585c9;">user-sechs-yt</span> = (URL)

<span style="color: #1585c9;">user-sechs-podunion</span> = (URL)

<h3>Podcaster 7</h3>

<span style="color: #1585c9;">user-sieben</span> = Name des Podcasters

<span style="color: #1585c9;">user-sieben-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-sieben-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-sieben-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-sieben-facebook</span> = (URL)

<span style="color: #1585c9;">user-sieben-twitter</span> = (URL)

<span style="color: #1585c9;">user-sieben-alpha</span> = (URL)

<span style="color: #1585c9;">user-sieben-xing</span> = (URL)

<span style="color: #1585c9;">user-sieben-yt</span> = (URL)

<span style="color: #1585c9;">user-sieben-podunion</span> = (URL)

<h3>Podcaster 8</h3>

<span style="color: #1585c9;">user-acht</span> = Name des Podcasters

<span style="color: #1585c9;">user-acht-avatar</span> = Avatar URL

<span style="color: #1585c9;">user-acht-mail</span> = username@podcastname.tld

<span style="color: #1585c9;">user-acht-info</span> = Über den Podcaster (description)

<span style="color: #1585c9;">user-acht-facebook</span> = (URL)

<span style="color: #1585c9;">user-acht-twitter</span> = (URL)

<span style="color: #1585c9;">user-acht-alpha</span> = (URL)

<span style="color: #1585c9;">user-acht-xing</span> = (URL)

<span style="color: #0870d8;">user-acht-yt</span> = (URL)

<span style="color: #0870d8;">user-acht-podunion</span> = (URL)

<h3>Podcaster 9</h3>

<span style="color: #0870d8;">user-neun</span> = Name des Podcasters

<span style="color: #0870d8;">user-neun-avatar</span> = Avatar URL

<span style="color: #0870d8;">user-neun-mail</span> = username@podcastname.tld

<span style="color: #0870d8;">user-neun-info</span> = Über den Podcaster (description)

<span style="color: #0870d8;">user-neun-facebook</span> = (URL)

<span style="color: #0870d8;">user-neun-twitter</span> = (URL)

<span style="color: #0870d8;">user-neun-alpha</span> = (URL)

<span style="color: #0870d8;">user-neun-xing</span> = (URL)

<span style="color: #0870d8;">user-neun-yt</span> = (URL)

<span style="color: #0870d8;">user-neun-podunion</span> = (URL)

<h3>Podcaster 10</h3>

<span style="color: #0870d8;">user-zehn</span> = Name des Podcasters

<span style="color: #0870d8;">user-zehn-avatar</span> = Avatar URL

<span style="color: #0870d8;">user-zehn-mail</span> = username@podcastname.tld

<span style="color: #0870d8;">user-zehn-info</span> = Über den Podcaster (description)

<span style="color: #0870d8;">user-zehn-facebook</span> = (URL)

<span style="color: #0870d8;">user-zehn-twitter</span> = (URL)

<span style="color: #0870d8;">user-zehn-alpha</span> = (URL)

<span style="color: #0870d8;">user-zehn-xing</span> = (URL)

<span style="color: #0870d8;">user-zehn-yt</span> = (URL)

<span style="color: #0870d8;">user-zehn-podunion</span> = (URL)

<h3>Gäste</h3>

guests = Gästelinks

<h2>Design</h2>

backgrounduri = Hintergrund Bild (URL)

bgolori = Hintergrund Farbe (#XXXXXX)

backgroundbanner = Hintergrund Banner (URL)

playerdesign = CSS des Web Player

playerdesignm = Player Modal {"hue":"360","sat":"99","lum":"66","gra":"9"}

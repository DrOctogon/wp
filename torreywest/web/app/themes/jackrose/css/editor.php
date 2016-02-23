<?php header( 'Content-type: text/css; charset: UTF-8' ); ?>

body {
	background: #fff;
	color: #888;
	font-family: serif;
	font-size: 14px;
	line-height: 1.85;

	max-width: 1080px;
	margin: 1em;
	font-family: <?php echo urldecode( $_REQUEST[ 'typography_body_font_family' ] ); ?>;
}
h1, h2, h3, h4, h5, h6 {
	margin: 2rem 0 1rem;
	color: #444;
	font-style: italic;
	font-family: serif;

	font-family: "<?php echo urldecode( $_REQUEST[ 'typography_headings_font_family' ] ); ?>";
}
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
	color: inherit;
}
h1 {
	font-size: 200%;
	line-height: 1.3;
}
h2 {
	font-size: 175%;
	line-height: 1.4;
}
h3 {
	font-size: 150%;
	line-height: 1.5;
}
h4 {
	font-size: 130%;
	line-height: 1.6;
}
h5 {
	font-size: 110%;
	line-height: 1.7;
}
h6 {
	font-size: 100%;
}
a {
	text-decoration: none;
	-webkit-transition: all 0.25s ease-in-out;
	transition: all 0.25s ease-in-out;

	color: <?php echo urldecode( $_REQUEST[ 'color_accent' ] ); ?>;
}
a:hover,
a:focus,
a:active {
	color: #444;
	outline: 0;
}
img {
	max-width: 100%;
	height: auto;
}
p {
	margin: 0 0 1.5em;
}
blockquote {
	margin: 0 0 1.5em;

	background-color: #f3f3f3;
	padding: 1.5em 2em;
	font-size: 120%;
	font-style: italic;
}
blockquote p:last-child {
	margin-bottom: 0;
}
hr {
	background-color: #e5e5e5;
	border: 0;
	height: 1px;
	margin: 1.5em 0;
}
ul, ol {
	margin: 0 0 1.5em 3em;
	padding: 0;
}
li > ul,
li > ol {
	margin-bottom: 0;
	margin-left: 1.5em;
}
embed,
iframe,
object {
	max-width: 100%;
}
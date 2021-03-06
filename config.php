<?php
/**
 *	Filename: config.php
 *
 *	Description: The custom boot loader
 * 
 */
 
$activated =  dirname(__FILE__).'/../wptruecache-activate.php';

define( 'WPTRUECACHE_VERSION_LEVEL','2.1' );
define( 'WPTRUECACHE_LAST_REVISION_DATE','Sep 6, 2016' );
define( 'WPTRUECACHE_VERSION','WP-TrueCache v'.WPTRUECACHE_VERSION_LEVEL);
define( 'WPTRUECACHE_PLUGIN_AUTHOR','PressPage Entertainment Inc.');
define( 'WPTRUECACHE_PLUGIN_AUTHOR_EMAIL','(<a href="mailto:presspage.entertainment@gmail.com?subject=WP-TrueCache%20Plugin%20Support">presspage.entertainment@gmail.com</a>)');
define( 'WPTRUECACHE_VIDEO_ENABLED', TRUE );
define( 'WPTRUECACHE_VIDEO_SOURCE', 'https://www.youtube.com/embed/tRJviSQ9N54?controls=0' );
define( 'WPTRUECACHE_VIDEO_TYPE', 'video/ogg' );
define( 'WPTRUECACHE_VIDEO_POSTER', '/wp-truecache/admin/docs/images/Ashley.jpg' );

// locks time out after 5 seconds
define( 'LOCK_TIMEOUT', 5 ); 
define( 'MEMCACHE_TIMEOUT', 30000 );
define( 'COMMENT_COOKIE_TIMEOUT', (60 * 60 * 24));
define( 'WPTRUECACHE_WAIT', 5 );
define( 'WPTRUECACHE_NOCACHE_ITEMS', 'png|gif|jpg|js|feed|wp-login|wp-admin');
define( 'WPTRUECACHE_MEMCACHE_PORT', 11211 );

define( 'WPTRUECACHE_UPDATE_URL', FALSE );

define( 'WP_TRUECACHE_TRACEON', TRUE );

if (file_exists(ABSPATH.'wp-admin/network/wptruecache-config.php')) {
	include(ABSPATH.'wp-admin/network/wptruecache-config.php');
}

if (file_exists(dirname(__FILE__).'/logging.php')) {
	include (dirname(__FILE__).'/logging.php');	
}

if (file_exists(dirname(__FILE__).'/cache.php')) {
	require_once(dirname(__FILE__).'/cache.php');
}

if (file_exists($activated) && function_exists("wptruecache_check_cache")) {
	wptruecache_check_cache();
}

?>
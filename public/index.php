<?php
/**
*
* *********************************************
* =============================================
* -----------SINGLE FILE FRAMEWORK-------------
* A single file to handle all files asbed on URL
* written by Richard Testani
* http://www.richtestani.com
* @sandman25
* version 0.5.5
* July 2014

* ============== MANUAL =======================
* Upload this file, the .htaccess and the folders.
* Inside the files directory is php file.
* This is your template. Edit this as you please.
* Go to yourdomain.com/ to see it.
* 
* With SFF you can add any page by placing
* php files in the files folder and load it via:
* yourdomain.com/my-page
*
* ---- URL Params ------------------------------
* You can pass in page params like:
* yourdomain.com/page-name/param/value
* Params are handled in pairs, so you
* should build your URLs accordingly.
*
* ---- Plugins ---------------------------------
* These are really basic includes, but lets you
* add in whatever functionality you want.
* Write your own functions which are callable
* in your pages. Simple drop a PHP file in
* the plugins folder, and go.
*
* ---- Config ----------------------------------
* You can supply your own site configurations
* by adding a php file to the config folder
* your file should consist soley of a
* multi-dimentional array named $config
* example:
* $config['page_title'] = 'My Site';
* $config['title'] = 'My Title';
* each key is available as a
* variable as its name:
* echo $title;
*
*/

/*
*--------------------------
* Set the homepage filename
*--------------------------
*/
$homepage = 'home';
$errorpage = '_404';

//Parse the URL path
$url = explode( "/", ltrim(rtrim($_SERVER['REQUEST_URI'], "/"), "/") );

//File name to load
$file = $url[0];

//Prepare url params
unset($url[0]);
$url = array_merge(array(), $url);

//Build a config
$config['homepage']			= $homepage;
$config['current_page'] 		= (empty($file)) ? $homepage : $file;
$config['params']			= $url;
$config['errorpage']			= $errorpage;

//Define app variables
define('APPPATH', realpath('./'));
define('DS', DIRECTORY_SEPARATOR);
define('EXT', 'php');
define('PLUGINS', '../plugins');
define('CONFIG', '../config');
define('FILES', 'files');
define('IMAGES', 'images');
define('ASSETS', 'assets');


//template names
define('HEADER', 'header');
define('FOOTER', 'footer');

//load configs
load_plugins( dir_list(CONFIG) );

//Load site plugins
load_plugins( dir_list('./'.PLUGINS) );

//Render the final output
render($file, $config);

/*********************
*
* Directory listing
*
*********************/
function dir_list( $dir, $private = true, $recursive = true, $exclude = array() )
{
	$dir = scandir( $dir );
	foreach( $dir as$i => $p )
	{
		if( $p == '.' OR $p == '..' OR $p[0] == '.' OR $p == 'favicon.ico' )
		{
			unset($dir[$i]);
		}
	}

	return array_merge(array(), $dir);
}

/*********************
*
* External dependencies loader
*
*********************/
function load_plugins( $plugins, $exclude = array() )
{
	foreach($plugins as $p)
	{
		include( realpath('./'.PLUGINS.DS).DS.$p );
	}
}
<?php

/*
 * @author Richard Testani
 * @package sffapp
 * @category boot
 * -------------
 * @version 0.6
 * @copyright 2014 Richard Testani
 * -------------
 * @description SFF is a super simple framework which allows loading of PHP
 * or plain HTML files using URLs as the controlling mechanism
 * 
 */

/*
 * @var string $homepage
 * @description Define which file will be the root file for your site
 */
$homepage           = 'home';

/*
 * @var string $errorpage
 * @description Define which file will be load in the event a page is not available
 */
$errorpage          = '_404';

$appdir             = 'sff';

$pluginsdir         = 'plugins';

$configdir          = 'config';

$filesdir           = 'files';

$version            = 0.6;

/*
 * SFF Constants
 */
define( 'DS', DIRECTORY_SEPARATOR );
define( 'EXT', 'php' );
define( 'APPPATH', realpath('../') );
define( 'PUBPATH', realpath('./') );


/*
 * Boot SFF
 */
$config = _boot( $homepage, $appdir, $pluginsdir, $configdir, $filesdir, $errorpage );

/*
 * Render file
 */
render( $config['site']['file'], $config );


//========== Functions ============//

/*
 * @method _build_url_array
 * @description build an array form the current url string
 */


function _boot( $homepage, $appdir, $pluginsdir, $configdir, $filesdir, $errorpage )
{
    //determine files and params
    $url = explode( "/", ltrim(rtrim(filter_input(INPUT_SERVER, 'REQUEST_URI'), "/"), "/") );
    $url = array_merge(array(), $url);

    $file = ( empty( $url[0] ) ) ? $homepage : $url[0];
    unset( $url[0] );
    
    //system file
    require_once APPPATH . DS . 'sff' . DS . '_sff.' . EXT;
    
    //setup page params
    $params = build_params( array_merge( array(), $url ) );
    
    //load_confgs
    $config = dir_list( APPPATH . DS . $configdir );

    foreach( $config as $c )
    {
        $filepath = APPPATH . DS . $configdir . DS . $c;
        if( file_exists( $filepath ) )
            require_once $filepath;
        
    }
    
    
    //load_plugins
    load_plugins( dir_list( APPPATH . DS . $pluginsdir ), $pluginsdir );
    
    $config['site']['file'] = $file;
    $config['site']['params'] = $params;
    $config['site']['configdir'] = $configdir;
    $config['site']['pluginsdir'] = $pluginsdir;
    $config['site']['filesdir'] = $filesdir;
    $config['site']['appdir'] = $appdir;
    $config['site']['error'] = $errorpage;

    return $config;
    
}
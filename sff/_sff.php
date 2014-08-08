<?php
/****************************
*
* Build Parameters from URL
*
****************************/
function build_params( $params )
{
	$counter = 0;
	$array = array();
	$keys = array();
	$values = array();

	//make sure we have even url parts
	if( count( $params ) % 2 != 0 )
	{
		$params[] = 0;
	}

	//build multi-dimensional array
	foreach( $params as $v )
	{
		if( $counter == 0)
		{
			$keys[] = $v;
			$counter++;
		}
		else {
			$values[] = $v;
			$counter = 0;
		}
	}

	if( ! empty($keys) )
	{
		$array = array_combine($keys, $values);
	}

	return $array;
}

/****************************
*
* Load the Controlling File
*
****************************/
function load_file( $filename, $filesdir, $config, $override = false )
{
    
    $filepath = PUBPATH . DS . $filesdir . DS . $filename . '.' . EXT;
    
    ob_start();
    
    extract( $config );
    extract( $site['params'] );
    
    if( ( file_exists( $filepath) AND strpos($filename, '_') !== 0 ) OR ( file_exists( $filepath) AND $override ) )
    {
        require_once $filepath;
    }
    else
    {
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); 
        $filename = $site['error'] . '.' . EXT;
        $filepath = PUBPATH . DS . $filesdir . DS . $filename;
        
        require_once $filepath;
    }
    
    $contents = ob_get_contents();
    
    ob_clean();
    
    return $contents;

}

/****************************
*
* Render and output the page
*
****************************/
function render( $file, $config )
{
    extract( $config );
    
    $override = false;
    
    /*
     * check for ajax call, if so allow file loading
     */
    if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' )
    {
            $override = true;
    }

    $file = load_file( $file, $site['filesdir'], $config, $override );

    echo $file;
    
}

/****************************
*
* Load files in the plugins folder
*
****************************/
function load_plugins( $plugins, $pluginsdir, $exclude = array() )
{
    
    $exclude_defaults = array('.', './');
    $exclude = array_merge($exclude_defaults, $exclude);
    
    foreach($plugins as $p)
    {        
        if( ! in_array($p, $exclude) AND ! is_dir( realpath('./'.$pluginsdir.DS).DS.$p ) AND ! in_array( $exclude ) )
        {
            if( file_exists( realpath('../') . DS . $pluginsdir. DS . $p ) )
            {
                    include( realpath('../') . DS . $pluginsdir. DS . $p );
            }

        }

    }
}

/****************************
*
* return a list of directories
*
****************************/
function dir_list( $dir, $private = true, $recursive = true, $exclude = array() )
{
	if( ! file_exists( $dir ) )
        {
            return array();
        }
        
        $dir = scandir( $dir );
 
	foreach( $dir as $i => $p )
	{
            if( $p == '.' OR $p == '..' OR $p[0] == '.' OR $p == 'favicon.ico' OR in_array($p, $exclude) )
            {
                unset($dir[$i]);
            }
	}
	return array_merge(array(), $dir);
}

function get_config_item($item, $key = '', $config)
{
    if( ! empty( $key ) )
    {
        return $config[$key][$item];
    }
    else
    {
        return $config[$item];
    }
    
}

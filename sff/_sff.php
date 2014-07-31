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
function load_file( $filename, $filesdir, $config )
{
    
    $filepath = PUBPATH . DS . $filesdir . DS . $filename . '.' . EXT;
    
    ob_start();
    
    extract( $config );
    
    if( file_exists( $filepath) )
    {
        require_once $filepath;
    }
    else
    {
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
    
    $file = load_file( $file, $site['filesdir'], $config );

    echo $file;
    
}

/****************************
*
* Load files in the plugins folder
*
****************************/
function load_plugins( $plugins, $pluginsdir, $exclude = array() )
{
    foreach($plugins as $p)
    {
        if( ! in_array($p, $exclude) AND ! is_dir( realpath('./'.$pluginsdir.DS).DS.$p ) AND ! in_array( $exclude ) )
        {
            include( realpath('./'.$pluginsdir.DS).DS.$p );
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

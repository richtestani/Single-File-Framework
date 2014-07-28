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
function load_file( $filename, $config )
{

	extract($config);
	
	if( empty( $filename ) )
	{
		$filename = $config['homepage'];
	}

	$path = realpath('.'.DS) . DS . FILES . DS . $filename . '.' . EXT;

	ob_start();
	
	if( file_exists( $path) )
	{
		require_once( $path );
	}
	else {
		$errorpath = realpath('.'.DS) . DS . FILES . DS . $errorpage . '.' . EXT;
	}
	
	$file = ob_get_contents();
	ob_end_clean();

	return $file;
}

/****************************
*
* Render and output the page
*
****************************/
function render( $file, $config )
{
	
	//load config
	$config_files = dir_list('./'.CONFIG);
	
	foreach($config_files as $c)
	{
		include( realpath( './'.CONFIG ) . DS . $c);
	}
	
	$config['params'] = build_params( $config['params'] );

	//load the content
	$file = load_file( $file, $config );
	
	extract($config);

	ob_start();
	if( file_exists( realpath('.'.DS) . DS . FILES . DS . HEADER . '.' . EXT ) )
	{
		require_once( realpath('.'.DS) . DS . FILES . DS . HEADER . '.' . EXT );
	}
	
	echo $file;
	
	if( file_exists( realpath('.'.DS) . DS . FILES . DS . FOOTER . '.' . EXT ) )
	{
		require_once( realpath('.'.DS) . DS . FILES . DS . FOOTER . '.' . EXT );
	}
	$output = ob_get_contents();
	ob_end_clean();

	echo $output;
}



function register_vars($name, $value)
{

}

?>
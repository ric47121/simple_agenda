<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
set_time_limit(70);

define("DB_HOST", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "agenda");

   
// error_reporting(0);
		
$gaSql['user']       = DB_USER;
$gaSql['password']   = DB_PASS;
$gaSql['db']         = DB_NAME;
$gaSql['server']     = DB_HOST;


function fatal_error ( $sErrorMessage = '' )
{
	header( $_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error' );
	die( $sErrorMessage );
}

if ( ! $gaSql['link'] = mysqli_connect( $gaSql['server'], $gaSql['user'], $gaSql['password']  ) )
{
	fatal_error( 'Could not open connection to server' );
}

if ( ! mysqli_select_db( $gaSql['link'], $gaSql['db'] ) )
{
	fatal_error( 'Could not select database ' );
}

?>
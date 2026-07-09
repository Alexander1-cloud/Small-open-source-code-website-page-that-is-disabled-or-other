<?php
/* Getting the time of the last site modification. */
/* $tempateLastModifiedTime, $cssLastModifiedTime are in the file '/index.php'. */

/* The time of the last site change is calculated by comparing the timestamps of the style and template file changes. */
if( $tempateLastModifiedTime > $cssLastModifiedTime )
{
    $siteLastModifiedTime = $tempateLastModifiedTime;
}
else
{
    $siteLastModifiedTime = $cssLastModifiedTime;
}

/* Forming the date in HTTP format. */
$lastModifiedHeader = gmdate( 'D, d M Y H:i:s GMT', $siteLastModifiedTime );

/* Checking if there has already been a request with the If-Modified-Since condition. */
$ifModifiedSince = isset( $_SERVER['HTTP_IF_MODIFIED_SINCE'] ) ? strtotime( $_SERVER['HTTP_IF_MODIFIED_SINCE'] ) : false;

/* If the page has not changed, we return 304 Not Modified. */
if ( $ifModifiedSince !== false && $ifModifiedSince >= $siteLastModifiedTime )
{
    header( $_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified' );
    exit;
}

/* Sending the Last-Modified header. */
header( 'Last-Modified: ' . $lastModifiedHeader );
header( 'Cache-Control: public, max-age=3600' );
?>
<?php /* It is an open source script for various applications. */
/* robots.txt and sitemap.xml static and manually edited. */
if (PHP_VERSION_ID < 50217)
{
    echo 'Code for PHP (5.2) and older versions';
    exit;
}

ini_set('max_execution_time', 1);/* You cat set max_execution_time more than 1 second if your server work slow. */

error_reporting(E_ALL);
ini_set('display_errors',1);

ini_set('memory_limit', '8388608');/* Memory_limit in bytes. 5242880 bytes = 5 Mbyte. */

ini_set('upload_max_filesize', '1M');
ini_set('post_max_size', '1M');

setlocale(LC_ALL, 'RU.UTF-8');

/* You can choose your time zone. */
ini_set('date.timezone','Europe/Moscow');

/* A constant for stopping the work of other scripts of the current application without participation index.php. */
define('A',1);

try
{
    /* The time when the template file was last modified. */
    $tempateLastModifiedTime = filemtime('template.php');
    
    /* The time when the style file was last modified. */
    $cssLastModifiedTime = filemtime('style.css');
    
    /* Optimizing the browser cache. */
    /*  1.  You can delete lines require_once 'httpheaders.php';, $tempateLastModifiedTime = filemtime('template.php');, $cssLastModifiedTime = filemtime('style.css');.  */
    /*  1.1 If you don't need a cache and you need to make the application simpler. */
    /*  1.1.2 You should also delete the file httpheaders.php. */
    require_once 'httpheaders.php';
    
    /* Controls and cleans $_GET parameters. */
    require_once 'xsscontrol.php';
    
    /* Load A function for managing requests from the url string. */
    require_once 'route.php';
    
    /* A function for managing requests from the url string. */
    new Route('/');
} 
catch (Exception $error) {
   
    echo $error->getMessage();
}
?>

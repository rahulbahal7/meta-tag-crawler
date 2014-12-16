<?php
//session_start();

include_once('simple_html_dom.php');
require_once('db_config.php');

$url = "http://www.sidereel.com";
$tags = get_meta_tags('http://www.sidereel.com/');
$keywords = $tags['keywords'];     
$description = $tags['description'];

$html = new simple_html_dom();
$html->load_file($url);
foreach($html->find('a') as $link){
$l =  $link->href;
echo $l;
$sql = "INSERT INTO links (link,meta_desc,meta_keywords) VALUES ('$l','$description','$keywords')";
//$sql = "INSERT INTO links (link) VALUES ('$l')";

$retval = mysql_query( $sql);

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

echo "<br>";
}
//mysql_close($conn);
?>
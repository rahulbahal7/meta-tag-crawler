<?php
$tags = get_meta_tags('http://www.sidereel.com/');

// Notice how the keys are all lowercase now, and
// how . was replaced by _ in the key.
//echo $tags['author'];       // name
echo "keywords".$tags['keywords']."<br><br>";     // php documentation
echo "description".$tags['description'];  // a php manual
//echo $tags['geo_position'];
?>
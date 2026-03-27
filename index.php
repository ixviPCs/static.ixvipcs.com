<?php
$files = scandir('.');
$self = basename(__FILE__);

// remove ., .., and this file
$files = array_diff($files, ['.', '..', $self]);

// sort alphabetically
sort($files, SORT_NATURAL | SORT_FLAG_CASE);

// output plain links
foreach ($files as $file) {
    echo "<a href=\"$file\">$file</a><br>";
}
?>

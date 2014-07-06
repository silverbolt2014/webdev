<?php // copyfile.php
copy('testfile.txt', 'textfile2.txt') or die('Could not copy file');
echo "File successfully copied to 'testfile2.txt'";

?>
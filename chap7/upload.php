<?php
echo <<<_END
<html><head><title><Php Form upload</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>

Select File: <input type='file' name='filenameField' size='10'/>
<input type='submit' value='upload'/>
</form>
_END;

print "<pre>";
print_r($_FILES);
print "</pre>";
echo "<br /> <br/>";

if ($_FILES)
{
  
  $name = $_FILES['filenameField']['name'];
	move_uploaded_file($_FILES['filenameField']['tmp_name'], $name);
	echo "Uploaded image '$name' <br /><img src='$name' />";
}

echo "</body></html>";
?>
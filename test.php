<!DOCTYPE html>
<?php
$uploaddir = '../upload/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);
var_dump($_FILES["file"]["error"]);

print "</pre>";

?>

	<html>

	<head>
		<meta charset="utf-8">
		<title>RAM System</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

	<body>
		<fieldset>
      <legend>
        Upload files
      </legend>
			<form id="upload" method="post" action="index.php" enctype="multipart/form-data" class="w3-container">
				<input type="file" name="file" class="w3-input w3-border w3-light-grey"><br />
				<input type="submit" class="w3-btn w3-green" value="Upload"> </form>
      </fieldset>
      <br><br>
      <h2>Files</h2>
        <table class="w3-table w3-striped">
        <?php
          $dir = "../upload/";
          $files = array_diff(scandir($dir), array('..', '.'));

          foreach ($files as $file) {
              # code...
         ?>
         <tr>
           <form  action="execution.html" method="post">
             <input type="hidden" name="FileToExec" value="<?php echo $file; ?>"/>
             <td>
                 <?php echo $file; ?>
             </td>
             <td>
               <input type="submit" class="w3-btn w3-green" value="Detect"/>
             </td>
           </form>
         </tr>
        <?php

          }
         ?>
         </table>

	</body>

	</html>

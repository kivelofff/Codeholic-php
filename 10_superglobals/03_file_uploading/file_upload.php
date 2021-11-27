<?php

/*
 * TODO:
 * 1. print files from $_FILES
 * 2. form should have proper enctype
 * 3. print what is inside $_FILES
 * 4. move uploaded file to current file
 * 5. change post_max_size value in xampp/php/php.ini to make able to upload big files
 * 6. restart apache
 * 7. try to upload big file
 * 8. make simple validation:
 *  8.1 check file size. if it's too big show error
 *  8.2 get an extension with pathinfo
 *  8.3 check if it's in array of allowed extension

*/
echo '<pre>';
var_dump($_FILES);
echo '</pre>';

if (isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file"><br>
  <button>Submit</button>
</form>
</body>
</html>

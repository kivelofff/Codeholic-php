<?php
//GET method is used when you need to get data from server.
//sending data using GET not secure
/*TODO
1. Process request only if it's POST
2. Get input form associative array corresponding POST
3. stripslahes - remove slashes
4. htmlspecialchars - remove special chars, which used in scripts
5. create function to validate data
6. create array for errors
7. create constant for isRequired
8. change field class if corresponding error has happened
9. invalid feedback div could be always there.
*/
const NOT_SET_ERR = 'Value is empty';
$errors = [];
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    echo '<pre>';
    var_dump($_POST);;
    echo '</pre>';
    $username = checkNotEmptyAndSafe($_POST['username'], 'username', $errors);
    $email = checkNotEmptyAndSafe($_POST['email'], 'email', $errors);
    $password = checkNotEmptyAndSafe($_POST['password'], 'password', $errors);
    $password_confirm = checkNotEmptyAndSafe($_POST['password_confirm'], 'password_confirm', $errors);
    $cv_url = checkNotEmptyAndSafe($_POST['cv_url'], 'cv_url', $errors);

    echo $username.'<br>';
    echo $email.'<br>';
    echo $password.'<br>';
    echo $password_confirm.'<br>';
    echo $cv_url.'<br>';
    echo '<pre>';
    var_dump($errors);
    echo '</pre>';

}

function checkNotEmptyAndSafe($str, $type, &$errors ) {
    if($str != '') {
        return htmlspecialchars(stripslashes($str));
    } else {
        $errors[$type] = NOT_SET_ERR;
    }
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
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="padding: 50px;">

<form action="" method="post" novalidate>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control"
                       name="username">
                <small class="form-text text-muted">Min: 6 and max 16 characters</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control"
                       name="password">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password"
                       class="form-control"
                       name="password_confirm">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Your CV link</label>
            <input type="text" class="form-control"
                   name="cv_url" placeholder="https://www.example.com/my-cv"/>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Register</button>
    </div>
</form>

</body>
</html>

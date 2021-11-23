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
    $username = checkUsermame($_POST['username'], $errors)??'';
    $email = checkEmail($_POST['email'], $errors)??'';
    $passwords = checkPassword($_POST['password'], $_POST['password_confirm'], $errors);
    $password = $passwords[0]??'';
    $password_confirm = $passwords[1]??'';
    $cv_url = checkCvUrl($_POST['cv_url'], $errors)??'';

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

function checkUsermame($str, &$errors) {
    $username = checkNotEmptyAndSafe($str, 'username', $errors);
    if (!isset($errors['username']) && strlen($username)<6 || strlen($username)>16) {
        $errors['username'] = 'username should be longer than 6 and shorter than 16 symbols';
    }
    return $username;
}

function checkEmail($str, &$errors) {
    $email = checkNotEmptyAndSafe($str, 'email', $errors);
    if (!isset($errors['email']) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'wrong email format';
    }
    return $email;
}

function checkPassword($str1, $str2, &$errors): array
{
    $password = checkNotEmptyAndSafe($str1, 'password', $errors);
    $password_confirm = checkNotEmptyAndSafe($str2, 'password_confirm', $errors);
    if ((!isset($errors['password']) && !isset($errors['password_confirm'])) && strcmp($password, $password_confirm)!=0) {
        $errors['password'] = 'passwords don\'t match';
        $errors['password_confirm'] = 'passwords don\'t match';
    }
    return [$password, $password_confirm];

}

function checkCvUrl($str, &$errors) {
    $cv_url = checkNotEmptyAndSafe($str, 'cv_url', $errors);
    if (!isset($errors['cv_url']) && !filter_var($cv_url, FILTER_VALIDATE_URL)) {
        $errors['cv_url'] = 'wrong url format';
    }
    return $cv_url;
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
                <input class="form-control<?php echo isset($errors['username'])?' is-invalid':'';?>"
                       name="username"  value="<?php echo $username?>">
                <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                <div class="invalid-feedback">
                    <?php echo $errors['username'] ?? '' ?>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control<?php echo isset($errors['email'])?' is-invalid':'';?>"
                       name="email"  value="<?php echo $email?>">
                <div class="invalid-feedback">
                    <?php echo $errors['email'] ?? '' ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control<?php echo isset($errors['password'])?' is-invalid':'';?>"
                       name="password"  value="<?php echo $password?>">
                <div class="invalid-feedback">
                    <?php echo $errors['password'] ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password"
                       class="form-control<?php echo isset($errors['password_confirm'])?' is-invalid':'';?>"
                       name="password_confirm"  value="<?php echo $password_confirm?>">
                <div class="invalid-feedback">
                    <?php echo $errors['password_confirm'] ?? '' ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Your CV link</label>
            <input type="text" class="form-control<?php echo isset($errors['cv_url'])?' is-invalid':'';?>"
                   name="cv_url" value="<?php echo $cv_url?>"/>
            <div class="invalid-feedback">
                <?php echo $errors['cv_url'] ?? '' ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Register</button>
    </div>
</form>

</body>
</html>

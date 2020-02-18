<?php
// Do some complex form validation
// https://www.w3schools.com/php/php_form_validation.asp

// Using filters
// https://www.w3schools.com/php/php_filter.asp

define('REQUIRED_FIELD_ERROR', 'This field is required');

$errors = [];
$username = '';
$email = '';
$password = '';
$password_confirm = '';
$cv_url = '';
$postData = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = post_data('username');
    $email = post_data('email');
    $password = post_data('password');
    $password_confirm = post_data('password_confirm');
    $cv_url = post_data('cv_url');

    if (!$username) {
        $errors['username'] = REQUIRED_FIELD_ERROR;
    } else if (strlen($username) < 6 || strlen($username) > 16){
        $errors['username'] = 'Username must be less than 16 and more than 6 chars';
    }
    if (!$email) {
        $errors['email'] = REQUIRED_FIELD_ERROR;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Please enter valid email address';
    }
    if (!$password) {
        $errors['password'] = REQUIRED_FIELD_ERROR;
    }
    if (!$password_confirm) {
        $errors['password_confirm'] = REQUIRED_FIELD_ERROR;
    }
    if ($password && $password_confirm && strcmp($password, $password_confirm) !== 0){
        $errors['password_confirm'] = 'Please repeat the password correctly';
    }
    if ($cv_url && !filter_var($cv_url, FILTER_VALIDATE_URL)) {
        $errors['cv_url'] = 'Please provide a valid link address';
    }

}

function post_data($field)
{
    if (!isset($_POST[$field])) {
        return false;
    }
    $data = $_POST[$field];
    return htmlspecialchars(stripslashes(trim($data)));
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

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" novalidate>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : '' ?>"
                       name="username" value="<?php echo $username ?>">
                <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                <div class="invalid-feedback">
                    <?php echo $errors['username'] ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>"
                       name="email" value="<?php echo $email ?>">
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
                <input type="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>"
                       name="password" value="<?php echo $password ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['password'] ?? '' ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password"
                       class="form-control <?php echo isset($errors['password_confirm']) ? 'is-invalid' : '' ?>"
                       name="password_confirm" value="<?php echo $password_confirm ?>">
                <div class="invalid-feedback">
                    <?php echo $errors['password_confirm'] ?? '' ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            <label>Your CV link</label>
            <input type="text" class="form-control <?php echo isset($errors['cv_url']) ? 'is-invalid' : '' ?>"
                   name="cv_url" placeholder="https://www.example.com/my-cv" value="<?php echo $cv_url ?>"/>
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

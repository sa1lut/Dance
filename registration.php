<?php
require_once('init.php');
require_once('helpers.php');
require_once('functions.php');

$header = include_template('header.php');
$footer = include_template('footer.php');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required_fields = [
        'login' => 'Введите login',
        'password' => 'Введите пароль',
        'name' => 'Введите имя',
        'last_name' => 'Введите фамилию'
        // 'birthday' => 'Введите дату рождения'
    ];

    foreach($required_fields as $key => $value) {
        if (empty($_POST[$key])) {
            $errors[$key] = $value;
        }
    }

    if (!isset($errors['login']) && !empty(getUserByLogin($con, $_POST['login']))) {
        $errors['login'] = 'Такой логин уже используется';
    }

    $errors = array_filter($errors);
    print_r($errors);
    if(!$errors){
        
        $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $data = $_POST;
        $data['password'] = $passwordHash;

        addUserToDatabase($con, $data);

        header('Location: login.php');
        exit;
    }
}

$registration_content = include_template('registration.php', [
    'header' => $header,
    'footer' => $footer,
    'errors' => $errors,
]);


print($registration_content);
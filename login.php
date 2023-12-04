<?php
require_once('init.php');
require_once('helpers.php');
require_once('functions.php');

$header = include_template('header.php');

$footer = include_template('footer.php');

if (isset($_SESSION['username'])) {
    header('location: /index.php');
    exit;
} else {
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $required_fields = [
            'login' => 'Введите логин',
            'password' => 'Введите пароль'
        ];

        foreach($required_fields as $key => $value) {
            if (empty($_POST[$key])) {
                $errors[$key] = $value;
            }
        }
        
        if (!isset($errors['login']) && !isset($errors['password'])) {
            $user = getUserByLogin($con, $_POST['login']);

            if (empty($user) || $_POST['password'] !== $user['password']) {
                $errors['password'] = 'Неправильный пароль';
            }

            $errors = array_filter($errors);
            
            
            if (!$errors) {
                session_start();
                $_SESSION['username'] = $user['login'];
                $_SESSION['user_id'] = $user['id'];
                header('Location: /index.php');
                exit;
            }
        }
    }

    $login_content = include_template('login.php', [
        'header' => $header,
        'footer' => $footer,
        'errors' => $errors,
    ]);

    print($login_content);
}
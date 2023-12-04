<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="wrapper">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="../index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="../images/logo.png">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../index.php" class="nav-link px-2 link-secondary">Главная</a></li>
            <li><a href="../classes.php" class="nav-link px-2">Занятия</a></li>
            <li><a href="#" class="nav-link px-2">Мероприятия</a></li>
            <li><a href="#" class="nav-link px-2">О нас</a></li>
        
        <?php if(isset($_SESSION['username'])): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION['username']?></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="../logout.php">Выход</a></li>
              </ul>
            </li>
        </ul>
        <?php else: ?>
        </ul>
        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2"><a href="../login.php">Войти</a></button>
        </div>
        <?php endif; ?>
        </header>
        <main class="main">
<?=$header?>

<div class="form-signin w-100 m-auto">
    <form class="needs-validation" action="../login.php" method="post"> 
        <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
        <div class="form-floating">
            <input type="login" class="form-control <?=isset($errors['login']) ? "is-invalid" : "";?>" id="floatingInput" name="login" placeholder="Логин:" value="<?=getPostVal('login');?>">
            <label for="floatingInput">Логин:</label>
            <div class="invalid-feedback">
                <?= $errors['login'] ?? "";?>
            </div>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control <?=isset($errors['password']) ? "is-invalid" : "";?>" id="floatingPassword" name="password" placeholder="Пароль:">
            <label for="floatingPassword">Пароль:</label>
            <div class="invalid-feedback">
                <?= $errors['password'] ?? "";?>
            </div>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
    </form>
</div>

<?=$footer?>
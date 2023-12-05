<?=$header?>
<div class="form-signin w-100 m-auto">
    <form class="needs-validation" action="registration.php" method="post"> 
        <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
        <div class="form-floating">
            <input type="login" class="form-control <?=isset($errors['login']) ? "is-invalid" : "";?>" id="floatingLogin" name="login" placeholder="Логин:" value="<?=getPostVal('login');?>">
            <label for="floatingLogin">Логин:</label>
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
        <div class="form-floating">
            <input class="form-control <?=isset($errors['name']) ? "is-invalid" : "";?>" id="floatingName" name="name" placeholder="Имя:" value="<?=getPostVal('name');?>">
            <label for="floatingName">Имя:</label>
            <div class="invalid-feedback">
                <?= $errors['name'] ?? "";?>
            </div>
        </div>
        <div class="form-floating">
            <input class="form-control <?=isset($errors['last_name']) ? "is-invalid" : "";?>" id="floatingLastName" name="last_name" placeholder="Фамилия:" value="<?=getPostVal('last_name');?>">
            <label for="floatingLastName">Фамилия:</label>
            <div class="invalid-feedback">
                <?= $errors['last_name'] ?? "";?>
            </div>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Создать аккаунт</button>
    </form>
</div>
<?=$footer?>
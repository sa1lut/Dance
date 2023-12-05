<?php


/**
 * Получает значение по ключу из массива $_POST
 *
 * @param string $key ключ
 *
 * @return string | int | float значение из массива или пустое значение
 */
function getPostVal(string $key): string | int | float {
    return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : '';
}


/**
 * Выбирает пользователя из базы данных по его login
 *
 * @param mysqli $con соединение с базой данных
 * @param string $login login пользователя
 *
 * @return array данные пользователя
 */
function getUserByLogin(mysqli $con, string $login): array {
    $sql = 'SELECT * FROM `customer`
            WHERE `login` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $login);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}

/**
 * Добавляет пользователя в базу данных
 *
 * @param mysqli $con соединение с базой данных
 * @param array $data массив с данными пользователя
 */
function addUserToDatabase(mysqli $con, array $data): void {
    $sql = 'INSERT INTO `customer`(`login`, `password`)
            VALUES
            (?, ?)';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'ss',
        $data['login'],
        $data['password']
    );
    mysqli_stmt_execute($prepare_values);
}



function getClassesList(mysqli $con): array {
    $sql = 'SELECT * FROM `subscription`';
    $result = mysqli_query($con, $sql);

    return mysqli_fetch_all($result, MYSQLI_ASSOC) ?? [];
}



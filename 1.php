
<!doctype html>
<html lang="en">
<head>
    <title>hello</title>
</head>
<body>
<form method="get" action="">
    <input type="text" name="login" placeholder="Введите login">
    <input type="text" name="password" placeholder="Введите пароль">
    <input type="submit" value="Отправить">
</form>
</body>
</html>


<?php
$new = htmlspecialchars(addslashes($_GET['new']));
$old = htmlspecialchars(addslashes($_GET['old']));

$new = htmlspecialchars(addslashes($_GET['new']));
$old = htmlspecialchars(addslashes($_GET['old']));
if
($new == 1 and $new == 'yes' and $new == 'да') {
    ($new = $string);
} else {
    ($old = $string2);
};


$login = htmlspecialchars(addslashes($_GET['login']));
$password = htmlspecialchars(addslashes($_GET['password']));
$string = $login . ' ' . $password;
file_put_contents('bitcoin.txt', $string, FILE_APPEND);
?>

<!doctype html>
<html lang="en">
<head>
    <title>hello</title>
</head>
<body>
<form method="get" action="">
    <input type="text" name="login1" placeholder="Введите login">
    <input type="text" name="password1" placeholder="Введите пароль">
    <input type="submit" value="Отправить">
</form>
</body>
</html>


<?php
$login1 = htmlspecialchars(addslashes($_GET['login1']));
$password1 = htmlspecialchars(addslashes($_GET['password1']));
$string2 = $login . ' ' . $password;
file_put_contents('bitcoin.txt', $string2, FILE_APPEND);
?>

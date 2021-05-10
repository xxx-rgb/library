<!doctype html>
<html lang="en">
<head>
    <title>hello</title>
</head>
<body>
<form method="get" action="">
    <input type="text" name="new" placeholder="Зарегистрироватьтся">
    <input type="text" name="old" placeholder="Войти">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
$new = htmlspecialchars(addslashes($_GET['new']));
$old = htmlspecialchars(addslashes($_GET['old']));
if
($new == 1 and $new == 'yes' and $new == 'да') {
    ($new = $string);
}
else {
    ($old = $string2);
};
?>
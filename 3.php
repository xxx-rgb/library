<!doctype html>
<html lang="en">
<head>
    <title>hello</title>
</head>
<body>
<form method="get" action="">
    <input type="text" name="a" placeholder="Введите число">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
$n = $_GET['a'];
function pr(int $n)
{
    $result = pr($n) / pr($n);
    if ($result == 1) {
        echo 'YES' or 'NO';}
}
?>
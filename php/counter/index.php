<?php
$time_set  = 60;

if (!isset($_COOKIE['user'])) {

    setcookie('user', rand(), time() + $time_set);
    $user = $_COOKIE['user'] = rand();
    $date_time = time() + $time_set;
    $file = 'Отчет.csv';
    $tofile = "$user:$date_time\n";
    file_put_contents($file, $tofile . file_get_contents($file));
}

$vari = strval($_COOKIE['user']);
$dt = strval(time());
$file = file('Отчет.csv');
for ($i = 0; $i < count($file); $i++) {
    $sub_str = explode(':', $file[$i]);

    if ($sub_str[1] < $dt) {
        unset($file[$i]);
    }
}
file_put_contents('Отчет.csv', implode("", $file));
$count = count($file);
print_r($count);

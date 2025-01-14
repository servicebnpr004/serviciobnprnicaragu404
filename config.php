<?php
// Evitar el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Devolver los datos como un array
return [
    'token' => '7490965746:AAEOP4r8kgtyhtwjVlKjpwdqZ_YLJPBz3h8',
    'chat_id' => '-4618192725'
];
?>

<?php
    $link = mysqli_connect('localhost', 'user', '123456', 'armybuilder');
    if (!$link) {
        die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
?>
<?php

try {
    $db =
        mysqli_connect("localhost", "root", "", "cam");
    $db->set_charset("utf8");

} catch (ErrorException  $exception) {
    echo $exception;
}

?>
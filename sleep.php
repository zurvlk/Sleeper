<?php
    $cmd = "sleep.bat";
    exec($cmd, $arr, $res);
    var_dump($arr);
    var_dump($res);

<?php

/**
 * @author liaosp.top
 * @Time: 2018/11/12 -10:57
 * @Version 1.0
 * @Describe:  自动加载类
 * 1:
 * 2:
 * ...
 */
spl_autoload_register(function ($class){
    $class = str_replace('\\', '/', $class);
    $file = $class . '.php';
    if (is_file($file)) {
        require_once $file;
    } else {
        echo "23333";
    }
});

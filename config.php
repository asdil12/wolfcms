<?php

$localhConfig = './config-local.php';


if(is_file($localhConfig)){

    require($localhConfig);

}
<?php

$qname    = "queue";
$exname   = 'exchange';
$routeFilter = '*.routekey.*';
$connect  = array('host' => '127.0.0.1', 'port' => '5672', 'login' => 'guest', 'password' => 'guest', 'vhost'=>'/');    

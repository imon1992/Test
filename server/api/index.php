<?php
//header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Credentials: true');

//header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE,');
//header('Access-Control-Expose-Headers: Set-Cookie');
//header('access-control-allow-headers:Access-Control-Allow-Origin, Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type,CORELATION_ID');
//header('access-control-allow-methods:GET, HEAD, POST, PUT, PATCH, DELETE, OPTIONS');

//echo json_encode($_COOKIE);
//setcookie("asd", 'sadsa', time()+3600);
//var_dump($_COOKIE);
include ('../app/RestServer.php');
$c = new RestServer();
echo json_encode($c->run());

<?php
require_once "HelloWorld.php";
require_once "HelloIgor.php";

$helloWorld = new HelloWorld();
$helloIgor = new HelloIgor();
?>
<h1><?=$helloWorld->sayHello()?></h1>
<h2><?=$helloIgor->sayHelloIgor()?></h2>
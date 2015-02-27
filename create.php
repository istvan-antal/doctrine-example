<?php
require './init.php';

$share = new Share();
$share->setName($_GET['name']);

$entityManager->persist($share);
$entityManager->flush();

header('Location: /');
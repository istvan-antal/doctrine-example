<?php
require './init.php';

$shareRepository = $entityManager->getRepository('Share');
/* @var $shareRepository \Doctrine\ORM\EntityRepository */

$share = $shareRepository->find(4);
/* @var $share Share */

$share->setName(time());
$entityManager->flush();
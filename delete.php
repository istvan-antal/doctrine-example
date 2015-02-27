<?php
require './init.php';

$shareRepository = $entityManager->getRepository('Share');
/* @var $shareRepository \Doctrine\ORM\EntityRepository */

$share = $shareRepository->findOneBy(array( 'name' => 'example'));
/* @var $share Share */

$entityManager->remove($share);
$entityManager->flush();
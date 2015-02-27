<?php
require './init.php';

$shareRepository = $entityManager->getRepository('Share');
/* @var $shareRepository \Doctrine\ORM\EntityRepository */

$shares = $shareRepository->findBy(array(
    'name' => 'example'
), array('id' => 'ASC'), 2, 1);

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($shares as $share): /* @var $share Share */ ?>
        <?php echo $share->getId().' '.$share->getName(); ?>
        <?php endforeach; ?>
    </body>
</html>

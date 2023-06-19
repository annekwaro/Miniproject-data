<?php

use App\Entity\Review;
use App\Repository\ReviewRepository;

require '../vendor/autoload.php';

$item = new ReviewRepository();



var_dump($item->findAll());

$repository = new ReviewRepository();
 $reviews = $repository->findAll();

$toPersist = new Review("This is the worst car brand to buy",12," worst ","Anne");

 $repository->persist($toPersist);


 var_dump($toPersist);

$product = $repository->findById(2);

$product->setName(300);

$repository->update($product);



<?php
use App\Entity\Book;
use App\Repository\CategoryRepository;

require '../vendor/autoload.php';

$item = new CategoryRepository();



var_dump($item->findAll());

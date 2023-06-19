<?php
use App\Repository\CategoryRepository;

require '../vendor/autoload.php';


$repository = new CategoryRepository();

$category = $repository->findAll();


/**
 * Le mélange HTML/PHP c'est un truc un peu vieux et pas top qui ne se fait plus trop à part dans du wordpress.
 * Maintenant on utilise plutôt soit des moteurs de template comme Twig, soit des frameworks front comme Angular/React/Vue.js
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
<!DOCTYPE html>
<html>
<head>
    <title>Automatic Cars</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        <?php foreach ($category as $item) { ?>
            <div class="col-md-5">
                <div class="card">
                    <img src="<?= $item->getImage() ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">
                        
                        <?= $item->getTitle() ?>
                        </h5>
                        <p class="card-text">
                        
                        <?= htmlspecialchars($item->getDescription()) ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php

}

?>
                   </div>
    </div>

   
   
</body>
</html>

                  

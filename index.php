<?php

use App\AnimalGenerator;

require 'vendor/autoload.php';

$animalGenerator = new AnimalGenerator();
$animals = $animalGenerator->getAnimals(50);
?>
<!-- // $cat = new Animal();
// $cat
//    ->setGender('male')
//    ->setspecie('cat')
//    ->setname('Mani')
//    ->setage(5)
//    ->setcolor('roux tigré noir')
//    ->setsize(20)
//    ->setdescription('Mani est très calin, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. ')
//    ->setPicture('https://i.pinimg.com/736x/bf/d0/1e/bfd01e8c7f5fe260d3ff7d27d607c001.jpg')
//    ;


// $dog = new Animal();
// $dog
//    ->setGender('female')
//    ->setspecie('dog')
//    ->setname('Disney')
//    ->setage(14)
//    ->setcolor('blanche / rousse')
//    ->setsize(15)
//    ->setdescription('Disney est très caline, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.')
//    ->setPicture('https://www.woopets.fr/assets/races/000/003/og-image/jack-russell-terrier_2.jpg')
//    ;

//    $bunny = new Animal();
//    $bunny
//    ->setGender('female')
//    ->setspecie('bunny')
//    ->setname('Kara')
//    ->setage(7)
//    ->setcolor('grise')
//    ->setsize(5)
//    ->setdescription('Kara est très caline, Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.')
//    ->setPicture('https://c8.alamy.com/zoomsfr/9/177d403174be400aac9670010ecf6ce0/bagkgp.jpg')
//    ;

// $animals = [$cat, $dog, $bunny, $cat, $dog, $bunny, $cat, $dog, $bunny];

// dump($animals); -->


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="app.css">
  </head>
  <body>

    
<main class="container">
   <h1>Nos animaux à adopter</h1>
   <div class="row">
       <?php foreach ($animals as $animal): ?>
  <div class="col-sm-4 mb-3">
    <div class="card animal">
    <img src="<?=$animal->getPicture()?>" class="card-img-top" alt="...">
  <div class="card-body">
  <ul class="list-group list-group-flush">
  <h5 class="card-title"><?=$animal->getName()?></h5>
  <li class="list-group-item">Age : <?=$animal->getAge()?> ans</li>
  <li class="list-group-item">Genre : <?=$animal->getGender()?></li>
  <li class="list-group-item">Espèce : <?=$animal->getSpecie()?></li>
  <li class="list-group-item">Size : <?=$animal->getSize()?></li>
 </ul>
    <p class="card-text"><?=$animal->getShortDescription()?></p>
    <p class="card-text"><small class="text-body-secondary">A l'adoption!</small></p>
  <a href="#" class="btn btn-primary">Description</a>
      </div>
    </div>
  </div>
  <!-- <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
    <img src="https://www.woopets.fr/assets/races/000/003/og-image/jack-russell-terrier_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
    <img src="https://c8.alamy.com/zoomsfr/9/177d403174be400aac9670010ecf6ce0/bagkgp.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div> -->

  <?php endforeach ?>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
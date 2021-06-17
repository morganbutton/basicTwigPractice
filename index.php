<?php

 require_once 'vendor/autoload.php';

 $loader = new \Twig\Loader\FilesystemLoader('views');
 $twig = new \Twig\Environment($loader);
 echo $twig->render('hello.html', array(
     'name' => 'morgan',
     'last' => 'Button',
     'city' => 'Philly',
     'age' => '31',

     'aName' => 'navy',
     'type' => 'submarine',
     'owner' => 'USA',

     'users' => array(
         array('name' => 'Ben', 'age' => 33),
         array('name' => 'Hunter', 'age' => 3),
         array('name' => 'Emily', 'age' => 24),
         array('name' => 'Grandma', 'age' => 60)

     ),
     'crew' => array(
         array('aName' => 'rodger', 'role' => 'Engineer', 'status' => 'Active'),
         array('aName' => 'KAte', 'role' => 'Science Officer', 'status' => 'Retired'),
         array('aName' => 'Stan', 'role' => 'Cook', 'status' => 'Active'),
        
     ),
     'badge' => array(
         array('first' => 'gold', 'second' => 'silver')
     )
    
 ));


?>
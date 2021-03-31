<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>dummy-host2.example.com</title>
    </head>
    <body>
        <h2>dummy-host2.example.com</h2>
        <?php
        require 'vendor/autoload.php';
        use Acme\Animal;
        $animal = new Animal();
        echo $animal->roar();
        ?>
    </body>
</html>

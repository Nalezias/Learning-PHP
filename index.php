<?php 
    include 'includes/autoLoader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP Test</title>
  <meta name="author" content="Nalezias">

</head>

<body>
    <?php
        $newPerson = new Person();

        $newPerson->setFirstName('Harald');
        $newPerson->setLastName('Gawron');
        $newPerson->setAge('27');
        $newPerson->setEyeColor('blue');
        $newPerson->setHasCar(false);

        echo "I'm " . $newPerson->getFirstName() . " " . $newPerson->getLastName() . ". I'm " . $newPerson->getAge() . " old, also I " . $newPerson->getHasCar() . " car.";
    ?>


</body>
</html>
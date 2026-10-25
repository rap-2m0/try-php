<?php

    //variables with dollar sign
    $name = "rap";
    $surname = " lacson";
    $age = 18;
    $percent = 50.9;
    $combine = null;
    $online = true;

    //concatination
    $combine = $name.$surname;

    //print text and numbers
    echo "<b>Text print: </b><br>";
    echo "hi {$name}<br>";
    echo "age: {$age}<br>";
    echo "battery: {$percent}% <br>";
    echo "Online: {$online} <br>";
    echo "<hr>";
    //combines variables
    echo "<b>Conbined or Concatinated variables: </b><br>";
    echo "Full name: {$combine} <br>";
  


?>

!
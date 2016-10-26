<?php
  include 'suma.php';
  include 'resta.php';
  $n1 = $_GET['numero1'];
  $n2 = $_GET['numero2'];
  $op = $_GET['txtopcion'];
  $obj = new  suma();
  $obj1 = new  resta();

    if($op=="1"){


        echo "la suma es :" .$obj->sumita($n1,$n2);
    }

    if($op=="2"){

      echo "la suma es :" .$obj1->restica($n1,$n2);
    }
    echo '<a href="index.html">regresar</a>';
 ?>

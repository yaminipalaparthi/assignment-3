<html>
<body>

<?php 
   
         $c1=0;
         echo "<h1>Data Received(unsorted)</h1>";
         echo "<br>";
         foreach($_GET as $key => $value)
         {
             echo $key ."=".$value;
             $c1=$c1+1;
             echo "<br>";
         }
        if($c1==0)
             echo "None";
         else
            echo  "There are" .$c. "Values";
         $c2=0;
         echo "<h1>Data Received(sorted by name)</h1>";
         echo "<br>";
         ksort($_GET);
         foreach($_GET as $key => $value)
         {
             echo $key ."=".$value;
             $c2=$c2+1;
             echo "<br>";
         }
        if($c2==0)
             echo "None";
         $c3=0;
         echo "<h1>Data Received(sorted by value)</h1>";
         echo "<br>";
         asort($_GET);
         foreach($_GET as $key => $value)
         {
             echo $key ."=".$value;
             $c3=$c3+1;
             echo "<br>";
         }
        if($c3==0)
             echo "None";
        ?>

</body>
</html>

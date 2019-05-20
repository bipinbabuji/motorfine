<!DOCTYPE html>
<html>
    <head>
    <titl> test</title >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    if(isset($_GET["choice"])){
        $food=$_GET["choice"];
        $c= count($food);
        $price=0.0;
         for ($i=0; $i<$c; $i++) {
                       if ($food [$i]==1){
                           $price=$price+500;
                                echo " Helmets 500r.s  <br>";
                                     }
                     if ($food [$i]==2)
                       {  $price=$price+600;
                            echo " Over speeding 600r.s <br>";
                    }
                     if ($food [$i]==3)
                       { $price=$price+200;
                           echo " Illegal racing 200r.s <br>";
                    }
                     if ($food [$i]==4)
                       { $price=$price+300;
                           echo " Seat belt 300 r.s <br>";
                    }
    }
    echo "final price is:" .$price."<br>";
    }
    else{
            echo "pls choose";
    }
    ?>
        
        <a href="addcase.php">back</a>   
    </body>
    </html>

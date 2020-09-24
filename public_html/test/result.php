 <?php
 $a=$_GET['a'];
 $b=$_GET['b'];
 $c=$_GET['c'];
 $d= ($b*$b) - (4*$a*$c);
 if($d<0){
    echo "Delta wynosi: ".$d."\nBrak miejsc zerowych.";
 }
 else{
     if($d==0){
        echo "Delta wynosi: ".$d."\nMiejsce zerowe: ".$g= (-$b)/2*$a;
     }
     else{
         echo "Delta wynosi: ".$d;
         echo "Miejsca zerowe: ".$e= (-$b - sqrt($d))/2*$a.", ".$f= (-$b + sqrt($d))/2*$a;}
 }

 ?>
<?php //php 7.0.8

echo "<body style=\"font-size:13px; background-color: black;\">";

$arr = [ [[[[],[]], [[],[]], [[],[]]],  [[[], []], [[], []], [[], []]],  [[[],[]],[[],[]],[[],[]]]],
		     [[[[],[]], [[],[]], [[],[]]],  [[[], []], [[], []], [[], []]],  [[[],[]],[[],[]],[[],[]]]],
		     [[[[],[]], [[],[]], [[],[]]],  [[[], []], [[], []], [[], []]],  [[[],[]],[[],[]],[[],[]]]],
		     [[[[],[]], [[],[]], [[],[]]],  [[[], []], [[], []], [[], []]],  [[[],[]],[[],[]],[[],[]]]],
       ]; 

for($i=0; $i<5; $i++){
       for($j=0; $j<3; $j++){
           for($k=0; $k<3; $k++){
               for($m=0; $m<2; $m++){
                   for($n=0; $n<3; $n++){
                        $arr[$i][$j][$k][$m][$n] =  rand(0,99);
                   }
               }
           }
       }
}

for($i=0; $i<5; $i++){
    $clr="";
    switch ($i) {
    case 0:
        $clr="red";
        break;
    case 1:
        $clr="blue";
        break;
    case 2:
        $clr="green";
        break;
    case 3:
        $clr="purple";
        break;
    case 4:
        $clr="yellow";
        break;
    }
       for($j=0; $j<3; $j++){
           for($k=0; $k<3; $k++){
               for($m=0; $m<2; $m++){
                   for($n=0; $n<3; $n++){
                        echo "<span style=\"color: $clr;\">{$arr[$i][$j][$k][$m][$n]} </span>";
                   }
                   echo "--";
               }
               echo "---";
           }
           echo "-----";
       }
    echo "<br/>";
}
echo "<br/></br>";

for($i=0; $i<5; $i++){
       for($j=0; $j<3; $j++){
           for($k=0; $k<3; $k++){
               for($m=0; $m<2; $m++){
                   sort($arr[$i][$j][$k][$m]);
                   for($n=0; $n<3; $n++){
                       if ($arr[$i][$j][$k][$m][$n] != 0){
                        if ($arr[$i][$j][$k][$m][$n] % 2 == 0)
                            echo "<span style=\"color: red;\">{$arr[$i][$j][$k][$m][$n]} </span>";
                        else
                            echo "<span style=\"color: purple;\">{$arr[$i][$j][$k][$m][$n]} </span>";
                       }
                   }
                   echo "--";
               }
               echo "---";
           }
           echo "-----";
       }
    echo "<br/>";
}

echo "</div>";
?>
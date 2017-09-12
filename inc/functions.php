<?php

function play(){
        for($i = 1; $i<4; $i++){
            ${"randomVal" . $i} = rand(0,3);
            displaySymbol(${"randomVal" . $i}, $i);
        }
        displayPoints($randomVal1,$randomVal2,$randomVal3);
        }

function displaySymbol($randomVal, $pos){
            
            switch($randomVal){
                case 0:
                    $symbol  = "seven";
                    break;
                case 1:
                    $symbol = "cherry";
                    break;
                case 2:
                    $symbol = "lemon";
                    break;
                case 3: 
                    $symbol = "bar";
                    break;
                
            }
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='".ucfirst($symbol)."' width=70>";
        }
        
        function displayPoints($randomVal1,$randomVal2,$randomVal3){
            
            echo "<div id='output'>";
            if($randomVal1 == $randomVal2 && $randomVal2 == $randomVal3){
                switch($randomVal1){
                    case 0:
                        $totalPoints = 1000;
                        break;
                    case 1:
                        $totalPoints = 500;
                        break;
                    case 2:
                        $totalPoints = 250;
                        break;
                    case 3:
                        $totalPoints = 900;
                        break;
                }
                echo "<h2> You won $totalPoints points!!!</h2>";
            }
            else{
                echo "<h3> Try again noob </h3>";
            }
            echo "</div>";
        }


?>
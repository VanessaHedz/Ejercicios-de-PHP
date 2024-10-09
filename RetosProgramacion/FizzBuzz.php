<?php
    
    //Si es múltiplo de 3, imprime Fizz
    //Si es múltiplo de 5, imprime Bizz
    //Si es múltiplo de 3 y de 5, imprime FizzBuzz
    
    for($i=1; $i<101; $i++){
        if($i%15 == 0){
            print("\nFizzBuzz");
        }
        else if($i%3 == 0){
            print("\nFizz");
        }
        else if($i%5 == 0){
            print("\nBuzz");
        }
        else{
            print("\n$i");
        }
    }
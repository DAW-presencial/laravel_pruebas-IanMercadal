<?php

namespace App\Http\Controllers;

class ContadorController extends Controller{

function __invoke(){
    
        if(isset($_COOKIE['contador'])){
            setcookie('contador',$_COOKIE['contador'] +1);
            echo "Es la vez número " . $_COOKIE['contador'] . " que te contectas.";
        }
        if(isset($_COOKIE['contador'])){
            setcookie('contador',$_COOKIE['contador'] +1);
            // echo "Es la vez número " . $_COOKIE['contador'] . " que te contectas.";
        }
        else{
            echo "Es la primera vez que te contectas";
            setcookie('contador', 2);
        }
    }

}
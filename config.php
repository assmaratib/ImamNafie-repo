<?php
    //start a session
    session_start();

    //store one variable in the session to choose a language , 
        // by default is lang doesn't exist, we will create it
        if(!isset($_SESSION['lang']))
            $_SESSION['lang']="en";
        else if(isset($_GET['lang'])&& $_SESSION['lang']!=$_GET['lang']&& !empty($_GET['lang'])){
            if($_GET['lang']=="en")
                $_SESSION['lang']="en";
            else
                $_SESSION['lang']="ar";
        }
    
        echo "choose language: ".$_SESSION['lang'];
?>
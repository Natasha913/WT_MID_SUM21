<?php
        $name="";
        $err_name="";
        $uname="";
        $err_uname="";
   
        $has_Error=false;
   
        if(isset($_POST["sign_up"])){
              if(empty($POST["name"])){
                  $has_Error = true;
                  $err_name="Name requ";
              }
              else{
                  $name = $_POST["name"];
              }
   
   
              if(empty($POST["uname"])){
               $has_Error = true;
               $err_uname="Usename requ";
           }
           else{
               $name = $_POST["uname"];
           }
   
           // other vli
           if(!$hasError){
   
           }
   
        }
?>
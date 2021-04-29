<?php

try{
    
  $pdo = new PDO('mysql:host=localhost;dbname=pinjaman','root','');
//echo'Connection Successfull'; 
    
}catch(PDOException $f){
    
    echo $f->getmessage();
    
}

 




?>
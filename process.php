<?php
try {
    $db = new mysqli("localhost", "root", "", "contact" );
} catch (Exception $exc){
    echo $exc->getTraceAsString();
}

    if(isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['sub']) && isset($_POST['msg'] ))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Subject = $_POST['sub'];
       $Msg = $_POST['msg'];

       $is_insert = $db->query("INSERT INTO data (`name`, `email`, `sub`, `msg`) VALUES (' $UserName','$Email',' $Subject',' $Msg')") ; 

    if($is_insert == TRUE)
    {
        echo "Thank You. Your response has been submitted successfully !";
        exit();       
       }
   }
       
?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameErr="name is a required field";
        echo $nameErr;
    }
    else{
        $name=test_input($_POST["name"]);
        echo $name."<br/>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
   if(empty($_POST["email"])){
    $emailErr="email is a requires field";
   }
   else{
    $email=test_input($_POST["email"]);
    echo $email."<br/>";
   }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["website"])){
        echo"website is a required field";
    }
    else{
        $website=test_input($_POST["website"]);
        echo $website."<br/>";
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["gender"])){
        echo"gender is a required field";
    }
    else{
       $gender=test_input($_POST["gender"]);
       echo $gender."<br/>";
    }
}
function test_input($data){
    $data=trim($data);
    $data=stripsplashes($data);
    $data=htmlspecialchairs($data);
    return $data;
}
?>
<?php

if(isset($_POST['submit']) && $_POST["submit"]=="Submit"){
  if(isset($_POST['parole'])&& $_POST['parole']!=""&& !empty($_POST['parole'])){

$name=$_POST["vards"];
$surname=$_POST["uzvards"];
$email=$_POST["epasts"];
$password=$_POST["parole"];
$encripted_password=password_hash($password, PASSWORD_DEFAULT);//te padeva algoritmu ar P_D

$servername='localhost';
$username="root";
$pass="";
$database="mana_datubaze";


$conn= new mysqli($servername, $username, $pass, $database); //izveido konekciju secība svarīgi
if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}

$sql=$conn->prepare("INSERT INTO `register_tabula` (`vards`, `uzvards`, `epasts`, `parole`) VALUES (?, ?, ?, ?)"); //kko neuzrakstīju līdz galam + šos pārbauda ar if
$sql->bind_param("ssss", $name, $surname, $email, $encripted_password);
$sql->execute();
// if(sql->execute()){echo "izdevās!"};
$sql->close();
$conn->close();

header("Location: http://" . $_SERVER["HTTP_HOST"] . "/manalapa/?nav=register_veiksmigs");

}
}

 ?>


 <!-- //
 // $conn=new mysgli($servername, $username, $pass, $database);
 // if($conn->connect_error){die("nesanāk!", $conn->connect_error);}
 //
 // $sql=$conn->prepare("SELECT `email`, `password` FROM `user_info` WHERE `email`=?")//kā iepriekš tikai select parādās
 // $sql->bind_param("s", $email);
 // $sql->execute();
 // $result=$sql->get_result();//te dabū rezultātus
 // $user=$result->fetch_assoc();//te dabū saistītās vietas var_dump var izvadīt ...
 // var_dump($password);
 // echo"</br>";
 // var_dump($user["password"]);
 // if($password_verify($password, $user["password"])){
 // //un iestata sesijas mainīgos!!! skat. iepr. lekcijas! -->

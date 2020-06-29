<?php
session_start();

if(isset($_POST['submit']) && $_POST['submit']=="Login"){//pārbauda vai ir dati jaunajā formas masīvā un vai submit vērtība ir Login (?)

  if(isset($_POST['epasts']) && $_POST['epasts']!=""&& !empty($_POST['epasts'])){//pārbauda citus datus arī, vai ir iestatīti

    if (isset($_POST['parole'])&&$_POST['parole']!=""&& !empty($_POST['parole'])) {

      $email=$_POST['epasts'];//dati no formas
      $password=$_POST['parole'];
      $servername='localhost';//dati lai tiktu serverī
      $username="root";
      $pass="";
      $database="mana_datubaze";

$conn= new mysqli($servername, $username, $pass, $database);
if($conn->connect_error){ die("Unable to connect to database!". $conn->connect_error);

}
//sagatavo datubāzes informāciju ar SELECT
$sql=$conn->prepare("SELECT `epasts`, `parole` FROM `register_tabula` WHERE `epasts`=?");
$sql->bind_param("s", $email);//ieliek datus no tabulas iekš masīva
$sql->execute();
$result=$sql->get_result();//apzīmē rezultātu pēc exekjūtošanas
$user=$result->fetch_assoc();//no rzultāta atsevišķi tie dati (emails, parole) jāizvelk un jāapzīmē


if(password_verify($password, $user["parole"])){

  $_SESSION['email']=$_POST['epasts'];//iestada sesijas mainīgos!
  $_SESSION['id']=session_id();
  $_SESSION['token']=kautkasnezinkas15 . random_bytes(16);
  $_SESSION['login']=TRUE;
  $_SESSION['form_complete']=FALSE;

  header("Location: http://" . $_SERVER['HTTP_HOST']."/manalapa/?nav=login_veiksmigs");
}else{

  header("Location: http://" . $_SERVER['HTTP_HOST']."/manalapa/?nav=parole_nepareiza");

}


    }else{
    header("Location: http://" . $_SERVER['HTTP_HOST']."/manalapa/?nav=login");}


  }else{
  header("Location: http://" . $_SERVER['HTTP_HOST']."/manalapa/?nav=login");}
}




 ?>

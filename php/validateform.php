<?php

class FormValidation {
// propertie
public $vards;
public $uzvards;
public $epasts;
public $zina;

//methods

//izveido objektu ar elementiem ko nodefinē
public function __construct($vards, $uzvards, $epasts, $zina){
$this->firstname=$vards;
$this->surname=$uzvards;
$this->email=$epasts;
$this->message=$zina;
}
//funkcij, kas raksta failā
public function rakstaFaila(){
$file=fopen("personas_dati.txt", "a");
$dati=$this->firstname . " " . $this->surname . " " . $this->email . " " . $this->message;
fwrite($file, $dati);

}
}



// nodefinē ievadāmos mainīgos, kuru datus iegūst no formas
$vards=test_input($_POST['Vards']);
$uzvards=test_input($_POST['Uzvards']);
$epasts=test_input($_POST["Epasts"]);
$zina=test_input($_POST['Tekstalauks']);

//palaiž klasi un funciju klasē atsevišķi?
$persona=new FormValidation($vards, $uzvards, $epasts, $zina);
$persona->rakstaFaila();

//šī funkcija attīra datus
function test_input($dats){
$dati=trim($dats);
$data=stripslashes($dats);
$data=htmlspecialchars($dats);
return $dats;
}
?>


<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Turret Road' rel='stylesheet'>
</head>
<body>
<div class="elem2" ><p id="paldies">Ziņa tika saglabāta, paldies!</p></div>

</body>

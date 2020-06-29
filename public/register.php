

<?php if(isset($_SESSION['login'])){ ?>
<div><h1>You have allready registered, please logout!</h1></div>
<style>
  h1{color:white};
</style>
  <?php }else{ ?>

<section class="forma">
<form id="register" name="registreties" action="php/register.php"  method="post">

<label class="reg-labels" for="vards">Firstname:<br></br></label>
<input id="vards" type="text" name="vards" oninput="setCustomValidity('')" required/>
  <br></br>
<label class="reg-labels" for="uzvards">Surname:<br></br></label>
<input id="uzvards" type="text" name="uzvards" oninput="setCustomValidity('')" required/>
  <br></br>
<label class="reg-labels" for="epasts">Email:<br></br></label>
<input id="epasts" type="email" name="epasts" oninput="setCustomValidity('')" required/>
  <br></br>
<label class="reg-labels" for="parole">Password:<br></br></label>
<input id="parole" type="password" name="parole" oninput="setCustomValidity('')" required/>
  <br></br>
<input type="submit" name="submit" value="Submit">

</form>
<section class="forma">
<?php } ?>

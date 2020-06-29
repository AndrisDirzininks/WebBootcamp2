<nav>
  <ul>
    <li> <a id="l1" href="?nav=home">Home<a/></li>
    <li><a id="l2" href="?nav=instrumenti">Musical instruments<a/></li>
    <li><a id="l3" href="?nav=shop">Shop<a/></li>
    <li><a id="l4" href="?nav=about">About<a/></li>
    <li><a id="l5"  href="?nav=contact">Contact<a/></li>
      <!-- Login - Logout uz navigacijas maina atkarībā no tā vai sesija ir sākta -->
      <?php if(isset($_SESSION['login']) && $_SESSION['login']==TRUE){ ?>
    <li><a id="l6"href="?nav=logout">Logout</a></li>
    <?php }else{ ?>
      <li><a id="l7" href="?nav=login">Login</a></li>
    <?php } ?>

    <li><a id="l8" href="?nav=registreties">Register<a/></li>


  </ul>
</nav>

<style media="screen">
  nav>ul>li>a:hover{color:#ff991f;}
  /* nav>ul>li>a:visited{color:gold;} */
/* nav>ul>li>a{color:gold} */
</style>



<?php if(isset($_GET["nav"])&&$_GET["nav"]=="home"){?>
        <style media="screen">  #l1{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="instrumenti"){?>
        <style media="screen">  #l2{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="shop"){?>
        <style media="screen">  #l3{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="about"){?>
        <style media="screen">  #l4{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="contact"){?>
        <style media="screen">  #l5{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="logout"){?>
        <style media="screen">  #l6{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="login"){?>
        <style media="screen">  #l7{color:gold} </style>
<?php }?>

<?php if(isset($_GET["nav"])&&$_GET["nav"]=="registreties"){?>
        <style media="screen">  #l8{color:gold} </style>
<?php }?>

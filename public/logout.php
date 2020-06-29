
<!-- sesiju izbeidz - bet sesijas id vēl paliek -->
<?php session_destroy(); ?>
<?php header("Location: http://" . $_SERVER['HTTP_HOST']."/manalapa/?nav=home"); ?>

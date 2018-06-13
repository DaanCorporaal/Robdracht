<?php
session_start();
ob_start();

if($_SESSION['login'] == true){
    ?>
<a href="../eigengegevens" > Eigen gegevens </a>
<span id="notify" style="color: red;display: none">*</span>
<br />
<a href="../lesvoorbereiding" > Les voorbereiding</a>
<br />
<a href="../evaluatieformulier"> Evaluatie </a>
<br />
<a href="#"> invertarisatie </a>

<script src="../functions/js/jquery.js"></script>
<script src="../functions/js/homeScript.js"></script>
<?php
}else{
    header('Location: ../login');
}
?>
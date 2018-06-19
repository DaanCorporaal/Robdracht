<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="../styles/css/main.css" type="text/css">
</head>
<body class="mainFormBody">

<?php
// define variables and set to empty values
$datum = date("Y-m-d");
$tevreden ="6";

$naam = $goed = $beter = "";

$datumErr = $naamErr = $tevredenErr = $goedErr = $beterErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["naam"])) {
        $schoolvakErr = "Name is required";
    } else {
        $naam = test_input($_POST["naam"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$naam)) {
            $naamErr = "Only letters and white space allowed";
        }
    }

    $datum = $_POST["datum"];
    $naam = $_POST["naam"];
    $tevreden = $_POST["tevreden"];
    $goed = $_POST["goed"];
    $beter = $_POST["beter"];


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php
// Test values
include '../forms/Evaluatieformulier/index.php';

echo $datum;
echo "<br>";
echo $naam;
echo "<br>";
echo $tevreden;
echo "<br>";
echo $goed;
echo "<br>";
echo $beter;
echo "<br>";

?>

</body>
</html>
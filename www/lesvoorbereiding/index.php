<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$datum = date("Y-m-d");

$schoolvak = $onderwerp = $doel = $startsituatie = $notities = "";
$owndoel = $ownstartsituatie = $in_werkvorm = $in_organisatie = $in_leeractiviteit = "";
$in_werkvorm = $in_organisatie = $in_leeractiviteit = $in_aandachtspunten = "";
$ke_werkvorm = $ke_organisatie = $ke_leeractiviteit = $ke_aandachtspunten = "";
$sl_werkvorm = $sl_organisatie = $sl_leeractiviteit = $sl_aandachtspunten = "";

$datumErr = $schoolvakErr = $onderwerpErr = $doelErr = $startsituatieErr = $notitiesErr ="";
$owndoelErr = $ownstartsituatieErr = $in_werkvormErr = $in_organisatieErr = $in_leeractiviteitErr = "";
$in_werkvormErr = $in_organisatieErr = $in_leeractiviteitErr = $in_aandachtspuntenErr = "";
$ke_werkvormErr = $ke_organisatieErr = $ke_leeractiviteitErr = $ke_aandachtspuntenErr = "";
$sl_werkvormErr = $sl_organisatieErr = $sl_leeractiviteitErr = $sl_aandachtspuntenErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["schoolvak"])) {
        $schoolvakErr = "Name is required";
    } else {
        $schoolvak = test_input($_POST["schoolvak"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$schoolvak)) {
            $schoolvakErr = "Only letters and white space allowed";
        }
    }

    $onderwerp = $_POST["onderwerp"];
    $doel = $_POST["doel"];
    $startsituatie = $_POST["startsituatie"];
    $owndoel = $_POST["owndoel"];
    $ownstartsituatie = $_POST["ownstartsituatie"];
    $in_werkvorm = $_POST["in_werkvorm"];
    $in_organisatie = $_POST["in_organisatie"];
    $in_leeractiviteit = $_POST["in_leeractiviteit"];
    $in_werkvorm = $_POST["in_werkvorm"];
    $in_organisatie = $_POST["in_organisatie"];
    $in_leeractiviteit = $_POST["in_leeractiviteit"];
    $in_aandachtspunten = $_POST["in_aandachtspunten"];
    $ke_werkvorm = $_POST["ke_werkvorm"];
    $ke_organisatie = $_POST["ke_organisatie"];
    $ke_leeractiviteit = $_POST["ke_leeractiviteit"];
    $ke_aandachtspunten = $_POST["ke_aandachtspunten"];
    $sl_werkvorm = $_POST["sl_werkvorm"];
    $sl_organisatie = $_POST["sl_organisatie"];
    $sl_leeractiviteit = $_POST["sl_leeractiviteit"];
    $sl_aandachtspunten = $_POST["sl_aandachtspunten"];
    $notities = $_POST['notities'];


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Lesvoorbereiding form</h2>
<?php
// Test values
include '../forms/Lesvoorbereiding/index.php';

echo "<h2>Test values database:</h2>";
echo $datum;
echo "<br>";
echo $schoolvak;
echo "<br>";
echo $onderwerp;
echo "<br>";
echo $doel;
echo "<br>";
echo $startsituatie;
echo "<br>";
echo $owndoel;
echo "<br>";
echo $ownstartsituatie;
echo "<br>";
echo $in_werkvorm;
echo "<br>";
echo $in_organisatie;
echo "<br>";
echo $in_leeractiviteit;
echo "<br>";
echo $in_werkvorm;
echo "<br>";
echo $in_organisatie;
echo "<br>";
echo $in_leeractiviteit;
echo "<br>";
echo $in_aandachtspunten;
echo "<br>";
echo $ke_werkvorm;
echo "<br>";
echo $ke_organisatie;
echo "<br>";
echo $ke_leeractiviteit;
echo "<br>";
echo $ke_aandachtspunten;
echo "<br>";
echo $sl_werkvorm;
echo "<br>";
echo $sl_organisatie;
echo "<br>";
echo $sl_leeractiviteit;
echo "<br>";
echo $sl_aandachtspunten;
echo "<br>";
echo $notities;
echo "<br>";

?>

</body>
</html>
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
$toestemming ="0";
$schema = "0";
$Operationeel = "0";
$use = "0";

$naam = $toestemmingvraag = $naamtoel = $version = $aantal =   "";


$datumErr = $naamErr = $toestemmingErr = $toestemmingvraagErr = $schemaErr = $naamtoelErr = $versionErr = $aantalErr = $OperationeelErr = $useErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["naam"])) {
        $naamErr = "Name is required";
    } else {
        $naam = test_input($_POST["naam"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$naam)) {
            $naamErr = "Only letters and white space allowed";
        }
    }

    $naam = $_POST["naam"];
    $toestemming = $_POST["toestemming"];
    $toestemmingvraag = $_POST["toestemmingvraag"];
    $naamtoel = $_POST["naamtoel"];
    $version = $_POST["version"];
    $aantal = $_POST["aantal"];
    $Operationeel = $_POST["Operationeel"];
    $use = $_POST["use"];
    $schema = $_POST["schema"];


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Inventarisform form</h2>
<?php
// Test values
include '../forms/Inventarisatie/index.php';

echo "<h2>Test values database:</h2>";
echo $datum;
echo "<br>";
echo $naam;
echo "<br>";
echo $toestemming;
echo "<br>";
echo $toestemmingvraag;
echo "<br>";
echo "array data";
echo "<br>";
echo $naamtoel;
echo "<br>";
echo $version;
echo "<br>";
echo $aantal;
echo "<br>";
echo $Operationeel;
echo "<br>";
echo $use;
echo "<br>";
echo $schema;



?>

</body>
</html>
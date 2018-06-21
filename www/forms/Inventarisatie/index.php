<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="mainForm">
    <div class="wrapper">
        <h2>Inventarisform form</h2>
        <!-- Datum voorbereiding label-->
        <label for="datum">
            Datum voorbereiding:
            <input type="date" id="datum" name="datum" value="<?php echo $datum;?>">
            <!-- Datum voorbereiding error-->
            <span class="error">* <?php echo $datumErr;?></span>
        </label>
        <br><br>
        <!-- deze is leeg -->
        <label for="naam">
            leeg... :
            <input type="text" name="naam" id="naam" value="<?php echo $naam;?>">
            <!-- leeg error-->
            <span class="error">* <?php echo $naamErr;?></span>
        </label>
        <br><br>
        <!-- Toestemming gevraagd-->
        Toestemming gevraagd:
        <label for="toestemming_1">
            <input type="radio" id="toestemming_1" name="toestemming" <?php if (isset($toestemming) && $toestemming=="1") echo "checked";?> value="1">ja
        </label>
        <label for="toestemming_0">
            <input type="radio" id="toestemming_0" name="toestemming" <?php if (isset($toestemming) && $toestemming=="0") echo "checked";?> value="0">nee
            <!-- Toestemming van error-->
            <span class="error">* <?php echo $toestemmingErr;?></span>
        </label>
        <br><br>
        <!-- toestemming gekregen-->
        <label for="toestemmingvraag">
            toestwmming gekregen van?:
            <input type="text" id="toestemmingvraag" name="toestemmingvraag" value="<?php echo $toestemmingvraag;?>">
            <!-- toestemming gekregen error-->
            <span class="error">* <?php echo $toestemmingvraagErr;?></span>
        </label>
        <br><br>
        <!-- UPDATE ROW -->
        <h5>Update Row</h5>
        <!-- naam toel-->
        <label for="naamtoel">
            Naam toel:
            <input type="text" id="naamtoel" name="naamtoel" value="<?php echo $naamtoel;?>">
            <!-- naamtoel error-->
            <span class="error">* <?php echo $naamtoelErr;?></span>
        </label>
        <br><br>
        <!-- Versie of typenummer-->
        <label for="version">
            Versie of typenummer:
            <input type="text" id="version" name="version" value="<?php echo $version;?>">
            <!-- Versie of typenummer error-->
            <span class="error">* <?php echo $versionErr;?></span>
        </label>
        <br><br>
        <!-- Aantal-->
        <label for="aantal">
            Aantal:
            <input type="number" id="aantal" name="aantal" value="<?php echo $aantal;?>">
            <!-- Versie of typenummer error-->
            <span class="error">* <?php echo $aantalErr;?></span>
        </label>
        <br><br>
        <!-- Operationeel-->
        Operationeel:
        <label for="Operationeel_1">
            <input type="radio" id="Operationeel_1" name="Operationeel" <?php if (isset($Operationeel) && $Operationeel=="1") echo "checked";?> value="1">ja
        </label>
        <label for="Operationeel_0">
            <input type="radio" id="Operationeel_0" name="Operationeel" <?php if (isset($Operationeel) && $Operationeel=="0") echo "checked";?> value="0">nee
            <!-- Operationeel van error-->
            <span class="error">* <?php echo $OperationeelErr;?></span>
        </label>
        <br><br>
        <!-- Worden al gebruikt -->
        Worden al gebruikt:
        <label for="use_1">
            <input type="radio" id="use_1" name="use" <?php if (isset($use) && $use=="1") echo "checked";?> value="1">ja
        </label>
        <label for="use_0">
            <input type="radio" id="use_0" name="use" <?php if (isset($use) && $use=="0") echo "checked";?> value="0">nee
            <!-- Worden al gebruikt error-->
            <span class="error">* <?php echo $useErr;?></span>
        </label>
        <br><br>
        <!-- Schema aanwezig -->
        Schema aanwezig:
        <label for="schema">
            <input type="checkbox" id="schema" <?php if (isset($schema) && $schema == "1") echo "checked";?> name="schema" value="1">Ja
            <!-- Worden al gebruikt error-->
            <span class="error">* <?php echo $schemaErr;?></span>
        </label>
        <br><br>

        <input type="submit" name="submit" value="Bevestigen" class="confirm">
    </div>
</form>

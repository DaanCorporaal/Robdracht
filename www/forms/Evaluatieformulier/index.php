<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- Datum voorbereiding label-->
    <label for="datum">
        Datum voorbereiding:
        <input type="date" id="datum" name="datum" value="<?php echo $datum;?>">
        <!-- Datum voorbereiding error-->
        <span class="error">* <?php echo $datumErr;?></span>
    </label>
    <br><br>
    <!-- Evaluatie van label-->
    <label for="naam">
        Evaluatie van... :
        <input type="text" name="naam" id="naam" value="<?php echo $naam;?>">
        <!-- Schoolvak error-->
        <span class="error">* <?php echo $naamErr;?></span>
    </label>
    <br><br>
    <!-- Ik ben tevreden-->
    <label for="tevreden">
        Ik ben tevreden:
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="2") echo "checked";?> value="2">Ontevreden
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="4") echo "checked";?> value="4">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="6") echo "checked";?> value="6">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="8") echo "checked";?> value="8">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="10") echo "checked";?> value="10">Tevrede
        <!-- Evaluatie van error-->
        <span class="error">* <?php echo $tevredenErr;?></span>
    </label>
    <br><br>
    <!-- wat ging er goed?-->
    <label for="goed">
        Wat ging er goed?:
        <input type="text" id="goed" name="goed" value="<?php echo $goed;?>">
        <!-- Wat ging er goed? error-->
        <span class="error">* <?php echo $goedErr;?></span>
    </label>
    <br><br>
    <!-- Wat kon er beter?-->
    <label for="beter">
        Wat kon beter?:
        <input type="text" id="beter" name="beter" value="<?php echo $beter;?>">
        <!-- Wat kon er beter? error-->
        <span class="error">* <?php echo $beterErr;?></span>
    </label>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

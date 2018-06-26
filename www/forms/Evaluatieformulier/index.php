<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="mainForm">
    <div class="wrapper">
        <h2>Daan is de beste  form</h2>
        <!-- Datum voorbereiding label-->
        <label for="datum">Datum voorbereiding</label><br>
        <input type="date" id="datum" name="datum" value="<?php echo $datum;?>">
        <!-- Datum voorbereiding error-->
        <span class="error">* <?php echo $datumErr;?></span>
        <br><br>
        <!-- Evaluatie van label-->
        <label for="naam">Evaluatie van...</label><br>
        <input type="text" name="naam" id="naam" value="<?php echo $naam;?>">
        <!-- Schoolvak error-->
        <span class="error">* <?php echo $naamErr;?></span>
        <br><br>
        <!-- Ik ben tevreden-->
        <label for="tevreden">Ik ben tevreden</label><br><br><span class="radio-a">ontevreden</span><span class="radio-b">Tevrede</span><br>
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="2") echo "checked";?> value="2">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="4") echo "checked";?> value="4">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="6") echo "checked";?> value="6">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="8") echo "checked";?> value="8">
        <input type="radio" name="tevreden" <?php if (isset($tevreden) && $tevreden=="10") echo "checked";?> value="10">
        <!-- Evaluatie van error-->
        <span class="error">* <?php echo $tevredenErr;?></span>
        <br><br>
        <!-- wat ging er goed?-->
        <label for="goed">Wat ging er goed?</label><br>
        <textarea id="goed" name="goed" rows="6" cols="50"><?php echo $goed;?></textarea>
        <!-- Wat ging er goed? error-->
        <span class="error">* <?php echo $goedErr;?></span>
        <br><br>
        <!-- Wat kon er beter?-->
        <label for="beter">Wat kon beter?</label><br>
        <textarea id="beter" name="beter" rows="6" cols="50"><?php echo $beter;?></textarea>
        <!-- Wat kon er beter? error-->
        <span class="error">* <?php echo $beterErr;?></span>
        <br><br>

        <input type="submit" name="submit" value="Opslaan" class="confirm">
    </div>
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- Datum voorbereiding label-->
    <label for="datum">
        Datum voorbereiding:
        <input type="date" id="datum" name="datum" value="<?php echo $datum;?>">
        <!-- Datum voorbereiding error-->
        <span class="error">* <?php echo $datumErr;?></span>
    </label>
    <br><br>
    <!-- Schoolvak label-->
    <label for="schoolvak">
        Schoolvak:
        <input type="text" name="schoolvak" id="schoolvak" value="<?php echo $schoolvak;?>">
        <!-- Schoolvak error-->
        <span class="error">* <?php echo $schoolvakErr;?></span>
    </label>
    <br><br>
    <!-- Onderwerp label-->
    <label for="onderwerp">
        Onderwerp:
        <input type="text" name="onderwerp" id="onderwerp" value="<?php echo $onderwerp;?>">
        <!-- Onderwerp error-->
        <span class="error">* <?php echo $onderwerpErr;?></span>
    </label>
    <br><br>
    <!-- Doel(en) voor de leerling label-->
    <label for="doel">
        Doel(en) voor de leerling:
        <input type="text" id="doel" name="doel" value="<?php echo $doel;?>">
        <!-- Doel(en) voor de leerling error-->
        <span class="error">* <?php echo $doelErr;?></span>
    </label>
    <br><br>
    <!-- Startsituatie leerlingen label-->
    <label for="startsituatie">
        Startsituatie leerling:
        <input type="text" id="startsituatie" name="startsituatie" value="<?php echo $startsituatie;?>">
        <!-- Startsituatie leerling error-->
        <span class="error">* <?php echo $startsituatieErr;?></span>
    </label>
    <br><br>
    <!-- Mijn eigen doel(en) label-->
    <label for="owndoel">
        Mijn eigen doel(en):
        <input type="text" id="owndoel" name="owndoel" value="<?php echo $owndoel;?>">
        <!-- Mijn eigen doel(en) error-->
        <span class="error">* <?php echo $owndoelErr;?></span>
    </label>
    <br><br>
    <!-- Mijn eigen startsituatie label-->
    <label for="ownstartsituatie">
        Mijn eigen startsituatie:
        <input type="text" id="ownstartsituatie" name="ownstartsituatie" value="<?php echo $ownstartsituatie;?>">
        <!-- Mijn eigen startsituatie error-->
        <span class="error">* <?php echo $ownstartsituatieErr;?></span>
    </label>
    <br><br>
    <!-- INLEIDING-->
    <h3>inleiding</h3>
    <!-- Didactische werkvorm werkvorm-->
    <label for="in_werkvorm">
        Didactische werkvorm:
        <input type="text" id="in_werkvorm" name="in_werkvorm" value="<?php echo $in_werkvorm;?>">
        <!-- Didactische werkvorm error-->
        <span class="error">* <?php echo $in_werkvormErr;?></span>
    </label>
    <br><br>
    <!-- Organisatie, groepering-->
    <label for="in_organisatie">
        Organisatie, groepering:
        <input type="text" name="in_organisatie" id="in_organisatie" value="<?php echo $in_organisatie;?>">
        <!-- Organisatie, groepering error-->
        <span class="error">* <?php echo $in_organisatieErr;?></span>
    </label>
    <br><br>
    <!-- Leeractiviteit en –middelen-->
    <label for="in_leeractiviteit">
        Leeractiviteit en –middelen:
        <input type="text" name="in_leeractiviteit" id="in_leeractiviteit" value="<?php echo $in_leeractiviteit;?>">
        <!-- Leeractiviteit en –middelen error-->
        <span class="error">* <?php echo $in_leeractiviteitErr;?></span>
    </label>
    <br><br>
    <!-- Aandachtspunte-->
    <label for="in_aandachtspunten">
        Aandachtspunte:
        <input type="text" name="in_aandachtspunten" id="in_aandachtspunten" value="<?php echo $in_aandachtspunten;?>">
        <!-- Aandachtspunte error-->
        <span class="error">* <?php echo $in_aandachtspuntenErr;?></span>
    </label>
    <br><br>
    <!-- KERN-->
    <h3>kerm</h3>
    <!-- Didactische werkvorm-->
    <label for="ke_werkvorm">
        Didactische werkvorm:
        <input type="text" id="ke_werkvorm" name="ke_werkvorm" value="<?php echo $ke_werkvorm;?>">
        <!-- Didactische werkvorm error-->
        <span class="error">* <?php echo $ke_werkvormErr;?></span>
    </label>
    <br><br>
    <!-- Organisatie, groepering-->
    <label for="ke_organisatie">
        Organisatie, groepering:
        <input type="text" name="ke_organisatie" id="ke_organisatie" value="<?php echo $ke_organisatie;?>">
        <!-- Organisatie, groepering error-->
        <span class="error">* <?php echo $ke_organisatieErr;?></span>
    </label>
    <br><br>
    <!-- Leeractiviteit en –middelen-->
    <label for="ke_leeractiviteit">
        Leeractiviteit en –middelen:
        <input type="text" name="ke_leeractiviteit" id="ke_leeractiviteit" value="<?php echo $ke_leeractiviteit;?>">
        <!-- Leeractiviteit en –middelen error-->
        <span class="error">* <?php echo $ke_leeractiviteitErr;?></span>
    </label>
    <br><br>
    <!-- Aandachtspunten-->
    <label for="ke_aandachtspunten">
        Aandachtspunten:
        <input type="text" name="ke_aandachtspunten" id="ke_aandachtspunten" value="<?php echo $ke_aandachtspunten;?>">
        <!-- Aandachtspunten error-->
        <span class="error">* <?php echo $ke_aandachtspuntenErr;?></span>
    </label>
    <br><br>
    <!-- SLOT-->
    <h3>Slot</h3>
    <!-- Didactische werkvorm-->
    <label for="sl_werkvorm">
        Didactische werkvorm:
        <input type="text" id="sl_werkvorm" name="sl_werkvorm" value="<?php echo $sl_werkvorm;?>">
        <!-- Didactische werkvorm error-->
        <span class="error">* <?php echo $sl_werkvormErr;?></span>
    </label>
    <br><br>
    <!-- Organisatie, groepering-->
    <label for="sl_organisatie">
        Organisatie, groepering:
        <input type="text" name="sl_organisatie" id="sl_organisatie" value="<?php echo $sl_organisatie;?>">
        <!-- Organisatie, groepering error-->
        <span class="error">* <?php echo $sl_organisatieErr;?></span>
    </label>
    <br><br>
    <!-- Leeractiviteit en –middelen-->
    <label for="sl_leeractiviteit">
        Leeractiviteit en –middelen:
        <input type="text" name="sl_leeractiviteit" id="sl_leeractiviteit" value="<?php echo $sl_leeractiviteit;?>">
        <!-- Leeractiviteit en –middelen error-->
        <span class="error">* <?php echo $sl_leeractiviteitErr;?></span>
    </label>
    <br><br>
    <!-- Aandachtspunten-->
    <label for="sl_aandachtspunten">
        Aandachtspunten:
        <input type="text" name="sl_aandachtspunten" id="sl_aandachtspunten" value="<?php echo $sl_aandachtspunten;?>">
        <!-- Aandachtspunten error-->
        <span class="error">* <?php echo $sl_aandachtspuntenErr;?></span>
    </label>
    <br><br>


    <input type="submit" name="submit" value="Submit">
</form>

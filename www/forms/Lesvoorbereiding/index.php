<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="mainForm">
    <div class="wrapper">
        <h2>Lesvoorbereiding form</h2>
        <!-- Datum voorbereiding label-->
        <label for="datum">Datum voorbereiding</label><br>
        <input type="date" id="datum" name="datum" value="<?php echo $datum;?>"><br><br>
        <!-- Datum voorbereiding error-->
        <span class="error"><?php echo $datumErr;?></span><br>
        <!-- Schoolvak label-->
        <label for="schoolvak">Schoolvak</label><br>
        <input type="text" name="schoolvak" id="schoolvak" value="<?php echo $schoolvak;?>"><br><br>
        <!-- Schoolvak error-->
        <span class="error"><?php echo $schoolvakErr;?></span><br>
        <!-- Onderwerp label-->
        <label for="onderwerp">Onderwerp</label><br>
        <input type="text" name="onderwerp" id="onderwerp" value="<?php echo $onderwerp;?>"><br><br>
        <!-- Onderwerp error-->
        <span class="error"><?php echo $onderwerpErr;?></span><br>
        <!-- Doel(en) voor de leerling label-->
        <label for="doel">Doel(en) voor de leerling</label><br>
        <input type="text" id="doel" name="doel" value="<?php echo $doel;?>"><br><br>
        <!-- Doel(en) voor de leerling error-->
        <span class="error"><?php echo $doelErr;?></span><br>
        <!-- Startsituatie leerlingen label-->
        <label for="startsituatie">Startsituatie leerling</label><br>
        <input type="text" id="startsituatie" name="startsituatie" value="<?php echo $startsituatie;?>"><br><br>
        <!-- Startsituatie leerling error-->
        <span class="error"><?php echo $startsituatieErr;?></span><br>
        <!-- Mijn eigen doel(en) label-->
        <label for="owndoel">Mijn eigen doel(en)</label><br>
        <input type="text" id="owndoel" name="owndoel" value="<?php echo $owndoel;?>"><br><br>
        <!-- Mijn eigen doel(en) error-->
        <span class="error"><?php echo $owndoelErr;?></span><br>
        <!-- Mijn eigen startsituatie label-->
        <label for="ownstartsituatie">Mijn eigen startsituatie</label><br>
        <input type="text" id="ownstartsituatie" name="ownstartsituatie" value="<?php echo $ownstartsituatie;?>"><br><br>
        <!-- Mijn eigen startsituatie error-->
        <span class="error"><?php echo $ownstartsituatieErr;?></span><br>
        <!-- INLEIDING-->
        <h3>inleiding</h3>
        <!-- Didactische werkvorm werkvorm-->
        <label for="in_werkvorm">Didactische werkvorm</label><br>
        <input type="text" id="in_werkvorm" name="in_werkvorm" value="<?php echo $in_werkvorm;?>"><br><br>
        <!-- Didactische werkvorm error-->
        <span class="error"><?php echo $in_werkvormErr;?></span><br>
        <!-- Organisatie, groepering-->
        <label for="in_organisatie">Organisatie, groepering</label><br>
        <input type="text" name="in_organisatie" id="in_organisatie" value="<?php echo $in_organisatie;?>"><br><br>
        <!-- Organisatie, groepering error-->
        <span class="error"><?php echo $in_organisatieErr;?></span><br>
        <!-- Leeractiviteit en –middelen-->
        <label for="in_leeractiviteit">Leeractiviteit en –middelen</label><br>
        <input type="text" name="in_leeractiviteit" id="in_leeractiviteit" value="<?php echo $in_leeractiviteit;?>"><br><br>
        <!-- Leeractiviteit en –middelen error-->
        <span class="error"><?php echo $in_leeractiviteitErr;?></span><br>
        <!-- Aandachtspunte-->
        <label for="in_aandachtspunten">Aandachtspunte</label><br>
        <input type="text" name="in_aandachtspunten" id="in_aandachtspunten" value="<?php echo $in_aandachtspunten;?>"><br><br>
        <!-- Aandachtspunte error-->
        <span class="error"><?php echo $in_aandachtspuntenErr;?></span><br>
        <!-- KERN-->
        <h3>kerm</h3>
        <!-- Didactische werkvorm-->
        <label for="ke_werkvorm">Didactische werkvorm</label><br>
        <input type="text" id="ke_werkvorm" name="ke_werkvorm" value="<?php echo $ke_werkvorm;?>"><br><br>
        <!-- Didactische werkvorm error-->
        <span class="error"><?php echo $ke_werkvormErr;?></span><br>
        <!-- Organisatie, groepering-->
        <label for="ke_organisatie">Organisatie, groepering</label><br>
        <input type="text" name="ke_organisatie" id="ke_organisatie" value="<?php echo $ke_organisatie;?>"><br><br>
        <!-- Organisatie, groepering error-->
        <span class="error"><?php echo $ke_organisatieErr;?></span><br>
        <!-- Leeractiviteit en –middelen-->
        <label for="ke_leeractiviteit">Leeractiviteit en –middelen</label><br>
        <input type="text" name="ke_leeractiviteit" id="ke_leeractiviteit" value="<?php echo $ke_leeractiviteit;?>"><br><br>
        <!-- Leeractiviteit en –middelen error-->
        <span class="error"><?php echo $ke_leeractiviteitErr;?></span><br>
        <!-- Aandachtspunten-->
        <label for="ke_aandachtspunten">Aandachtspunten</label><br>
        <input type="text" name="ke_aandachtspunten" id="ke_aandachtspunten" value="<?php echo $ke_aandachtspunten;?>"><br><br>
        <!-- Aandachtspunten error-->
        <span class="error"><?php echo $ke_aandachtspuntenErr;?></span><br>
        <!-- SLOT-->
        <h3>Slot</h3>
        <!-- Didactische werkvorm-->
        <label for="sl_werkvorm">Didactische werkvorm</label><br>
        <input type="text" id="sl_werkvorm" name="sl_werkvorm" value="<?php echo $sl_werkvorm;?>"><br><br>
        <!-- Didactische werkvorm error-->
        <span class="error"><?php echo $sl_werkvormErr;?></span><br>
        <!-- Organisatie, groepering-->
        <label for="sl_organisatie">Organisatie, groepering</label><br>
        <input type="text" name="sl_organisatie" id="sl_organisatie" value="<?php echo $sl_organisatie;?>"><br><br>
        <!-- Organisatie, groepering error-->
        <span class="error"><?php echo $sl_organisatieErr;?></span><br>
        <!-- Leeractiviteit en –middelen-->
        <label for="sl_leeractiviteit">Leeractiviteit en –middelen</label><br>
        <input type="text" name="sl_leeractiviteit" id="sl_leeractiviteit" value="<?php echo $sl_leeractiviteit;?>"><br><br>
        <!-- Leeractiviteit en –middelen error-->
        <span class="error"><?php echo $sl_leeractiviteitErr;?></span><br>
        <!-- Aandachtspunten-->
        <label for="sl_aandachtspunten">Aandachtspunten</label><br>
        <input type="text" name="sl_aandachtspunten" id="sl_aandachtspunten" value="<?php echo $sl_aandachtspunten;?>"><br><br>
        <!-- Aandachtspunten error-->
        <span class="error"><?php echo $sl_aandachtspuntenErr;?></span><br>
        <!-- Notities-->
        <label for="notities">Notities</label><br>
        <input type="text" name="notities" id="notities" value="<?php echo $notities;?>"><br><br>
        <!-- Aandachtspunten error-->
        <span class="error"><?php echo $notitiesErr;?></span><br>

        <input type="submit" name="submit" value="Bevestigen" class="confirm">
        <a href="../eigengegevens" class="cancel">Annuleren</a>
    </div>
</form>

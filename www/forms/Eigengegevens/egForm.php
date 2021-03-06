<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="../styles/css/main.css" rel="stylesheet">

    </head>
    <body class="mainFormBody">
        <div id="egForm" style="display:none;">
            <form method="post" class="mainForm">
                <div class="wrapper">
                    <h2>Eigen gegevens</h2>
                    <div class="personal_details">
                        <label for="fName">Voornaam</label><br>
                        <input type="text" id="fName" name="fName" value="" required><br><br>
                        <label for="prefix">Tussenvoegsel</label><br>
                        <input type="text" id="prefix" name="prefix" value=""><br><br>
                        <label for="lName">Achternaam</label><br>
                        <input type="text" id="lName" name="lName" value="" required><br><br>
                        <label for="Email">E-mailadres</label><br>
                        <input type="text" id="Email" name="Email" value="<?= $Email ?>" required><br><br>
                    </div>
                    <div class="internship_details">
                        <label for="class">Klas</label><br>
                        <select id="class" name="class">
                            <option value="TOOC43A">TOOC43A</option>
                            <option value="TOOC42A">TOOC42A</option>
                            <option value="TOOC41A">TOOC41A</option>
                            <option value="TOOC43B">TOOC43B</option>
                            <option value="TOOC42B">TOOC42B</option>
                            <option value="TOOC41B">TOOC41B</option>
                        </select><br><br>
                        <label for="group"> Groep</label><br>
                        <select id="group" name="group">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select><br><br>
                        <label for="internComp"> BPV-instelling </label><br>
                        <input type="text" name="internComp" value="" id="internComp"><br><br>
                        <label for="internPlace"> BPV-plaats </label><br>
                        <input type="text" name="internPlace" value="" id="internPlace"><br><br>
                        <label for="internLead"> BPV-begeleider</label><br>
                        <select id="internLead" name="internLead">
                            <option value="teacher 1">teacher 1</option>
                            <option value="teacher 2">teacher 2</option>
                            <option value="teacher 3">teacher 3</option>
                            <option value="teacher 4">teacher 4</option>
                            <option value="teacher 5">teacher 5</option>
                            <option value="teacher 6">teacher 6</option>
                        </select><br><br>
                        <label for="internTeacher">BPV-opleider</label><br>
                        <input type="text" name="internTeacher" value="" id="internTeacher"><br><br>
                    </div>
                    <button type="submit" name="submit" class="confirm">Opslaan</button>
                    <button onclick="resetPersonalValues()" class="confirm">Reset personal_info</button>
                    <br>
                    <br>
                    <button onclick="resetInternshipValues()" class="confirm">Reset bpv_info</button>
                    <br>
                    <br>
                    <button onclick="resetAllValues()" class="confirm">Reset alles</button>
                    <br>
                    <br>
                    <button name="pwChange" onclick="changePW()" id="pwChange" class="confirm">Verander wachtwoord</button>
                    <a href="../" class="cancel">Home</a>
                </div>
            </form>
        </div>
        <div id="pwChangeForm" style="display: none">
            <form>
                <div id="oldPw">
                <input placeholder="oud wachtwoord" type="password" name="oldPw" id="oldPw" required>
                <span id="oldPwErr" style="display:none;color:red">Oud wachtwoord is niet gelijk aan het wachtwoord van nu!</span>
                </div>
                <div id="fNewPw">
                <input placeholder="nieuw wachtwoord" type="password" name="fNewPw" id="fNewPw" required>
                </div>
                <div id="sNewPw">
                <input placeholder="herhaal nieuw wachtwoord" type="password" id="sNewPw" name="sNewPw" required>
                </div>
                <br />
                <br />
                <button onclick="setNewPw(event)"> wijzig wachtwoord</button>
                <button onclick="cancelPwChange(event)"> Annuleren</button>
            </form>
        </div>
        <script src="../functions/js/jquery.js"></script>
        <script src="../functions/js/jquery-ui.js"></script>
        <script src="../functions/js/egScript.js"></script>
    </body>
</html>
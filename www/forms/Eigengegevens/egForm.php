    <head>

    </head>
    <body>
         <form method="post">
             <div class="personal_details">
                 <label for="fName"> Voornaam </label>
                 <br/>
                 <input type="text" id="fName" name="fName" value="" required>
                 <br />
                 <label for="prefix"> Tussenvoegsel </label>
                 <br/>
                 <input type="text" id="prefix" name="prefix" value="">
                 <br />
                 <label for="lName"> Achternaam </label>
                 <br/>
                 <input type="text" id="lName" name="lName" value="" required>
                 <br />
                 <label for="Email"> E-mailadres </label>
                 <br/>
                 <input type="text" id="Email" name="Email" value="<?= $Email ?>" required>
                 <br />
             </div>
             <div class="internship_details">
                 <label for="class"> Klas </label>
                 <br/>
                 <select id="class" name="class">
                     <option value="TOOC43A"> TOOC43A </option>
                     <option value="TOOC42A"> TOOC42A </option>
                     <option value="TOOC41A"> TOOC41A </option>
                     <option value="TOOC43B"> TOOC43B </option>
                     <option value="TOOC42B"> TOOC42B </option>
                     <option value="TOOC41B"> TOOC41B </option>
                 </select>
                 <br />
                 <label for="group"> Groep</label>
                 <select id="group" name="group">
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                     <option value="8"> 8 </option>
                 </select>
                 <br />
                 <label for="internComp"> BPV-instelling </label>
                 <br />
                 <input type="text" name="internComp" value="" id="internComp">
                 <br />
                 <label for="internPlace"> BPV-plaats </label>
                 <br />
                 <input type="text" name="internPlace" value="" id="internPlace">
                 <br />
                 <label for="internLead"> BPV-begeleider</label>
                 <br />
                 <select id="internLead" name="internLead">
                     <option value="teacher 1"> teacher 1 </option>
                     <option value="teacher 2"> teacher 2 </option>
                     <option value="teacher 3"> teacher 3 </option>
                     <option value="teacher 4"> teacher 4 </option>
                     <option value="teacher 5"> teacher 5 </option>
                     <option value="teacher 6"> teacher 6 </option>
                 </select>
                 <br />
                 <label for="internTeacher"> BPV-opleider</label>
                 <br />
                 <input type="text" name="internTeacher" value="" id="internTeacher">
                 <br />
             </div>
             <br />
             <button type="submit" name="submit"> Sla gegevens op</button>
        </form>
         <button onclick="resetPersonalValues()"> Reset personal_info </button>
         <br />
         <br />
         <button onclick="resetInternshipValues()"> Reset bpv_info </button>
         <br />
         <br />
         <button onclick="resetAllValues()"> Reset alles </button>
         <br />
         <br />
         <br />
         <br />
         <br />
         <br />
         <button name="pwChange" id="pwChange"> Verander wachtwoord </button>
         <script src="../functions/js/jquery.js"></script>
         <script src="../functions/js/egScript.js"></script>
    </body>

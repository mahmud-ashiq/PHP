<?php include '../controller/patientControl.php'; 
    include '../css/mystyle.css'; ?>
<html>
<head><script src="../js/myscript.js"></script></head>
    <body>
        <form method="POST" action="" onsubmit="return validateForm()">
        <fieldset>
            <legend>Patient Registration</legend>    
        <table>
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="name" id="name">
                    <?php echo $nameError; ?>
                    <?php echo $name; ?></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob">
                    <?php echo $dob; ?>
                    <?php echo $dobError; ?></td>
                    <td></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Sex:</td>
                    <td><select id="sex">
                    <option disabled selected value> -- select an option -- </option>
                        <option  name="male">Male</option>
                        <option  name="female">Female</option>
                    </select></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="phone">
                    <?php echo $phoneError; ?>
                    <?php echo $phone; ?></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email">
                    <?php echo $emailError; ?>
                    <?php echo $email; ?></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text" name="password">
                    <?php echo $passwordError; ?></td>
                </tr>
                <tr><td></td><td>Street Address</td></tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="city" id="address"></td><td><p id="add"></p></td>
                </tr>
                <tr><td></td><td>City</td></tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="postal" id="postal"></td>
                </tr>
                <tr><td></td><td>Postal Code</td></tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Marital Status:</td>
                    <td><select>
                        <option name="married">Married</option>
                        <option name="single">Single</option>
                    </select></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Aged (yrs):</td>
                    <td><input type="text" name="age" id="age"></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Height (inches):</td>
                    <td><input type="text" name="height"></td>
                </tr>
                <tr><td><br> </td></tr>
                <tr><td><br> </td></tr>
                <tr><td><h3>In case of emergency</h3></td></tr>
                <tr>
                    <td>Emergency contact name:</td>
                    <td><input type="text" name="emergency_contact"</td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Relationship:</td>
                    <td><input type="text" name="relation"</td>
                </tr>
                <tr><td><br> </td></tr>
                <tr>
                    <td>Contact Number:</td>
                    <td><input type="text" name="e_contact"></td>
                </tr>
                <tr><td><br> </td></tr>
                
                <tr><td><input type="submit" value="Submit" name="submit"</td></tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>
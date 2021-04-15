<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration </title>
    <link rel="stylesheet" type="text/css" href="registration.css">   
</head>

<body>
    <div class="login">
      <h1>Hospital Management System</h1>
        <div class="regform">
          <h2>Registration Form</h2>
        </div>
          <div class="main">

            <form name="regForm" method="Post" onsubmit="return myFunction()">
                <label class="nameLabel">Name:</label>

                    <input id="firstname" name="firstname" class="firstname" type="text" placeholder="first name" />
                    <div id="firstname_error" class="firstname_error_D"></div>

                    <input id="lastname" name="lastname" class="lastname" type="text"  placeholder="last name" /><br>
                    <div id="lastname_error" class="lastname_error_D"></div>

                <label class="usernameLabel">Username:</label>

                    <input  id="username"name="username" class="username" type="text" placeholder="username" /><br>
                    <div id="username_error" class="username_error_D"></div>

                <label class="emailLabel">Email:</label>

                    <input id="email" name="email" class="email" type="text" placeholder="email" /><br>
                    <div id="email_error" class="email_error_D"></div>
           
                <label class="passwordLabel">Password:</label>

                    <input id="password" name="password" class="password" type="Password" placeholder=" password" />
                    <div id="password_error" class="password_error_D"></div>

                    <input id="confirmpassword" name="confirmpassword" class="confirmpassword" type="Password" placeholder="Confirm password" /><br>
                    <div id="confirmpassword_error" class="confirmpassword_error_D"></div>

                <label class="contactLabel">Contacts:</label>

                    <input id="contacts"  name="contacts" class="contacts" type="text" placeholder="contacts" /><br>
                    <div id="contacts_error" class="contacts_error_D"></div>

                <label class="genderLabel">Gender:</label>
               
                    <label class="gender">
                        <input id="gender" type="radio" checked="checked" name="gender" value="male">Male   
                    </label>

                    <label class="gender">
                        <input id="gender" type="radio" name="gender" value="female">Female
                    </label>

                    <label class="gender">
                        <input id="gender" type="radio" name="gender" value="others">Others
                    </label>
                    <div id="gender_error" class="gender_error_D"></div>

                <label class="dobLabel">Birthday:</label>

                    <input id="dob" class ="dob" type="date" name="dob">
                    <div id="dob_error" class="dob_error_D"></div>

             

                <label class="professionLabel">Profession:</label>
                    <select id="profession" name="profession" class="profession">
                        <option value="0" >Choose One</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="stuff">Stuff</option>
                        <option value="patient">Patient</option>
                    </select>
                    <div id="profession_error" class="profession_error_D"></div>

                <label class="departmentLabel">Department:</label>
                    <select id="department" name="department" class="department">
                        <option value="0">Choose One</option>
                        <option value="Diabetologist">Diabetologist</option>
                        <option value="ENT Surgeon">ENT Surgeon</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Neuro Medicine">Neuro Medicine</option>
                        <option value="Eye Specialist">Eye Specialist</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Neuro Surgeon">Neuro Surgeon</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Dental Surgeon">Dental Surgeon</option>
                        <option value="Kidney Specialist">Kidney Specialist</option>
                        <option value="Orthopaedic">Orthopaedic</option>
                        <option value="Psychiatric">Psychiatric</option>
                        <option value="Accounts">Accounts</option>
                        <option value="Manager">Manager</option>
                        <option value="Nurse">Nurse</option>
                        <option value="Clark">Clark</option>
                    </select>
                    <div id="department_error" class="department_error_D"></div>

                <label class="addressLabel">Address:</label>

                    <input id="address" name="address" class="address" type="text" placeholder="address" /><br>
                    <div id="address_error" class="address_error_D"></div>


                <button type="submit">Register</button><br>
            
            </form>
          
        </div>
</body>
</html>

<script src="validation.js">
  
</script>
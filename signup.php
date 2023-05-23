<?php

include 'config.php';
//include 'header.php';

// handle form submission
 
if (isset($_POST['signup'])) {        
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $dob = $_POST['dob'];
  //check if account exists
  $uqry=mysqli_query($config,"SELECT * FROM users WHERE email='$email'");
  if(mysqli_num_rows($uqry)>0){
    echo "<div class='info'>User account already exists!</div>";
  }else{
// insert data into database
    $sql = "INSERT INTO users (firstname, lastname, email, `password`, phone,  gender, country, dob) 
    VALUES ('$first_name', '$last_name', '$email', '$pwd', '$phone', '$gender', '$country','$dob')";

    if ($config->query($sql) === TRUE) {
    echo "<div class='info'>New record created successfully</div>";
    } else {
      echo "Error: " . $sql . "<br>" . $config->error;
      }
  } 
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
</head>
<body>
  <div class="container"> 
    <div class="card" style="width:70%;">
      <form action="signup.php" method="post">
        <label for="first_name">First name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <label for="last_name">Last name:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <label for="email">Email address:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="confirm_password">Confirm password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br><br>

        <label for="phone">Phone number:</label>
        <input type="tel" name="phone" id="phone" required><br><br>

        <label for="dob">Date of birth:</label>
        <input type="date" name="dob" id="dob" required><br><br>

        <label for="gender">Gender:</label>
  <input type="radio" name="gender" id="male" value="Male" required>
  <label for="male">Male</label>
  <input type="radio" name="gender" id="female" value="Female" required>
  <label for="female">Female</label>
  <input type="radio" name="gender" id="other" value="Other" required>
  <label for="other">Other</label><br><br>

  <select name="country">
        <option value="">Select a country</option>
  <option 

value="Afghanistan">Afghanistan</option>
  <option value="Albania">Albania</option>
  <option 

value="Algeria">Algeria</option>
  <option value="Andorra">Andorra</option>
  <option value="Angola">Angola</option>
  

<option value="Antigua and Barbuda">Antigua and Barbuda</option>
  <option value="Argentina">Argentina</option>
  

<option value="Armenia">Armenia</option>
  <option value="Australia">Australia</option>
  <option 

value="Austria">Austria</option>
  <option value="Azerbaijan">Azerbaijan</option>
  <option 

value="Bahamas">Bahamas</option>
  <option value="Bahrain">Bahrain</option>
  <option 

value="Bangladesh">Bangladesh</option>
  <option value="Barbados">Barbados</option>
  <option 

value="Belarus">Belarus</option>
  <option value="Belgium">Belgium</option>
  <option value="Belize">Belize</option>
  

<option value="Benin">Benin</option>
  <option value="Bhutan">Bhutan</option>
  <option 

value="Bolivia">Bolivia</option>
  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
  <option 

value="Botswana">Botswana</option>
  <option value="Brazil">Brazil</option>
  <option value="Brunei">Brunei</option>
  

<option value="Bulgaria">Bulgaria</option>
  <option value="Burkina Faso">Burkina Faso</option>
  <option 

value="Burundi">Burundi</option>
  <option value="Cabo Verde">Cabo Verde</option>
  <option 

value="Cambodia">Cambodia</option>
  <option value="Cameroon">Cameroon</option>
  <option 

value="Canada">Canada</option>
  <option value="Central African Republic">Central African Republic</option>
  <option 

value="Chad">Chad</option>
  <option value="Chile">Chile</option>
  <option value="China">China</option>
  <option 

value="Colombia">Colombia</option>
  <option value="Comoros">Comoros</option>
  <option value="Congo, Democratic 

Republic of the">Congo, Democratic Republic of the</option>
  <option value="Congo, Republic of the">Congo, Republic 

of the</option>
  <option value="Costa Rica">Costa Rica</option>
  <option value="Cote d'Ivoire">Cote 

d'Ivoire</option>
  <option value="Croatia">Croatia</option>
  <option value="Cuba">Cuba</option>
  <option 

value="Cyprus">Cyprus</option>
  <option value="Czech Republic">Czech Republic</option>
  <option 

value="Denmark">Denmark</option>
  <option value="Djibouti">Djibouti</option>
  <option 

value="Dominica">Dominica</option>
  <option value="Dominican Republic">Dominican Republic</option>
  <option value="East Timor">East Timor</option>
  <option value="Ecuador">Ecuador</option>
  <option value="Egypt">Egypt</option>
  <option value="El Salvador">El Salvador</option>
  <option value="Equatorial Guinea">Equatorial Guinea</option>
  <option value="Eritrea">Eritrea</option>
  <option value="Estonia">Estonia</option>
  <option value="Eswatini">Eswatini</option>
  <option value="Ethiopia">Ethiopia</option>
  <option value="Fiji">Fiji</option>
  <option value="Finland">Finland</option>
  <option value="France">France</option>
  <option value="Gabon">Gabon</option>
  <option value="Gambia">Gambia</option>
  <option value="Georgia">Georgia</option>
  <option value="Germany">Germany</option>
  <option value="Ghana">Ghana</option>
  <option value="Greece">Greece</option>
  <option value="Grenada">Grenada</option>
  <option value="Guatemala">Guatemala</option>
  <option value="Guinea">Guinea</option>
  <option value="Guinea-Bissau">Guinea-Bissau</option>
  <option value="Guyana">Guyana</option>
  <option value="Haiti">Haiti</option>
  <option value="Honduras">Honduras</option>
  <option value="Hungary">Hungary</option>
  <option value="Iceland">Iceland</option>
  <option value="India">India</option>
  <option value="Indonesia">Indonesia</option>
  <option value="Iran">Iran</option>
  <option value="Iraq">Iraq</option>
  <option value="Ireland">Ireland</option>
  <option value="Israel">Israel</option>
  <option value="Italy">Italy</option>
  <option value="Jamaica">Jamaica</option>
  <option value="Japan">Japan</option>
  <option value="Jordan">Jordan</option>
  <option value="Kazakhstan">Kazakhstan</option>
  <option value="Kenya">Kenya</option>
  <option value="Kiribati">Kiribati</option>
  <option value="Kosovo">Kosovo</option>
  <option value="Kuwait">Kuwait</option>
  <option value="Kyrgyzstan">Kyrgyzstan</option>
  <option value="Madagascar">Madagascar</option>
  <option value="Malawi">Malawi</option>
  <option value="Malaysia">Malaysia</option>
  <option value="Maldives">Maldives</option>
  <option value="Mali">Mali</option>
  <option value="Malta">Malta</option>
  <option value="Marshall Islands">Marshall Islands</option>
  <option value="Mauritania">Mauritania</option>
  <option value="Mauritius">Mauritius</option>
  <option value="Mexico">Mexico</option>
  <option value="Micronesia">Micronesia</option>
  <option value="Moldova">Moldova</option>
  <option value="Monaco">Monaco</option>
  <option value="Mongolia">Mongolia</option>
  <option value="Montenegro">Montenegro</option>
  <option value="Morocco">Morocco</option>
  <option value="Mozambique">Mozambique</option>
  <option value="Myanmar (Burma)">Myanmar (Burma)</option>
  <option value="Namibia">Namibia</option>
  <option value="Nauru">Nauru</option>
  <option value="Nepal">Nepal</option>
  <option value="Netherlands">Netherlands</option>
  <option value="New Zealand">New Zealand</option>
  <option value="Nicaragua">Nicaragua</option>
  <option value="Niger">Niger</option>
  <option value="Nigeria">Nigeria</option>
  <option value="North Korea">North Korea</option>
  <option value="North Macedonia">North Macedonia</option>
  <option value="Norway">Norway</option>
  <option value="Oman">Oman</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Palau">Palau</option>
  <option value="Palestine">Palestine</option>
  <option value="Panama">Panama</option>
  <option value="Papua New Guinea">Papua New Guinea</option>
  <option value="Paraguay">Paraguay</option>
  <option value="Peru">Peru</option>
  <option value="Philippines">Philippines</option>
  <option value="Poland">Poland</option>
  <option value="Portugal">Portugal</option>
  <option value="Qatar">Qatar</option>
  <option value="Romania">Romania</option>
  <option value="Russia">Russia</option>
  <option value="Rwanda">Rwanda</option>
  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
  <option value="Saint Lucia">Saint Lucia</option>
  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
  <option value="Samoa">Samoa</option>
  <option value="San Marino">San Marino</option>
  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
  <option value="Saudi Arabia">Saudi Arabia</option>
  <option value="Senegal">Senegal</option>
  <option value="Serbia">Serbia</option>
  <option value="Seychelles">Seychelles</option>
  <option value="Sierra Leone">Sierra Leone</option>
  <option value="Singapore">Singapore</option>
  <option value="Slovakia">Slovakia</option>
  <option value="Slovenia">Slovenia</option>
  <option value="Solomon Islands">Solomon Islands</option>
  <option value="Somalia">Somalia</option>
  <option value="South Africa">South Africa</option>
  <option value="South Korea">South Korea</option>
  <option value="South Sudan">South Sudan</option>
  <option value="Spain">Spain</option>
  <option value="Sri Lanka">Sri Lanka</option>
  <option value="Sudan">Sudan</option>
  <option value="Suriname">Suriname</option>
  <option value="Sweden">Sweden</option>
  <option value="Switzerland">Switzerland</option>
  <option value="Syria">Syria</option>
  <option value="Taiwan">Taiwan</option>
  <option value="Tajikistan">Tajikistan</option>
  <option value="Tanzania">Tanzania</option>
  <option value="Thailand">Thailand</option>
  <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
  <option value="Togo">Togo</option>
  <option value="Tonga">Tonga</option>
  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
  <option value="Tunisia">Tunisia</option>
  <option value="Turkey">Turkey</option>
  <option value="Turkmenistan">Turkmenistan</option>
  <option value="Tuvalu">Tuvalu</option>
  <option value="Uganda">Uganda</option>
  <option value="Ukraine">Ukraine</option>
  <option value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
  <option value="United Kingdom (UK)">United Kingdom (UK)</option>
  <option value="United States of America (USA)">United States of America (USA)</option>
  <option value="Uruguay">Uruguay</option>
  <option value="Uzbekistan">Uzbekistan</option>
  <option value="Vanuatu">Vanuatu</option>
  <option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
  <option value="Venezuela">Venezuela</option>
  <option value="Vietnam">Vietnam</option>
  <option value="Yemen">Yemen</option>
  <option value="Zambia">Zambia</option>
  <option value="Zimbabwe">Zimbabwe</option>
</select>
  <input type="checkbox" name="terms" id="terms" required>
  <label for="terms">I agree to the terms of service</label><br><br>

 <div class="cta-button"> <input type="submit" value="Sign Up" name="signup"></div>
</form>

</div>
</body>
</html>
<?php
include 'styles.html';
?>
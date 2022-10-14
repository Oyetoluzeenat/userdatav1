<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-master/css/font-awesome.css" />
    <title>ZURI REGISTRATION FORM</title>

<style>
   <?php include "userdata.css"; ?>
</style>

</head>
<body>
<div></div>
<div class="bg">
  
<div class= "signup"><h4> Registration Form</h4><h6> Just a few details about you </h6> </div>
       
      
    <form method="post" action = "user_data.php" id="signupform">

    <h6 class = "label">Name </h6>
    <input type="text" name= "name" placeholder="John Doe*" class="input">

    <h6 class = "label">Email</h6> 
    <input type="text" name= "email" placeholder="example@gmail.com*" class="input" >

    <h6 class = "label">Date of Birth </h6> 
    <input type="date" name= "dob" class="input">

   <h6 class = "label"> Gender </h6> </label>
   
       <div class = "label"> 
        <input type="radio" name="gender" " <?php if(isset($gender) && $gender=="female") echo "checked"; ?> value = "female"> Female

        <input type ="radio" name="gender"  <?php if(isset($gender) && $gender == "male") echo "checked"; ?> value = "male"> Male

        <input type ="radio" name="gender" <?php if(isset($gender) && $gender =="other") echo "checked";?> value = "other"> Other
        </div>
        

        <h6 class = "label">Country</h6>
    <div class = "label">
        <select name= "country">
   
            <option disabled selected> ---choose your nationality </option>

            <option>select country</option>
            <option>Afghanistan</option>
            <option>Aland Islands</option>
            <option>Albania</option>
            <option>Algeria</option>
            <option>American Samoa</option>
            <option>Andorra</option>
            <option>Angola</option>
            <option>Anguilla</option>
            <option>Antarctica</option>
            <option>Antigua and Barbuda</option>
            <option>Argentina</option>
            <option>Armenia</option>
            <option>Aruba</option>
            <option>Australia</option>
            <option>Austria</option>
            <option>Azerbaijan</option>
            <option>Bahamas</option>
            <option>Bahrain</option>
            <option>Bangladesh</option>
            <option>Barbados</option>
            <option>Belarus</option>
            <option >Belgium</option>
            <option >Belize</option>
            <option >Benin</option>
            <option >Bermuda</option>
            <option >Bhutan</option>
            <option >Bolivia</option>
            <option >Bonaire</option>
            <option >Bosnia and Herzegovina</option>
            <option >Botswana</option>
            <option >Bouvet Island</option>
            <option >Brazil</option>
            <option >British Indian </option>
            <option >Brunei Darussalam</option>
            <option >Bulgaria</option>
            <option >Burkina Faso</option>
            <option >Burundi</option>
            <option >Cambodia</option>
            <option >Cameroon</option>
            <option >Canada</option>
            <option >Cape Verde</option>
            <option >Cayman Islands</option>
            <option >CAR</option>
            <option >Chad</option>
            <option >Chile</option>
            <option >China</option>
            <option >Christmas Island</option>
            <option >Cocos Islands</option>
            <option >Colombia</option>
            <option >Comoros</option>
            <option >Congo</option>
            <option >Congo, </option>
            <option >Cook Islands</option>
            <option >Costa Rica</option>
            <option >Cote D'Ivoire</option>
            <option >Croatia</option>
            <option >Cuba</option>
            <option >Curacao</option>
            <option >Cyprus</option>
            <option >Czech Republic</option>
            <option >Denmark</option>
            <option >Djibouti</option>
            <option >Dominica</option>
            <option >Dominican Republic</option>
            <option >Ecuador</option>
            <option >Egypt</option>
            <option >El Salvador</option>
            <option >Equatorial Guinea</option>
            <option >Eritrea</option>
            <option >Estonia</option>
            <option >Ethiopia</option>
            <option >Falkland Islands</option>
            <option >Faroe Islands</option>
            <option >Fiji</option>
            <option >Finland</option>
            <option >France</option>
            <option >French Guiana</option>
            <option >French Polynesia</option>
            <option >French Southern Territories</option>
            <option >Gabon</option>
            <option >Gambia</option>
            <option >Georgia</option>
            <option >Germany</option>
            <option >Ghana</option>
            <option >Gibraltar</option>
            <option >Greece</option>
            <option >Greenland</option>
            <option >Grenada</option>
            <option >Guadeloupe</option>
            <option >Guam</option>
            <option >Guatemala</option>
            <option >Guernsey</option>
            <option >Guinea</option>
            <option >Guinea-Bissau</option>
            <option >Guyana</option>
            <option >Haiti</option>
            <option >Heard Island </option>
            <option >Holy See </option>
            <option >Honduras</option>
            <option >Hong Kong</option>
            <option >Hungary</option>
            <option >Iceland</option>
            <option >India</option>
            <option >Indonesia</option>
            <option >Iran</option>
            <option >Iraq</option>
            <option >Ireland</option>
            <option >Isle of Man</option>
            <option >Israel</option>
            <option >Italy</option>
            <option >Jamaica</option>
            <option >Japan</option>
            <option >Jersey</option>
            <option >Jordan</option>
            <option >Kazakhstan</option>
            <option >Kenya</option>
            <option >Kiribati</option>
            <option >Korea</option>
            <option >Korea, Republic of</option>
            <option >Kosovo</option>
            <option >Kuwait</option>
            <option >Kyrgyzstan</option>
            <option >Lao PDR</option>
            <option >Latvia</option>
            <option >Lebanon</option>
            <option >Lesotho</option>
            <option >Liberia</option>
            <option >Libyan Arab</option>
            <option >Liechtenstein</option>
            <option >Lithuania</option>
            <option >Luxembourg</option>
            <option >Macao</option>
            <option >Macedonia</option>
            <option >Madagascar</option>
            <option >Malawi</option>
            <option >Malaysia</option>
            <option >Maldives</option>
            <option >Mali</option>
            <option >Malta</option>
            <option >Marshall Islands</option>
            <option >Martinique</option>
            <option >Mauritania</option>
            <option >Mauritius</option>
            <option >Mayotte</option>
            <option >Mexico</option>
            <option >Micronesia</option>
            <option >Moldova, Republic of</option>
            <option >Monaco</option>
            <option >Mongolia</option>
            <option >Montenegro</option>
            <option >Montserrat</option>
            <option >Morocco</option>
            <option >Mozambique</option>
            <option >Myanmar</option>
            <option>Namibia</option>
            <option>Nauru</option>
            <option>Nepal</option>
            <option>Netherlands</option>
            <option>Netherlands Antilles</option>
            <option>New Caledonia</option>
            <option>New Zealand</option>
            <option>Nicaragua</option>
            <option>Niger</option>
            <option>Nigeria</option>
            <option>Niue</option>
            <option>Norfolk Island</option>
            <option>Northern Mariana Islands</option>
            <option>Norway</option>
            <option>Oman</option>
            <option>Pakistan</option>
            <option>Palau</option>
            <option>Palestinian Territory</option>
            <option>Panama</option>
            <option>Papua New Guinea</option>
            <option>Paraguay</option>
            <option>Peru</option>
            <option>Philippines</option>
            <option>Pitcairn</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>Puerto Rico</option>
            <option>Qatar</option>
            <option>Reunion</option>
            <option>Romania</option>
            <option>Russian Federation</option>
            <option>Rwanda</option>
            <option>Saint Barthelemy</option>
            <option>Saint Helena</option>
            <option>Saint Kitts and Nevis</option>
            <option>Saint Lucia</option>
            <option>Saint Martin</option>
            <option>Saint Pierre and Miquelon</option>
            <option>Saint Vincent and </option>
            <option>Samoa</option>
            <option>San Marino</option>
            <option>Sao Tome and Principe</option>
            <option>Saudi Arabia</option>
            <option>Senegal</option>
            <option>Serbia</option>
            <option>Serbia and Montenegro</option>
            <option>Seychelles</option>
            <option>Sierra Leone</option>
            <option>Singapore</option>
            <option>Sint Maarten</option>
            <option>Slovakia</option>
            <option>Slovenia</option>
            <option>Solomon Islands</option>
            <option>Somalia</option>
            <option>South Africa</option>
            <option>South Georgia </option>
            <option>South Sudan</option>
            <option>Spain</option>
            <option>Sri Lanka</option>
            <option>Sudan</option>
            <option>Suriname</option>
            <option>Svalbard and Jan Mayen</option>
            <option>Swaziland</option>
            <option>Sweden</option>
            <option>Switzerland</option>
            <option>Syrian Arab Republic</option>
            <option>Taiwan, Province of China</option>
            <option>Tajikistan</option>
            <option>Tanzania, United Republic of</option>
            <option>Thailand</option>
            <option>Timor-Leste</option>
            <option>Togo</option>
            <option>Tokelau</option>
            <option>Tonga</option>
            <option>Trinidad and Tobago</option>
            <option>Tunisia</option>
            <option>Turkey</option>
            <option>Turkmenistan</option>
            <option>Turks and Caicos Islands</option>
            <option>Tuvalu</option>
            <option>Uganda</option>
            <option>Ukraine</option>
            <option>United Arab Emirates</option>
            <option>United Kingdom</option>
            <option>United States</option>
            <option>United States Minor</option>
            <option>Uruguay</option>
            <option>Uzbekistan</option>
            <option>Vanuatu</option>
            <option>Venezuela</option>
            <option>Viet Nam</option>
            <option>Virgin Islands, British</option>
            <option>Virgin Islands, U.s.</option>
            <option>Wallis and Futuna</option>
            <option>Western Sahara</option>
            <option>Yemen</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>

        </select> 
  
    </div>
    <button name="register" class="input" id="button"> REGISTER </button>
   

   </form>
</div>

</body>
</html>


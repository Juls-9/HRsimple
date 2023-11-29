<?php require_once "auth.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/appform.css">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    
<?php include("sidebar.php"); ?>
<div class="col-sm-12">
                <h3 class="page-title">Applciation Form</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="l.html">Leave Management</a></li>
                    <li class="breadcrumb-item active">Admin Leave Status</li>
                </ul>
            </div>
<div class="container w-75">
    
        <h1>Application Form</h1>
        <form action="../../index.php" method="post">
            <div class="mb-3">
                
                <div class="row g-3">
                    <h3 class="heads" >Personal Information</h3>
                    <div class="col-sm-4  mb-2">
                    <label for="firstname" class="form-label">Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                    </div>
                    <div class="col-sm-4 mb-2">
                    <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="col-sm-2 mb-2">
                    <label for="midname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="midname" placeholder="Middle Name">
                    </div>

                    
                    <div class="col-sm-1 mb-2 " id="suffixField" style="display:none">

                    <label for="suffix" class="form-label" >Suffix</label>

                        <input type="text" class="form-control" name="suffix" id="suffix" placeholder="Suffix">
                       
                    </div>
                    
                    <button type="button" id="addsuffix" class="addsuff" > <span>Add Suffix?</span> </button>
                    </div>
                  
             
                </div>
                
                <div class="row g-3">
                <div class="col-sm-4 mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-sm-2 mb-2 ">
                
                <label for="contactNumber" class="form-label">Contact #</label>
                <input type="text" id="contactNumber" name="contactNumber" class="form-control ab" readonly>
                <input type="text" id="rightPart" name="rightPart" class="form-control ac">
                <select id="contact" name="contact" class="contact" >
                    <!-- Add your list of countries with corresponding flag images -->
                    <option value="us" data-contact-number="+1"  > US</option>
                    <option value="uk" data-contact-number="+44">GB</option>
                    <option value="ca" data-contact-number="+1">CA</option>
                    <option value="de" data-contact-number="+49">DE</option>
                    <option value="fr" data-contact-number="+33">FR</option>
                    <option value="it" data-contact-number="+39">IT</option>
                    <option value="br" data-contact-number="+55">BR</option>
                    <option value="in" data-contact-number="+91">IN</option>
                    <option value="ph" data-contact-number="+91">PH</option>
                    <!-- Add more options as needed -->
                </select>
                
             </div>
             <div class="col-sm-3 mb-2">
                 <label for="citizen" class="form-label">Citizenship</label>
                    <input type="text" class="form-control" name="citizen" placeholder="Citizenship">
                    </div>   
             <div class="col-sm-3 mb-2">
                 <label for="religion" class="form-label">Religion</label>
                 <select class="form-select custom-select" name="gender" id="gender" required>
                                    <option value="" selected disabled>Select Religion</option>
                                    <option value="c">Roman Catholic</option>
                                    <option value="inc">Iglesia ni cristo</option>
                                    <option value="or">Orthodox</option>
                                    <option value="m">Muslim</option>
                                    <option value="ch">Christian</option>
                                    <option value="ch">Born This Way</option>
                                    <option value="ba">Iglesia ni JJ</option>
                                    <option value="ba">Iglesia ni Daez</option>
                                    <option value="ba">Others</option>
                               
                            </select>
                    </div>   
                </div>
              
                

                <div class="mb-3">
                            <div class="row g-3">
                            <div class="col-sm-4 mb-2">
                            <label for="birthplace" class="form-label">Place of Birth</label>
                        <input type="number" class="form-control" name="address" placeholder="Place of Birth">
                        </div>
                        <div class="col-sm-3 mb-2">
                        <label for="bday" class="form-label">Birthdate</label>
                        <input type="date" class="form-control" name="bday">            
                            </div>
                            <div class="col-sm-3 mb-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Age">
                        </div>

                        <div class="col-sm-3 mb-2">
                                <label for="country">Gender</label>
                            <select class="form-select custom-select" name="gender" id="gender" required>
                                    <option value="" selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                  
       
                    <div class="row g-3 ">
                    <h3 class="headsA" >Adress</h3>
                    <div class="col-sm-3 mb-2">
                        <label for="country">Country</label>
                    <select class="form-select custom-select" name="country" id="country" required>
                    <option value="" selected disabled>Select Country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote D'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="XK">Kosovo</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthelemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="CS">Serbia and Montenegro</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.s.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                    <!-- Add more options as needed -->
                </select>
                        </div>
                        
                 <div class="col-sm-3 mb-2">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City/Municipality" required>
                     </div>
                 <div class="col-sm-3 mb-2">
                <label for="street" class="form-label">Street</label>
                <input type="text" class="form-control" name="Street" placeholder="Street/Village">            
                    </div>
                    <div class="col-sm-3 mb-2">
                    <label for="Province" class="form-label">Province</label>
                    <input type="text" class="form-control" name="age" placeholder="Province">
                    </div>
                    
                    <div class="col-sm-3 mb-2">
                    <label for="address" class="form-label">House/Unit No.</label>
                 <input type="number" class="form-control" name="address" placeholder="Unit No.">
                 </div> 
                     <div class="col-sm-3 mb-2 ">
            <label for="postal" class="form-label">Postal Code</label>
            <input type="text" class="form-control" name="postal" placeholder="Postal Code" required>
                            </div>    
                    </div>

                    <div class="row g-3" id="educationSections">
            <h3 class="headsA">Education Information</h3>
            <div class="col-sm-3 mb-2">
                <label for="education">Type of Education</label>
                <select name="education" id="education" class="form-select custom-select">
                    <option value="" selected disabled>Select Type</option>
                    <option value="Elementary">Elementary</option>
                    <option value="Highschool">Highschool</option>
                    <option value="college">College</option>
                </select>
            </div>
            <div class="col-sm-3 mb-2">
                <label for="institution" class="form-label">Institution</label>
                <input type="text" class="form-control" name="institution" placeholder="School/University">
            </div>
            <div class="col-sm-3 mb-2">
                <label for="start" class="form-label">Year Start</label>
                <input type="number" class="form-control" name="educationYearStart" min="1900" max="2100" placeholder="Start">
            </div>
            <div class="col-sm-3 mb-2">
                <label for="end" class="form-label">Year End</label>
                <input type="number" class="form-control" name="educationYearEnd" min="1900" max="2100" placeholder="End">
            </div>
            <div id="degreeFields" class="col-sm-3 mb-2" style="display: none;" >
                <label for="degreeName" class="form-label">Degree</label>
                <select name="degree" id="degree" class="form-select custom-select">
                    <option value="ad">Associate degree</option>
                    <option value="bd">Bachelor's degree</option>
                    <option value="md">Master's degree</option>
                    <option value="dd">Doctoral degree</option>
                </select>
               
            </div>
            <button type="button" id="addEducation" class="addEdu" >Add</button>
        </div>
      
        <h3 class="headsA" >Application</h3>
            <div class="row">
            <div class="col-sm-4 mb-2">
            <label for="position">Job Position:</label>
    <select id="position" name="position" required class="form-select custom-select">
        <option value="" style="font-weight: bold;" selected disabled >Select Position</option>
        <optgroup label="Front Office/Reception">
            
            <option value="front_desk_agent">Front Desk Agent/Receptionist</option>
            <option value="front_office_manager">Front Office Manager</option>
            <option value="concierge">Concierge</option>
            <option value="bellhop_porter">Bellhop/Porter</option>
        </optgroup>
        <optgroup label="Housekeeping">
            <option value="housekeeper">Housekeeper</option>
            <option value="room_attendant">Room Attendant</option>
            <option value="housekeeping_supervisor">Housekeeping Supervisor</option>
            <option value="laundry_attendant">Laundry Attendant</option>
        </optgroup>
        <optgroup label="Food and Beverage">
            <option value="waiter_waitress">Waiter/Waitress</option>
            <option value="bartender">Bartender</option>
            <option value="restaurant_manager">Restaurant Manager</option>
            <option value="chef">Chef </option>
            <option value="sommelier">Sommelier</option>
        </optgroup>
        <optgroup label="Sales and Marketing">
            <option value="sales_manager">Sales Manager</option>
            <option value="marketing_coordinator">Marketing Coordinator</option>
            <option value="director_of_sales_and_marketing">Director of Sales and Marketing</option>
        </optgroup>
        <optgroup label="Management and Administration">
            <option value="general_manager">General Manager</option>
            <option value="assistant_general_manager">Assistant General Manager</option>
            <option value="hotel_manager">Hotel Manager</option>
            <option value="operations_manager">Operations Manager</option>
            <option value="human_resources_manager">Human Resources Manager</option>
        </optgroup>
        <optgroup label="Finance">
            <option value="accountant">Accountant</option>
            <option value="financial_controller">Financial Controller</option>
        </optgroup>
        <optgroup label="Events and Banquets">
            <option value="event_coordinator">Event Coordinator</option>
            <option value="banquet_manager">Banquet Manager</option>
            <option value="conference_services_manager">Conference Services Manager</option>
        </optgroup>
        <optgroup label="Maintenance and Engineering">
            <option value="maintenance_worker">Maintenance Worker</option>
            <option value="chief_engineer">Chief Engineer</option>
        </optgroup>
        <optgroup label="Security">
            <option value="security_officer">Security Officer</option>
            <option value="security_manager">Security Manager</option>
        </optgroup>
        <optgroup label="Spa and Wellness">
            <option value="spa_therapist">Spa Therapist</option>
            <option value="spa_manager">Spa Manager</option>
            <option value="fitness_instructor">Fitness Instructor</option>
        </optgroup>
        <optgroup label="IT (Information Technology)">
            <option value="it_manager">IT Manager</option>
            <option value="systems_administrator">Systems Administrator</option>
        </optgroup>
        <optgroup label="Guest Services">
            <option value="guest_services_manager">Guest Services Manager</option>
            <option value="guest_relations_officer">Guest Relations Officer</option>
        </optgroup>
        <optgroup label="Valet Services">
            <option value="valet_parking_attendant">Valet Parking Attendant</option>
        </optgroup>
        <optgroup label="Retail">
            <option value="gift_shop_attendant">Gift Shop Attendant</option>
        </optgroup>
        <optgroup label="Reservations">
            <option value="reservations_agent">Reservations Agent</option>
        </optgroup>
    </select>
            </div>
            <div class="col-sm-3 mb-2">
                <label for="salary" class="form-label">Expected Salary</label>
                <input type="number" class="form-control" name="salary" placeholder="Salary">
            </div>
            <div class="col-sm-4">
            <label for="file">Upload Your CV/Resume:</label>
                 <input type="file" id="file" name="file" accept=".pdf" required>
            </div>
            </div>
        
    </form>

    <button class="full-rounded" type="submit" >
    <span>Hover me</span>
    <div class="border full-rounded"></div></button>

    <script>


    document.getElementById('addsuffix').addEventListener('click', function (){
        var suffixField =document.getElementById('suffixField')

        if(suffixField.style.display === 'none'){
            suffixField.style.display = 'block';
        }else{
            suffixField.style.display = 'none';
        }
    });

        document.getElementById('addEducation').addEventListener('click', function () {
            var educationSections = document.getElementById('educationSections');
            var newSection = document.createElement('div');
            newSection.className = 'row g-3';
            newSection.innerHTML = `
                <div class="col-sm-3 mb-2">
                    <label for="education">Type of Education</label>
                    <select name="education" class="form-select custom-select">
                        <option value="" selected disabled>Select Type</option>
                        <option value="Elementary">Elementary</option>
                        <option value="Highschool">Highschool</option>
                        <option value="College">College</option>
                    </select>
                </div>
                <div class="col-sm-4 mb-2">
                    <label for="institution" class="form-label">Institution</label>
                    <input type="text" class="form-control" name="institution" placeholder="School/University">
                </div>
                <div class="col-sm-3 mb-2">
                    <label for="start" class="form-label">Year Start</label>
                    <input type="number" class="form-control" name="educationYearStart" min="1900" max="2100" placeholder="Start">
                </div>
                <div class="col-sm-3 mb-2">
                    <label for="end" class="form-label">Year End</label>
                    <input type="number" class="form-control" name="educationYearEnd" min="1900" max="2100" placeholder="End">
                </div>
                <div class="col-sm-1 mb-2">
                    <button type="button" class="btn btn-danger removeEducation">Remove</button>
                </div>
            `;
            educationSections.appendChild(newSection);
        });

        document.getElementById('educationSections').addEventListener('click', function (e) {
            if (e.target.classList.contains('removeEducation')) {
                e.target.closest('.row').remove();
            }
        });
            document.getElementById('education').addEventListener('change',function(){
                var degreeFields = document.getElementById('degreeFields');
                
                if(this.value === 'college'){
                    degreeFields.style.display = 'block';
                }else{
                    degreeFields.style.display = 'none';
                }
            });
                 // Add an event listener to update the contact number based on the selected country
    document.getElementById('contact').addEventListener('change', function () {
        var selectedCountry = this.options[this.selectedIndex];
        var contactNumberInput = document.getElementById('contactNumber');
        contactNumberInput.value = selectedCountry.getAttribute('data-contact-number');
    });

    // You can add JavaScript validation or form submission handling here if needed
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        // Add your validation logic here if needed

        // Prevent the default form submission behavior
        event.preventDefault();
    });


    
    </script>


</div>


</body>
</html>

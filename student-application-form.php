<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | AIIT Melbourne</title>
  <meta name="description" content="Contact AIIT Melbourne for cookery & leadership course inquiries. Reach us today!">
  <meta name="keywords" content="AIIT contact, AIIT Melbourne contact, AIIT college contact us,Cookery courses Melbourne,best cookery courses in Melbourne,Melbourne Cookery College,Commercial cookery college near to the Flinders Street,Leadership courses Melbourne CBD,Commercial cookery training in Melbourne CBD,Diploma of Leadership and Management Melbourne,Vocational training Melbourne,International student courses Melbourne">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://www.aiit.edu.au/contactus.php">
  <meta property="og:title" content="Contact Us| AIIT Melbourne">
  <meta property="og:description" content="Contact AIIT Melbourne for cookery & leadership course inquiries. Reach us today!">
  <meta property="og:image" content="https://www.aiit.edu.au/img/logo.png">
  <meta property="og:url" content="https://www.aiit.edu.au/courses/contactus.php">
  <meta property="og:type" content="website">
    <?php include_once('./includes/links.php') ?>
<style>

 #results {
            display: none;
            position: absolute;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
        }
        .list-group-item:hover {
            cursor: pointer;
            background-color: #f8f9fa;
        }
        .underprocess{
        
      text-align:center;
        }
        .underprocess h2{
          
            font-weight:bold;
        }
        .application_form{
            display:none;
        }
</style>
</head>

<body>
    
<?php include_once('./includes/header.php') ?>
    <section class="headersection">
        <div class="headerlayer">
            <div class="container">
                <h1 class="pageHeading">Student Application Form</h1>

            </div>
        </div>
    </section>
<section>
    <div class="underprocess">
        <h2>Under processiong! </h2>
        Please contact us via <a href="mailto:admissions@aiit.vic.edu.au" class="text-primary text-lowercase">admissions@aiit.vic.edu.au</a> for enrollments queries
    </div>

    <div class="container">
        <h1 class="text-center"></h1>
        <form action="studentApplications/createApplications.php" method="POST"  class=" application_form needs-validation" novalidate>
            <!-- Applicant Details -->
            <div class="card mt-4">
                <div class="card-header"> Applicant Details</h4></div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="given_name">Given Name/Middle Name</label>
                        <input type="text" class="form-control" id="given_name" name="given_name" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname(s)</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <input type="text" class="form-control" id="marital_status" name="marital_status">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Male" required>
                            <label class="form-check-label" for="gender_male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Female">
                            <label class="form-check-label" for="gender_female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_other" value="Other">
                            <label class="form-check-label" for="gender_other">Other</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" required>
                    </div>
                    <div class="form-group" style="position:relative">
                        <label for="country_residence">Country of Residence</label>
                       <input type="text" class="form-control" id="country_residence" name=[country_residence] placeholder="Type to search...">
                     <ul class="list-group" id="results"></ul>
                    </div>
                    <div class="form-group">
                        <label for="passport">Passport</label>
                        <input type="text" class="form-control" id="passport" name="passport" required>
                    </div>
                    <div class="form-group">
                        <label for="country_issue">Country of Issue</label>
                        <input type="text" class="form-control" id="country_issue" name="country_issue" required>
                    </div>
                </div>
            </div>

            <!-- Overseas Contact Details -->
            <div class="card mt-4">
                <div class="card-header">Overseas Contact Details and Address</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="overseas_address">Address</label>
                        <input type="text" class="form-control" id="overseas_address" name="overseas_address" required>
                    </div>
                    <div class="form-group">
                        <label for="overseas_suburb">Suburb/Town/City</label>
                        <input type="text" class="form-control" id="overseas_suburb" name="overseas_suburb" required>
                    </div>
                    <div class="form-group">
                        <label for="overseas_state">State/Province/Region</label>
                        <input type="text" class="form-control" id="overseas_state" name="overseas_state" required>
                    </div>
                    <div class="form-group">
                        <label for="overseas_country">Country</label>
                        <input type="text" class="form-control" id="overseas_country" name="overseas_country" required>
                    </div>
                    <div class="form-group">
                        <label for="overseas_postal">Postal Code/Zip</label>
                        <input type="text" class="form-control" id="overseas_postal" name="overseas_postal" required>
                    </div>
                    <div class="form-group">
                        <label for="overseas_telephone">Telephone (Country & Area Codes)</label>
                        <input type="text" class="form-control" id="overseas_telephone" name="overseas_telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="overseas_email">Email</label>
                        <input type="email" class="form-control" id="overseas_email" name="overseas_email" required>
                    </div>
                </div>
            </div>

            <!-- Australian Contact Details -->
            <div class="card mt-4">
                <div class="card-header">Australian Contact Details and Address</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="australian_address">Address</label>
                        <input type="text" class="form-control" id="australian_address" name="australian_address">
                    </div>
                    <div class="form-group">
                        <label for="australian_suburb">Suburb/Town/City</label>
                        <input type="text" class="form-control" id="australian_suburb" name="australian_suburb">
                    </div>
                    <div class="form-group">
                        <label for="australian_state">State/Province/Region</label>
                        <input type="text" class="form-control" id="australian_state" name="australian_state">
                    </div>
                    <div class="form-group">
                        <label for="australian_country">Country</label>
                        <input type="text" class="form-control" id="australian_country" name="australian_country">
                    </div>
                    <div class="form-group">
                        <label for="australian_postal">Postal Code/Zip</label>
                        <input type="text" class="form-control" id="australian_postal" name="australian_postal">
                    </div>
                    <div class="form-group">
                        <label for="australian_telephone">Telephone</label>
                        <input type="text" class="form-control" id="australian_telephone" name="australian_telephone">
                    </div>
                    <div class="form-group">
                        <label for="australian_email">Email</label>
                        <input type="email" class="form-control" id="australian_email" name="australian_email">
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <div class="card mt-4">
                <div class="card-header">Emergency Contact Details / Next of Kin</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="emergency_name">Name</label>
                        <input type="text" class="form-control" id="emergency_name" name="emergency_name" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_relationship">Relationship</label>
                        <input type="text" class="form-control" id="emergency_relationship" name="emergency_relationship" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_address">Address</label>
                        <input type="text" class="form-control" id="emergency_address" name="emergency_address" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_suburb">Suburb/Town/City</label>
                        <input type="text" class="form-control" id="emergency_suburb" name="emergency_suburb" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_state">State/Province/Region</label>
                        <input type="text" class="form-control" id="emergency_state" name="emergency_state" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_country">Country</label>
                        <input type="text" class="form-control" id="emergency_country" name="emergency_country" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_postal">Postal Code/Zip</label>
                        <input type="text" class="form-control" id="emergency_postal" name="emergency_postal" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_telephone">Telephone (Country Code | Area Code)</label>
                        <input type="text" class="form-control" id="emergency_telephone" name="emergency_telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="emergency_email">Email</label>
                        <input type="email" class="form-control" id="emergency_email" name="emergency_email" required>
                    </div>
                </div>
            </div>

            <!-- Airport Pickup / Accommodation -->
            <div class="card mt-4">
                <div class="card-header">Airport Arrival Pick Up / Accommodation</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Will you require an airport pickup on arrival?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="airport_pickup" id="airport_pickup_yes" value="Yes" required>
                            <label class="form-check-label" for="airport_pickup_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="airport_pickup" id="airport_pickup_no" value="No">
                            <label class="form-check-label" for="airport_pickup_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Will you require accommodation in Melbourne?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="accommodation" id="accommodation_yes" value="Yes" required>
                            <label class="form-check-label" for="accommodation_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="accommodation" id="accommodation_no" value="No">
                            <label class="form-check-label" for="accommodation_no">No</label>
                        </div>
                    </div>
                    <p>Note: Please provide your flight details and any accommodation requirements to admin@aiit.vic.edu.au within a minimum of ten (10) working days’ notice.</p>
                </div>
            </div>

            <!-- Visa Entitlement -->
            <div class="card mt-4">
                <div class="card-header">Applicant Visa Entitlement Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Visa Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visa_type" id="visa_student" value="Student Visa" required>
                            <label class="form-check-label" for="visa_student">Student Visa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visa_type" id="visa_bridging" value="Bridging Visa">
                            <label class="form-check-label" for="visa_bridging">Bridging Visa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visa_type" id="visa_visitor" value="Visitor">
                            <label class="form-check-label" for="visa_visitor">Visitor</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visa_type" id="visa_na" value="N/A">
                            <label class="form-check-label" for="visa_na">N/A</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="other_visa">Other Visa Entitlement Type</label>
                        <input type="text" class="form-control" id="other_visa" name="other_visa">
                    </div>
                    <div class="form-group">
                        <label>If applying for a student visa, where are you applying from?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="applying_from" id="offshore" value="Offshore (outside Australia)">
                            <label class="form-check-label" for="offshore">Offshore (outside Australia)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="applying_from" id="onshore" value="Onshore (within Australia)">
                            <label class="form-check-label" for="onshore">Onshore (within Australia)</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- USI -->
            <div class="card mt-4">
                <div class="card-header">Unique Student Identifier (USI)</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Do you have a Unique Student Identifier (USI) number?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="has_usi" id="has_usi_yes" value="Yes" required>
                            <label class="form-check-label" for="has_usi_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="has_usi" id="has_usi_no" value="No">
                            <label class="form-check-label" for="has_usi_no">No</label>
                        </div>
                    </div>
                    <div class="form-group" id="usi_details" style="display:none;">
                        <label for="usi_number">USI Number</label>
                        <input type="text" class="form-control" id="usi_number" name="usi_number">
                    </div>
                    <p>If No, please apply for a USI via https://www.usi.gov.au/ and provide to admin@aiit.vic.edu.au.</p>
                </div>
            </div>

            <!-- Training Products -->
            <div class="card mt-4">
                <div class="card-header">Training Products You Are Applying For</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="commencement_date">Anticipated Commencement Date</label>
                        <input type="date" class="form-control" id="commencement_date" name="commencement_date" required>
                    </div>
                    <h5>General English Courses</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_ge" value="101697 General English (Beginner to Advanced) (01-78 weeks)">
                        <label class="form-check-label" for="course_ge">101697 General English (Beginner Level to Advanced Level) (01 weeks to 78 weeks)</label>
                    </div>
                    <h5>Leadership and Management Courses</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_bsb40520" value="104007F BSB40520 - Certificate IV in Leadership and Management (52 weeks)">
                        <label class="form-check-label" for="course_bsb40520">104007F BSB40520 - Certificate IV in Leadership and Management (52 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_bsb50420" value="104387M BSB50420 - Diploma of Leadership and Management (52 weeks)">
                        <label class="form-check-label" for="course_bsb50420">104387M BSB50420 - Diploma of Leadership and Management (52 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_bsb60420" value="106128C BSB60420 - Advanced Diploma of Leadership and Management (52 weeks)">
                        <label class="form-check-label" for="course_bsb60420">106128C BSB60420 - Advanced Diploma of Leadership and Management (52 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_bsb80320" value="113603M BSB80320 - Graduate Diploma of Strategic Leadership (52 weeks)">
                        <label class="form-check-label" for="course_bsb80320">113603M BSB80320 - Graduate Diploma of Strategic Leadership (52 weeks)</label>
                    </div>
                    <h5>Commercial Cookery and Hospitality Management</h5>
                    <h6>Packaged Pathway Courses</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_sit30821" value="109885H SIT30821 - Certificate III in Commercial Cookery (52 weeks)">
                        <label class="form-check-label" for="course_sit30821">109885H SIT30821 - Certificate III in Commercial Cookery (52 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_sit40521" value="109564C SIT40521 - Certificate IV in Kitchen Management (78 weeks)">
                        <label class="form-check-label" for="course_sit40521">109564C SIT40521 - Certificate IV in Kitchen Management (78 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_sit50422_pack" value="113605J SIT50422 - Diploma of Hospitality Management (68 weeks)">
                        <label class="form-check-label" for="course_sit50422_pack">113605J SIT50422 - Diploma of Hospitality Management (68 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_sit60322_pack" value="113604K SIT60322 - Advanced Diploma of Hospitality Management (26 weeks)">
                        <label class="form-check-label" for="course_sit60322_pack">113604K SIT60322 - Advanced Diploma of Hospitality Management (26 weeks)</label>
                    </div>
                    <h6>Stand Alone Courses</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_sit50422_stand" value="113605J SIT50422 - Diploma of Hospitality Management (104 weeks)">
                        <label class="form-check-label" for="course_sit50422_stand">113605J SIT50422 - Diploma of Hospitality Management (104 weeks)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="courses[]" id="course_sit60322_stand" value="113604K SIT60322 - Advanced Diploma of Hospitality Management (104 weeks)">
                        <label class="form-check-label" for="course_sit60322_stand">113604K SIT60322 - Advanced Diploma of Hospitality Management (104 weeks)</label>
                    </div>
                </div>
            </div>

            <!-- Disability -->
            <div class="card mt-4">
                <div class="card-header">Disability, Medical Conditions, or Special Needs</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Do you consider yourself to have a disability, impairment or long-term medical condition?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="has_disability" id="has_disability_yes" value="Yes" required>
                            <label class="form-check-label" for="has_disability_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="has_disability" id="has_disability_no" value="No">
                            <label class="form-check-label" for="has_disability_no">No</label>
                        </div>
                    </div>
                    <div id="disability_details" style="display:none;">
                        <label>Indicate the area of impairment:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="disability_areas[]" id="hearing" value="Hearing">
                            <label class="form-check-label" for="hearing">Hearing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="disability_areas[]" id="mobility" value="Mobility">
                            <label class="form-check-label" for="mobility">Mobility</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="disability_areas[]" id="vision" value="Vision">
                            <label class="form-check-label" for="vision">Vision</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="disability_areas[]" id="learning" value="Learning">
                            <label class="form-check-label" for="learning">Learning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="disability_areas[]" id="medical" value="Medical">
                            <label class="form-check-label" for="medical">Medical</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="disability_areas[]" id="other_dis" value="Other">
                            <label class="form-check-label" for="other_dis">Other</label>
                        </div>
                        <div class="form-group">
                            <label for="support_requirements">Any support requirements</label>
                            <textarea class="form-control" id="support_requirements" name="support_requirements"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- OSHC -->
            <div class="card mt-4">
                <div class="card-header">Overseas Student Health Cover (OSHC)</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Do you have Overseas Student Health Cover (OSHC)?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="has_oshc" id="has_oshc_yes" value="Yes" required>
                            <label class="form-check-label" for="has_oshc_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="has_oshc" id="has_oshc_no" value="No">
                            <label class="form-check-label" for="has_oshc_no">No</label>
                        </div>
                    </div>
                    <div id="oshc_details" style="display:none;">
                        <div class="form-group">
                            <label for="oshc_membership">OSHC Membership Details</label>
                            <input type="text" class="form-control" id="oshc_membership" name="oshc_membership">
                        </div>
                        <div class="form-group">
                            <label for="oshc_expiry">OSHC Membership Expiry Date</label>
                            <input type="date" class="form-control" id="oshc_expiry" name="oshc_expiry">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Educational Background -->
            <div class="card mt-4">
                <div class="card-header">Educational Background</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Have you finished Year 12?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="finished_year12" id="finished_year12_yes" value="Yes" required>
                            <label class="form-check-label" for="finished_year12_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="finished_year12" id="finished_year12_no" value="No">
                            <label class="form-check-label" for="finished_year12_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="last_school">Name of the last School/College/Institute attended</label>
                        <input type="text" class="form-control" id="last_school" name="last_school" required>
                    </div>
                    <div class="form-group">
                        <label for="highest_qualification">Highest Qualification attained</label>
                        <input type="text" class="form-control" id="highest_qualification" name="highest_qualification" required>
                    </div>
                    <div class="form-group">
                        <label for="date_awarded">Date Awarded</label>
                        <input type="date" class="form-control" id="date_awarded" name="date_awarded" required>
                    </div>
                    <p>Note: Certified copies of qualifications must accompany your application.</p>
                </div>
            </div>

            <!-- Transferring from Another Provider -->
            <div class="card mt-4">
                <div class="card-header">Transferring from Another Provider</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Are you transferring from another school or institute in Australia?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="transferring" id="transferring_yes" value="Yes" required>
                            <label class="form-check-label" for="transferring_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="transferring" id="transferring_no" value="No">
                            <label class="form-check-label" for="transferring_no">No</label>
                        </div>
                    </div>
                    <div id="transfer_details" style="display:none;">
                        <p>Please submit copy of previous CoEs and AQF Certification.</p>
                        <div class="form-group">
                            <label>Do you have an official Release Letter from previous provider?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="has_release_letter" id="has_release_letter_yes" value="Yes">
                                <label class="form-check-label" for="has_release_letter_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="has_release_letter" id="has_release_letter_no" value="No">
                                <label class="form-check-label" for="has_release_letter_no">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Will you be applying for Credit Transfer (CT) or Recognition of Prior Learning (RPL)?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="applying_ct_rpl" id="applying_ct_rpl_yes" value="Yes">
                                <label class="form-check-label" for="applying_ct_rpl_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="applying_ct_rpl" id="applying_ct_rpl_no" value="No">
                                <label class="form-check-label" for="applying_ct_rpl_no">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- English Proficiency -->
            <div class="card mt-4">
                <div class="card-header">English Language Proficiency Evidence</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="english_type">Type of English Diagnostic</label>
                        <input type="text" class="form-control" id="english_type" name="english_type">
                    </div>
                    <div class="form-group">
                        <label for="english_score">Overall Score</label>
                        <input type="text" class="form-control" id="english_score" name="english_score">
                    </div>
                    <div class="form-group">
                        <label for="english_date">Date of Award</label>
                        <input type="date" class="form-control" id="english_date" name="english_date">
                    </div>
                    <p>Certified copies must accompany your application.</p>
                </div>
            </div>

            <!-- Agent Referral -->
            <div class="card mt-4">
                <div class="card-header">Education Agent or Migration Lawyer Referral</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Are you applying through an education or migration agent?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="through_agent" id="through_agent_yes" value="Yes" required>
                            <label class="form-check-label" for="through_agent_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="through_agent" id="through_agent_no" value="No">
                            <label class="form-check-label" for="through_agent_no">No</label>
                        </div>
                    </div>
                    <div id="agent_details" style="display:none;">
                        <div class="form-group">
                            <label for="agent_legal_name">Agent Legal Name</label>
                            <input type="text" class="form-control" id="agent_legal_name" name="agent_legal_name">
                        </div>
                        <div class="form-group">
                            <label for="agent_trading_name">Agent Trading Name</label>
                            <input type="text" class="form-control" id="agent_trading_name" name="agent_trading_name">
                        </div>
                        <div class="form-group">
                            <label for="agent_telephone">Telephone</label>
                            <input type="text" class="form-control" id="agent_telephone" name="agent_telephone">
                        </div>
                        <div class="form-group">
                            <label for="agent_email">Email</label>
                            <input type="email" class="form-control" id="agent_email" name="agent_email">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Declaration -->
            <div class="card mt-4">
                <div class="card-header">Applicant Declaration</div>
                <div class="card-body">
                    <p>I declare that the information is complete, factual, and accurate. I understand that incorrect information may result in withdrawal of any placement. I agree to pay all Tuition Fees and Charges.</p>
                    <div class="form-group">
                        <label for="applicant_name">Applicant Name</label>
                        <input type="text" class="form-control" id="applicant_name" name="applicant_name" required>
                    </div>
                    <div class="form-group">
                        <label for="applicant_signature">Applicant Signature (Type your name as signature)</label>
                        <input type="text" class="form-control" id="applicant_signature" name="applicant_signature" required>
                    </div>
                    <div class="form-group">
                        <label for="application_date">Application Date</label>
                        <input type="date" class="form-control" id="application_date" name="application_date" required>
                    </div>
                </div>
            </div>

            <!-- Privacy Notice -->
            <div class="card mt-4">
                <div class="card-header">Privacy Notice</div>
                <div class="card-body">
                    <p>Why we collect your personal information - As a registered training organisation (RTO), we collect your personal information so we can process and manage your enrolment in a vocational education and training (VET) course with us.</p>
                    <p>How we use your personal information - We use your personal information to enable us to deliver VET courses to you, and otherwise, as needed, to comply with our obligations as a registered training organisation.</p>
                    <p>How we disclose your personal information - We are required by law (under “the National Vocational Education and Training Regulator Act 2011 (Cth) (NVETR Act)”) to disclose the personal information we collect about you to the National VET Data Collection kept by the “National Centre for Vocational Education Research Ltd (NCVER)”.</p>
                    <p>For more information, refer to our Privacy policy at https://www.aiit.vic.edu.au/pol-pro and NCVER’s Privacy Policy at https://www.ncver.edu.au/privacy.</p>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-4">Submit Application</button>
        </form>
    </div>
</section>

<?php include_once('./includes/footer.php') ?>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
          alert('Please complete the required fields')
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
        // Show/hide conditional fields
        $('input[name="has_usi"]').change(function() {
            if ($(this).val() === 'Yes') {
                $('#usi_details').show();
            } else {
                $('#usi_details').hide();
            }
        });
        $('input[name="has_disability"]').change(function() {
            if ($(this).val() === 'Yes') {
                $('#disability_details').show();
            } else {
                $('#disability_details').hide();
            }
        });
        $('input[name="has_oshc"]').change(function() {
            if ($(this).val() === 'Yes') {
                $('#oshc_details').show();
            } else {
                $('#oshc_details').hide();
            }
        });
        $('input[name="transferring"]').change(function() {
            if ($(this).val() === 'Yes') {
                $('#transfer_details').show();
            } else {
                $('#transfer_details').hide();
            }
        });
        $('input[name="through_agent"]').change(function() {
            if ($(this).val() === 'Yes') {
                $('#agent_details').show();
            } else {
                $('#agent_details').hide();
            }
        });

        // Array of countries (you can expand this list as needed)
const countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia",
    "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
    "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia",
    "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)",
    "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor (Timor-Leste)",
    "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland",
    "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau",
    "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
    "Ivory Coast", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South",
    "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein",
    "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
    "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco",
    "Mozambique", "Myanmar (Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
    "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay",
    "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis",
    "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia",
    "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",
    "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland",
    "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia",
    "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
    "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
];

const searchInput = document.getElementById('country_residence');
        const resultsList = document.getElementById('results');

        // Function to render results
        function renderResults(filter = '') {
            resultsList.innerHTML = '';
            const filterCountries = countries.filter(country => country.toLowerCase().includes(filter.toLowerCase()));
            
            filterCountries.forEach(country => {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                li.setAttribute('data-value', country);
                li.textContent = country;
                li.addEventListener('click', function() {
                    searchInput.value = this.getAttribute('data-value');
                    resultsList.style.display = 'none';
                });
                resultsList.appendChild(li);
            });

            resultsList.style.display = filter && filterCountries.length > 0 ? 'block' : 'none';
        }

        // Initial render (empty, so nothing shows)
        renderResults();

        // Input event listener
        searchInput.addEventListener('input', function() {
            renderResults(this.value);
        });

        // Hide results when clicking outside
        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target) && !resultsList.contains(event.target)) {
                resultsList.style.display = 'none';
            }
        });
    </script>
</body>

</html>
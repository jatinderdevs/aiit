<?php

 include_once('../dbConnection.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs (use prepared statements for security)
    $given_name = mysqli_real_escape_string($conn, $_POST['given_name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $dob = $_POST['dob'];
    $marital_status = mysqli_real_escape_string($conn, $_POST['marital_status']);
    $gender = $_POST['gender'];
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $country_residence = mysqli_real_escape_string($conn, $_POST['country_residence']);
    $passport = mysqli_real_escape_string($conn, $_POST['passport']);
    $country_issue = mysqli_real_escape_string($conn, $_POST['country_issue']);
    $overseas_address = mysqli_real_escape_string($conn, $_POST['overseas_address']);
    $overseas_suburb = mysqli_real_escape_string($conn, $_POST['overseas_suburb']);
    $overseas_state = mysqli_real_escape_string($conn, $_POST['overseas_state']);
    $overseas_country = mysqli_real_escape_string($conn, $_POST['overseas_country']);
    $overseas_postal = mysqli_real_escape_string($conn, $_POST['overseas_postal']);
    $overseas_telephone = mysqli_real_escape_string($conn, $_POST['overseas_telephone']);
    $overseas_email = mysqli_real_escape_string($conn, $_POST['overseas_email']);
    $australian_address = mysqli_real_escape_string($conn, $_POST['australian_address'] ?? '');
    $australian_suburb = mysqli_real_escape_string($conn, $_POST['australian_suburb'] ?? '');
    $australian_state = mysqli_real_escape_string($conn, $_POST['australian_state'] ?? '');
    $australian_country = mysqli_real_escape_string($conn, $_POST['australian_country'] ?? '');
    $australian_postal = mysqli_real_escape_string($conn, $_POST['australian_postal'] ?? '');
    $australian_telephone = mysqli_real_escape_string($conn, $_POST['australian_telephone'] ?? '');
    $australian_email = mysqli_real_escape_string($conn, $_POST['australian_email'] ?? '');
    $emergency_name = mysqli_real_escape_string($conn, $_POST['emergency_name']);
    $emergency_relationship = mysqli_real_escape_string($conn, $_POST['emergency_relationship']);
    $emergency_address = mysqli_real_escape_string($conn, $_POST['emergency_address']);
    $emergency_suburb = mysqli_real_escape_string($conn, $_POST['emergency_suburb']);
    $emergency_state = mysqli_real_escape_string($conn, $_POST['emergency_state']);
    $emergency_country = mysqli_real_escape_string($conn, $_POST['emergency_country']);
    $emergency_postal = mysqli_real_escape_string($conn, $_POST['emergency_postal']);
    $emergency_telephone = mysqli_real_escape_string($conn, $_POST['emergency_telephone']);
    $emergency_email = mysqli_real_escape_string($conn, $_POST['emergency_email']);
    $airport_pickup = $_POST['airport_pickup'];
    $accommodation = $_POST['accommodation'];
    $visa_type = $_POST['visa_type'];
    $other_visa = mysqli_real_escape_string($conn, $_POST['other_visa'] ?? '');
    $applying_from = $_POST['applying_from'] ?? '';
    $has_usi = $_POST['has_usi'];
    $usi_number = mysqli_real_escape_string($conn, $_POST['usi_number'] ?? '');
    $commencement_date = $_POST['commencement_date'];
    $courses = implode(', ', $_POST['courses'] ?? []);
    $has_disability = $_POST['has_disability'];
    $disability_areas = implode(', ', $_POST['disability_areas'] ?? []);
    $support_requirements = mysqli_real_escape_string($conn, $_POST['support_requirements'] ?? '');
    $has_oshc = $_POST['has_oshc'];
    $oshc_membership = mysqli_real_escape_string($conn, $_POST['oshc_membership'] ?? '');
    $oshc_expiry = $_POST['oshc_expiry'] ?? null;
    $finished_year12 = $_POST['finished_year12'];
    $last_school = mysqli_real_escape_string($conn, $_POST['last_school']);
    $highest_qualification = mysqli_real_escape_string($conn, $_POST['highest_qualification']);
    $date_awarded = $_POST['date_awarded'];
    $transferring = $_POST['transferring'];
    $has_release_letter = $_POST['has_release_letter'] ?? '';
    $applying_ct_rpl = $_POST['applying_ct_rpl'] ?? '';
    $english_type = mysqli_real_escape_string($conn, $_POST['english_type'] ?? '');
    $english_score = mysqli_real_escape_string($conn, $_POST['english_score'] ?? '');
    $english_date = $_POST['english_date'] ?? null;
    $through_agent = $_POST['through_agent'];
    $agent_legal_name = mysqli_real_escape_string($conn, $_POST['agent_legal_name'] ?? '');
    $agent_trading_name = mysqli_real_escape_string($conn, $_POST['agent_trading_name'] ?? '');
    $agent_telephone = mysqli_real_escape_string($conn, $_POST['agent_telephone'] ?? '');
    $agent_email = mysqli_real_escape_string($conn, $_POST['agent_email'] ?? '');
    $applicant_name = mysqli_real_escape_string($conn, $_POST['applicant_name']);
    $applicant_signature = mysqli_real_escape_string($conn, $_POST['applicant_signature']);
    $application_date = $_POST['application_date'];

    // Insert query
    $sql = "INSERT INTO applications (
        given_name, surname, dob, marital_status, gender, nationality, country_residence, passport, country_issue,
        overseas_address, overseas_suburb, overseas_state, overseas_country, overseas_postal, overseas_telephone, overseas_email,
        australian_address, australian_suburb, australian_state, australian_country, australian_postal, australian_telephone, australian_email,
        emergency_name, emergency_relationship, emergency_address, emergency_suburb, emergency_state, emergency_country, emergency_postal, emergency_telephone, emergency_email,
        airport_pickup, accommodation, visa_type, other_visa, applying_from, has_usi, usi_number, commencement_date, courses,
        has_disability, disability_areas, support_requirements, has_oshc, oshc_membership, oshc_expiry, finished_year12, last_school, highest_qualification, date_awarded,
        transferring, has_release_letter, applying_ct_rpl, english_type, english_score, english_date, through_agent, agent_legal_name, agent_trading_name, agent_telephone, agent_email,
        applicant_name, applicant_signature, application_date
    ) VALUES (
        '$given_name', '$surname', '$dob', '$marital_status', '$gender', '$nationality', '$country_residence', '$passport', '$country_issue',
        '$overseas_address', '$overseas_suburb', '$overseas_state', '$overseas_country', '$overseas_postal', '$overseas_telephone', '$overseas_email',
        '$australian_address', '$australian_suburb', '$australian_state', '$australian_country', '$australian_postal', '$australian_telephone', '$australian_email',
        '$emergency_name', '$emergency_relationship', '$emergency_address', '$emergency_suburb', '$emergency_state', '$emergency_country', '$emergency_postal', '$emergency_telephone', '$emergency_email',
        '$airport_pickup', '$accommodation', '$visa_type', '$other_visa', '$applying_from', '$has_usi', '$usi_number', '$commencement_date', '$courses',
        '$has_disability', '$disability_areas', '$support_requirements', '$has_oshc', '$oshc_membership', " . ($oshc_expiry ? "'$oshc_expiry'" : "NULL") . ", '$finished_year12', '$last_school', '$highest_qualification', '$date_awarded',
        '$transferring', '$has_release_letter', '$applying_ct_rpl', '$english_type', '$english_score', " . ($english_date ? "'$english_date'" : "NULL") . ", '$through_agent', '$agent_legal_name', '$agent_trading_name', '$agent_telephone', '$agent_email',
        '$applicant_name', '$applicant_signature', '$application_date'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
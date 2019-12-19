<?php
include("../inc/vacancy_functions.php");
if (isset ($_POST['submit'])){
  $applicantData = $_POST;
  if(!isset($_POST['institution'])){
    $applicantData['institution'] = "";
    $applicantData['degree'] = "";
    $applicantData['yeartertiary'] ="";
  }
  if (!isset($_POST['company'])) {
    $applicantData['company'] = "";
    $applicantData['position'] = "";
    $applicantData['dateFrom'] = "";
    $applicantData['dateTo'] = "";
  }

  if (!isset($_POST['companyNameHistory'])) {
    $applicantData['companyNameHistory'] = "";
    $applicantData['doe'] = "";
    $applicantData['historyPosition'] = "";
    $applicantData['leaving'] = "";
    $applicantData['contactPerson'] = "";
    $applicantData['contactNumber'] = "";
    $applicantData['performance'] = "";
  }

  $vacancy =          $applicantData['vacancy'];
  $fullnames =        $applicantData['name'];
  $surname =          $applicantData['surname'];
  $identity =         $applicantData['id'];
  $age =              $applicantData['age'];
  $nationality =      $applicantData['nationality'];
  $gender =           $applicantData['gender'][0];
  $race =             $applicantData['race'];
  $maritial_status =  $applicantData['status'];
  $home_language =    $applicantData['homelang'];
  $other_languages =  $applicantData['otherlang'];
  $address =          $applicantData['address'];
  $email =            $applicantData['email'];
  $contact_number =   $applicantData['contact'];
  $driver_license =   $applicantData['license'];
  $current_salary =   $applicantData['prev_sal'];
  $expected_salary =  $applicantData['expec_sal'];
  $current_benifits = $applicantData['benifits'];
  $availability =     $applicantData['available'];
  $last_school =      $applicantData['lastschool'];
  $highest_grade =    $applicantData['highestgrade'];
  $year_school =      $applicantData['yearschool'];
  $institution_attended =        $applicantData['institution'];
  $degree =                      $applicantData['degree'];
  $year_tertiary =               $applicantData['yeartertiary'];
  $computer_skills =             $applicantData['computer-info'];
  $courses_completed =           $applicantData['courses'];
  $previous_company_summary = "";
  $previous_company_position = "";
  $previous_company_dateFrom = "";
  $previous_company_dateTo = "";
  $history_company_name = "";
  $date_employed = "";
  $previous_position = "";
  $reason_leaving = "";
  $contact_person = "";
  $contact_company = "";
  $performance_area = "";

  if ($applicantData['company'] !== "") {
    for ($i = 0; $i < count($applicantData['company']); $i++) {
      $previous_company_summary .= ' Company_Summary('. ($i+1) .'): '. $applicantData['company'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['position']); $i++) {
      $previous_company_position .= ' Position('. ($i+1) .'): '. $applicantData['position'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['dateFrom']); $i++) {
      $previous_company_dateFrom .= ' DateFrom('. ($i+1) .'): '. $applicantData['dateFrom'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['dateTo']); $i++) {
      $previous_company_dateTo  .= ' DateTo('. ($i+1) .'): '. $applicantData['dateTo'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['companyNameHistory']); $i++) {
      $history_company_name .= ' Company_History('. ($i+1) .'): '. $applicantData['companyNameHistory'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['doe']); $i++) {
      $date_employed .= ' Date_Employed('. ($i+1) .'): '. $applicantData['doe'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['historyPosition']); $i++) {
      $previous_position .= ' Last_Position_Held('. ($i+1) .'): '. $applicantData['historyPosition'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['leaving']); $i++) {
      $reason_leaving .= ' Reason_Leaving('. ($i+1) .'): '. $applicantData['leaving'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['contactPerson']); $i++) {
      $contact_person .= ' Contact_Person('. ($i+1) .'): '. $applicantData['contactPerson'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['contactNumber']); $i++) {
      $contact_company .= ' Contact_Company_Number('. ($i+1) .'): '. $applicantData['contactNumber'][$i] .' ';
    }
    for ($i = 0; $i < count($applicantData['performance']); $i++) {
      $performance_area  .= ' Key_Performance_Area('. ($i+1) .'): '. $applicantData['performance'][$i] .' ';
    }
  }

  $applicantArr = array($vacancy, $fullnames, $surname, $identity,
  $age, $nationality, $gender, $race, $maritial_status, $home_language,
  $other_languages, $address, $email, $contact_number, $driver_license,
  $current_salary, $expected_salary, $current_benifits, $availability,
  $last_school, $highest_grade, $year_school, $institution_attended,
  $degree, $year_tertiary, $computer_skills, $courses_completed,
  $previous_company_summary, $previous_company_position, $previous_company_dateFrom,
  $previous_company_dateTo, $history_company_name, $date_employed,
  $previous_position, $reason_leaving, $contact_person, $contact_company, $performance_area);

  $result = insertApplicant($applicantArr);
  if($result === true) {
    echo '<div class="formSubmitted">'.$applicantArr[1].',<br /><span class="smaller">Your Application Has Been Sent Successfully!</span></div>';
  } else {
    echo '<div class="formSubmitted">Application Unsuccessful - Error Code <br /><span class="smaller">'. $result . ' </span></div>';
  }
}
?>

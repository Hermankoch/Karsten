<?php

  function insertApplicant($applicantArr){
  $dbcon = mysqli_connect('127.0.0.1', 'root', '', 'karsten.co.za_db');

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $stmt = mysqli_prepare($dbcon, "INSERT INTO `karsten_vacancies`
    (`vacancy`, `fullnames`, `surname`, `identity`, `age`, `nationality`,
      `gender`, `race`, `marital_status`, `home_language`, `other_languages`,
      `address`, `email`, `contact_number`, `driver_license`, `current_salary`,
      `expected_salary`, `current_benifits`, `availability`, `last_school`,
      `highest_grade`, `year_school`, `institution_attended`, `degree`,
      `year_tertiary`, `computer_skills`, `courses_completed`, `previous_company_summary`,
      `previous_company_position`, `previous_company_dateFrom`, `previous_company_dateTo`,
      `history_company_name`, `date_employed`, `previous_position`, `reason_leaving`,
      `contact_person`, `contact_company`, `performance_area`)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

      mysqli_stmt_bind_param($stmt, 'ssssssssssssssssssssssssssssssssssssss',
      $applicantArr[0], $applicantArr[1], $applicantArr[2],
      $applicantArr[3], $applicantArr[4], $applicantArr[5],
      $applicantArr[6], $applicantArr[7], $applicantArr[8],
      $applicantArr[9], $applicantArr[10], $applicantArr[11],
      $applicantArr[12], $applicantArr[13], $applicantArr[14],
      $applicantArr[15], $applicantArr[16], $applicantArr[17],
      $applicantArr[18], $applicantArr[19], $applicantArr[20],
      $applicantArr[21], $applicantArr[22], $applicantArr[23],
      $applicantArr[24], $applicantArr[25], $applicantArr[26],
      $applicantArr[27], $applicantArr[28], $applicantArr[29],
      $applicantArr[30], $applicantArr[31], $applicantArr[32],
      $applicantArr[33], $applicantArr[34], $applicantArr[35],
      $applicantArr[36], $applicantArr[37]);

      $success = mysqli_stmt_execute($stmt);

      if($success === false){
	       $success = mysqli_error($dbcon);
	    }

      mysqli_stmt_close($stmt);
      mysqli_close($dbcon);
	    return $success;
  } // insertApplicant();

    function getAllApplicants() {
      $dbcon = mysqli_connect('127.0.0.1', 'root', '', 'karsten.co.za_db');

      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $sqlquery = "SELECT * FROM `karsten_vacancies`";
      $result = mysqli_query($dbcon, $sqlquery);

      $allApplicants = array();

      while (($row = mysqli_fetch_assoc($result)) !== null){
        $allApplicants[] = array (
          'Vacancy' => $row['vacancy'], 'Name' => $row['fullnames'],
          'Surname' => $row['surname'], 'ID_Number' => $row['identity'],
          'Age' => $row['age'], 'Nationality' => $row['nationality'],
          'Gender' => $row['gender'], 'Race' => $row['race'],
          'Marital_Status' => $row['marital_status'], 'Home_Language' => $row['home_language'],
          'Other_Languages' => $row['other_languages'], 'Residential_Address' => $row['address'],
          'Email' => $row['email'], 'Contact_Number' => $row['contact_number'],
          'Driver_License' => $row['driver_license'], 'Current_Salary' => $row['current_salary'],
          'Expected_Salary' => $row['expected_salary'], 'Current_Benefits' => $row['current_benifits'],
          'Availability' => $row['availability'], 'Last_School' => $row['last_school'],
          'Highest_Grade' => $row['highest_grade'], 'Year_School' => $row['year_school'],
          'Institution_Attended' => $row['institution_attended'], 'Qualification' => $row['degree'],
          'Year_Tertiary' => $row['year_tertiary'], 'Computer_Skills' => $row['computer_skills'],
          'Courses_Completed' => $row['courses_completed'], 'Previous_Company_Summary' => $row['previous_company_summary'],
          'Previous_Company_Position' => $row['previous_company_position'], 'Previous_Company_DateFrom' => $row['previous_company_dateFrom'],
          'Previous_Company_DateTo' => $row['previous_company_dateTo'], 'History_Company_Name' => $row['history_company_name'],
          'Date_Employed' => $row['date_employed'], 'Previous_Position' => $row['previous_position'],
          'Reason_Leaving' => $row['reason_leaving'], 'Contact_Person' => $row['contact_person'],
          'Contact_Company_Number' => $row['contact_company'], 'Key_Performance_Area' => $row['performance_area'], );
      }
      return $allApplicants;
    }

    function getVacancy($vacancyName) {

      $dbcon = mysqli_connect('127.0.0.1', 'root', '', 'karsten.co.za_db');
      $text = mysqli_real_escape_string($dbcon, htmlentities($vacancyName));
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $sqlquery = "SELECT * FROM `karsten_vacancies` WHERE `vacancy` = '{$text}'";
      $result = mysqli_query($dbcon, $sqlquery);
      $allApplicants = array();

      while (($row = mysqli_fetch_assoc($result)) !== null){
        $allApplicants[] = array (
          'Vacancy' => $row['vacancy'], 'Name' => $row['fullnames'],
          'Surname' => $row['surname'], 'ID_Number' => $row['identity'],
          'Age' => $row['age'], 'Nationality' => $row['nationality'],
          'Gender' => $row['gender'], 'Race' => $row['race'],
          'Marital_Status' => $row['marital_status'], 'Home_Language' => $row['home_language'],
          'Other_Languages' => $row['other_languages'], 'Residential_Address' => $row['address'],
          'Email' => $row['email'], 'Contact_Number' => $row['contact_number'],
          'Driver_License' => $row['driver_license'], 'Current_Salary' => $row['current_salary'],
          'Expected_Salary' => $row['expected_salary'], 'Current_Benefits' => $row['current_benifits'],
          'Availability' => $row['availability'], 'Last_School' => $row['last_school'],
          'Highest_Grade' => $row['highest_grade'], 'Year_School' => $row['year_school'],
          'Institution_Attended' => $row['institution_attended'], 'Qualification' => $row['degree'],
          'Year_Tertiary' => $row['year_tertiary'], 'Computer_Skills' => $row['computer_skills'],
          'Courses_Completed' => $row['courses_completed'], 'Previous_Company_Summary' => $row['previous_company_summary'],
          'Previous_Company_Position' => $row['previous_company_position'], 'Previous_Company_DateFrom' => $row['previous_company_dateFrom'],
          'Previous_Company_DateTo' => $row['previous_company_dateTo'], 'History_Company_Name' => $row['history_company_name'],
          'Date_Employed' => $row['date_employed'], 'Previous_Position' => $row['previous_position'],
          'Reason_Leaving' => $row['reason_leaving'], 'Contact_Person' => $row['contact_person'],
          'Contact_Company_Number' => $row['contact_company'], 'Key_Performance_Area' => $row['performance_area'], );
      }
      return $allApplicants;
    }

    function getApplicant($applicantId) {

      $dbcon = mysqli_connect('127.0.0.1', 'root', '', 'karsten.co.za_db');
      $text = mysqli_real_escape_string($dbcon, htmlentities($applicantId));
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $sqlquery = "SELECT * FROM `karsten_vacancies` WHERE `identity` = '{$text}'";
      $result = mysqli_query($dbcon, $sqlquery);

      $allApplicants = array();

      while (($row = mysqli_fetch_assoc($result)) !== null){
        $allApplicants[] = array (
          'Vacancy' => $row['vacancy'], 'Name' => $row['fullnames'],
          'Surname' => $row['surname'], 'ID_Number' => $row['identity'],
          'Age' => $row['age'], 'Nationality' => $row['nationality'],
          'Gender' => $row['gender'], 'Race' => $row['race'],
          'Marital_Status' => $row['marital_status'], 'Home_Language' => $row['home_language'],
          'Other_Languages' => $row['other_languages'], 'Residential_Address' => $row['address'],
          'Email' => $row['email'], 'Contact_Number' => $row['contact_number'],
          'Driver_License' => $row['driver_license'], 'Current_Salary' => $row['current_salary'],
          'Expected_Salary' => $row['expected_salary'], 'Current_Benefits' => $row['current_benifits'],
          'Availability' => $row['availability'], 'Last_School' => $row['last_school'],
          'Highest_Grade' => $row['highest_grade'], 'Year_School' => $row['year_school'],
          'Institution_Attended' => $row['institution_attended'], 'Qualification' => $row['degree'],
          'Year_Tertiary' => $row['year_tertiary'], 'Computer_Skills' => $row['computer_skills'],
          'Courses_Completed' => $row['courses_completed'], 'Previous_Company_Summary' => $row['previous_company_summary'],
          'Previous_Company_Position' => $row['previous_company_position'], 'Previous_Company_DateFrom' => $row['previous_company_dateFrom'],
          'Previous_Company_DateTo' => $row['previous_company_dateTo'], 'History_Company_Name' => $row['history_company_name'],
          'Date_Employed' => $row['date_employed'], 'Previous_Position' => $row['previous_position'],
          'Reason_Leaving' => $row['reason_leaving'], 'Contact_Person' => $row['contact_person'],
          'Contact_Company_Number' => $row['contact_company'], 'Key_Performance_Area' => $row['performance_area'], );
      }
      return $allApplicants;
    }
?>

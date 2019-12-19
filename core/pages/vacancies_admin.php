<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../ext/css/vacancies_admin.css">
    <title></title>
  </head>
  <body>
    <div class="page_wrapper">

      <div class="admin_buttons" id="click">
        <div class="inside_admin">

          <div class="title">
            <h1 class="pageTitle">Vacancy Admin</h1>
            <div class="logoimage">
            <a href="../../index.php"><img src="../../content/images/karsten-logo2.png" alt="Karsten Logo"></a>
            </div>
          </div>
          
          <div class="functions">

            <form action="../../core/inc/all_applicants_excel.php" method="post">
            <button class="btn col-1" type="All" value="All"name="All">All Applicants</button>
            </form>

            <form action="../../core/inc/all_applicants_excel.php" method="post">
            <input class="col-2" type="text" name="Vacancy" placeholder="Vacancy Name" required>
            <button class="btn col-2" type="VacancySelected" value="VacancySelected" name="VacancySelected">Obtain by Vacancy</button>
            </form>

            <form action="../../core/inc/all_applicants_excel.php" method="post">
            <input class="col-3" type="text" name="ApplicantID" placeholder="Applicant ID" required>
            <button class="btn col-3" type="Applicant" value="Applicant" name="Applicant">Obtain by ID</button>
            </form>

            <form action="" method="post">
            <input class="col-4" type="text" name="ApplicantID" placeholder="Applicant ID" required>
            <button class="btn col-4" type="print" value="print" name="print">Print ID</button>
            </form>

          </div>

        </div>

      </div>
      <div class="applicant_content">
        <div class="click">
          <a class="btn-show" onclick="hideShowDiv()" href="#"><img src="../../content/images/karsten-logo2.png" alt="Karsten Logo"></a>
        </div>
        <div class="inside_content">
          <?php
          include("../inc/vacancy_functions.php");
          $setting = false;
          if(isset($_POST['print'])) {
            $applicantDetails = getApplicant($_POST['ApplicantID']);
            $setting = true;
          }

          if($setting){
          ?>
          <div class="displayApplicant">
          <h2>Applicant Details:</h2>
          <div class="details">
          <p class="allStyle">Fullnames</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Name'] ?></p>
          <p class="allStyle">Surname</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Surname'] ?></p>
          <p class="allStyle">ID Number</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['ID_Number'] ?></p>
          <p class="allStyle">Age</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Age'] ?></p>
          <p class="allStyle">Nationality</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Nationality'] ?></p>
          <p class="allStyle">Gender</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Gender'] ?></p>
          <p class="allStyle">Race</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Race'] ?></p>
          <p class="allStyle">Marital Status</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Marital_Status'] ?></p>
          <p class="allStyle">Home Language</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Home_Language'] ?></p>
          <p class="allStyle">Other Languages</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Other_Languages'] ?></p>
          <p class="allStyle">Residential Address</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Residential_Address'] ?></p>
          <p class="allStyle">Email</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Email'] ?></p>
          <p class="allStyle">Cellphone</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Contact_Number'] ?></p>
          <p class="allStyle">Driver's License</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Driver_License'] ?></p>
          <p class="allStyle">Current Salary</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Current_Salary'] ?></p>
          <p class="allStyle">Expected Salary</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Expected_Salary'] ?></p>
          <p class="allStyle">Current Benefits</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Current_Benefits'] ?></p>
          <p class="allStyle">Availability</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Availability'] ?></p>
        </div>
        <h3>Secondary Education:</h3>
        <div class="details">
          <p class="allStyle">Last School Attended</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Last_School'] ?></p>
          <p class="allStyle">Highest Grade Passed</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Highest_Grade'] ?></p>
          <p class="allStyle">Year of Completion</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Year_School'] ?></p>
        </div>

        <h3>Tertiary Education:</h3>
        <div class="details">
          <p class="allStyle">Institution Attended</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Institution_Attended'] ?></p>
          <p class="allStyle">Qualifications</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Qualification'] ?></p>
          <p class="allStyle">Year of Completion</p>
          <p class="allStyle"><?php echo $applicantDetails[0]['Year_Tertiary'] ?></p>
        </div>

        <h3>Computer Skills:</h3>
        <div class="courses">
        <p class="allStyle"><?php echo $applicantDetails[0]['Computer_Skills'] ?></p>
        </div>

        <h3>Courses Completed:</h3>
        <div class="courses">
        <p class="allStyle"><?php echo $applicantDetails[0]['Courses_Completed'] ?></p>
        </div>


        <?php
        $comp = $applicantDetails[0]['Previous_Company_Summary'];
        $compStr = '/Company_Summary/';
        preg_match($compStr, $comp, $matches);
        $compCount = count($matches);

        $pos = $applicantDetails[0]['Previous_Company_Position'];
        $df = $applicantDetails[0]['Previous_Company_DateFrom'];
        $dt = $applicantDetails[0]['Previous_Company_DateTo'];
        //html
        echo "<h3>Career Summary:</h3>";
        echo '<div class="careerdetails">';

        for($i = 0; $i <= $compCount; $i++){
          $x = strpos($comp, "Company_Summary");
          $y = strpos($pos, "Position");
          $z = strpos($df, "DateFrom");
          $a = strpos($dt, "DateTo");

          $comp = substr_replace($comp, "", $x, 19);
          $pos = substr_replace($pos, "", $y, 12);
          $df = substr_replace($df, "", $z, 12);
          $dt =  substr_replace($dt, "", $a, 10);

          $x2 = strpos($comp, "Company_Summary");
          $y2 = strpos($pos, "Position");
          $z2 = strpos($df, "DateFrom");
          $a2 = strpos($dt, "DateTo");

          if ($x2 > 0){
          echo '<p class="allStyle">Company</p>';
          echo '<p class="allStyle">'.substr($comp,$x-1,$x2).'</p>';
          echo '<p class="allStyle">Position</p>';
          echo '<p class="allStyle">'.substr($pos,$y-1,$y2).'</p>';
          echo '<p class="allStyle">Date Started</p>';
          echo '<p class="allStyle">'.substr($df,$z-1,$z2).'</p>';
          echo '<p class="allStyle">Date Left</p>';
          echo '<p class="allStyle">'.substr($dt,$a-1,$a2).'</p>';
          echo '<p class="space"></p><p class="space"></p>';
          } else {
          echo '<p class="allStyle">Company</p>';
          echo '<p class="allStyle">'.substr($comp,$x-1,strlen($comp)).'</p>';
          echo '<p class="allStyle">Position</p>';
          echo '<p class="allStyle">'.substr($pos,$y-1,strlen($pos)).'</p>';
          echo '<p class="allStyle">Date Started</p>';
          echo '<p class="allStyle">'.substr($df,$z-1,strlen($df)).'</p>';
          echo '<p class="allStyle">Date Left</p>';
          echo '<p class="allStyle">'.substr($dt,$a-1,strlen($dt)).'</p>';
        }
      }

        echo '</div>';

        echo "<h3>Career History:</h3>";
        echo '<div class="careerdetails">';

        $hisComp = $applicantDetails[0]['History_Company_Name'];
        $doe = $applicantDetails[0]['Date_Employed'];
        $prePos = $applicantDetails[0]['Previous_Position'];
        $left = $applicantDetails[0]['Reason_Leaving'];
        $conPerson = $applicantDetails[0]['Contact_Person'];
        $conNumber = $applicantDetails[0]['Contact_Company_Number'];
        $details = $applicantDetails[0]['Key_Performance_Area'];

        for($i = 0; $i <= $compCount; $i++){

          $d = strpos($hisComp, "Company_History");
          $e = strpos($doe, "Date_Employed");
          $f = strpos($prePos, "Last_Position_Held");
          $g = strpos($left, "Reason_Leaving");
          $h = strpos($conPerson, "Contact_Person");
          $k = strpos($conNumber, "Contact_Company_Number");
          $l = strpos($details, "Key_Performance_Area");

          $hisComp = substr_replace($hisComp, "", $d, 19);
          $doe = substr_replace($doe, "", $e, 17);
          $prePos = substr_replace($prePos, "", $f, 23);
          $left =  substr_replace($left, "", $g, 18);
          $conPerson =  substr_replace($conPerson, "", $h, 18);
          $conNumber =  substr_replace($conNumber, "", $k, 26);
          $details =  substr_replace($details, "", $l, 24);

          $d2 = strpos($hisComp, "Company_History");
          $e2 = strpos($doe, "Date_Employed");
          $f2 = strpos($prePos, "Last_Position_Held");
          $g2 = strpos($left, "Reason_Leaving");
          $h2 = strpos($conPerson, "Contact_Person");
          $k2 = strpos($conNumber, "Contact_Company_Number");
          $l2 = strpos($details, "Key_Performance_Area");

          if ($d2 > 0){
          echo '<p class="allStyle">Company</p>';
          echo '<p class="allStyle">'.substr($hisComp,$d-1,$d2).'</p>';
          echo '<p class="allStyle">Date of Employment</p>';
          echo '<p class="allStyle">'.substr($doe,$e-1,$e2).'</p>';
          echo '<p class="allStyle">Last Position Held</p>';
          echo '<p class="allStyle">'.substr($prePos,$f-1,$f2).'</p>';
          echo '<p class="allStyle">Reason for Leaving</p>';
          echo '<p class="allStyle">'.substr($left,$g-1,$g2).'</p>';
          echo '<p class="allStyle">Contact Person</p>';
          echo '<p class="allStyle">'.substr($conPerson,$h-1,$h2).'</p>';
          echo '<p class="allStyle">Contact Number</p>';
          echo '<p class="allStyle">'.substr($conNumber,$k-1,$k2).'</p>';
          echo '<p class="allStyle">Key Performance Areas</p>';
          echo '<p class="allStyle">'.substr($details,$l-1,$l2).'</p>';
          echo '<p class="space"></p><p class="space"></p>';
        }else {
          echo '<p class="allStyle">Company</p>';
          echo '<p class="allStyle">'.substr($hisComp,$d-1,strlen($hisComp)).'</p>';
          echo '<p class="allStyle">Date of Employment</p>';
          echo '<p class="allStyle">'.substr($doe,$e-1,strlen($doe)).'</p>';
          echo '<p class="allStyle">Last Position Held</p>';
          echo '<p class="allStyle">'.substr($prePos,$f-1,strlen($prePos)).'</p>';
          echo '<p class="allStyle">Reason for Leaving</p>';
          echo '<p class="allStyle">'.substr($left,$g-1,strlen($left)).'</p>';
          echo '<p class="allStyle">Contact Person</p>';
          echo '<p class="allStyle">'.substr($conPerson,$h-1,strlen($conPerson)).'</p>';
          echo '<p class="allStyle">Contact Number</p>';
          echo '<p class="allStyle">'.substr($conNumber,$k-1,strlen($conNumber)).'</p>';
          echo '<p class="allStyle">Key Performance Areas</p>';
          echo '<p class="allStyle">'.substr($details,$l-1,strlen($details)).'</p>';
        }
        }
        echo '</div>';
        ?>

          <?php } ?>
        </div>
      </div>

    </div>
    <script>
    function hideShowDiv(){
      var x = document.getElementById("click");

      if (x.style.display == "none"){
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }

    </script>
  </body>
</html>

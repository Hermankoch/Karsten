<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ext/css/vacancies.css">
    <title>Karsten Vacancies</title>
  </head>
  <body>
    <div class="page_wrapper">
      <div class="page_content">
        <div class="inside_page">

          <div class="title">
            <h1>Karsten Vacancies</h1>
            <div class="logoimage">
            <a href="../../index.php"><img src="../../content/images/karsten-logo2.png" alt="Karsten Logo"></a>
            </div>
          </div>
            <div> <?php
            include("../inc/vacancy_phpCode.php");
             ?> </div>


          <div class="vacancy-wrapper">
            <div class="vacancy">
              <ul>
                <?php
                $dir = "../../content/vacancy";
                $ent = "/";
                $files = preg_grep('~\.(pdf)$~', scandir($dir, 1));
                //echo count($files);
                $countFiles = 0;
                $filesArr = [];
                foreach ($files as $file){
                  $link = $dir.$ent.$file;
                  $filesArr[$countFiles] = substr($file, 0, (strlen($file))- 4);
                  echo '<a href="', $link ,'"><li class="vacancyPDF">', substr($file, 0, (strlen($file))- 4) , '</li></a>';

                  //echo $filesArr[$countFiles];
                  $countFiles++;
                  //echo "<a href=",$link,"><li>",$file,"</a>";
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <!--                   *********************************** -->
      <div class="page_content">
        <div class="inside_page">
          <div class="title">
            <h1>Apply Here</h1>
            <p>
          </div>

          <div class="apply-form">
            <form class="apply" action="" method="post">
              <div class="top">
                <h2>Please choose a vacancy:</h2>
              <select name="vacancy">
                <?php
                for($i = 0; $i < count($filesArr); $i++){
                echo '<option value="',$filesArr[$i],'">',$filesArr[$i],'</option>';
                 }
                 ?>
              </select>
              </div>
              <hr />
              <h2>Your Personal Details:</h2>
              <div class="personal_info">
              <label for="name">Full Names</label><input type="text"                name="name" placeholder="Full Names"          required>
              <label for="surname">Surname</label><input type="text"                name="surname" placeholder="Surname"          required>
              <label for="ID">Identity Number</label><input type="text"             name="id" placeholder="ID Number"             required>
              <label for="Age">Age</label><input type="number" min="18"             name="age" placeholder="Age"                  required>
              <label for="Nationality">Nationality</label><input type="text"        name="nationality" placeholder="RSA / Other"  required>

              <label for="Gender">Gender</label>
              <div class="gender">
                <label>Male</label><input type="radio" value="Male" name="gender[]" checked>
                <label>Female</label><input type="radio" value="Female" name="gender[]">
              </div>
              <label for="Race">Race</label>
              <select name="race">
                <option selected="selected" value="African">African</option>
                <option value="Colourd">Coloured</option>
                <option value="Indian">Indian</option>
                <option value="White">White</option>
              </select>
              <label for="Marriage" >Marital Status</label>
              <select name="status">
                <option selected="selected" value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widow">Widow / Widower</option>
                <option value="Devorced">Divorced</option>
              </select>
              <label for="HomeLanguage">Home Language</label><input type="text"     name="homelang"     placeholder="English, Setswana, Afrikaans etc." required>
              <label for="OtherLanguage">Other Languages</label><input type="text"  name="otherlang"    placeholder="English, Setswana, Afrikaans etc." required>
              <label for="Address">Residential Address</label><input type="text"    name="address"      placeholder="Your Current Home Address" required>
              <label for="Email">E-mail Address</label><input type="email"          name="email"        placeholder="youremail@domain.co.za" required>
              <label for="CellNumber">Cellphone Number</label><input type="contact" name="contact"      placeholder="0810509878" minlength="10" maxlength="10" required>
              <label for="License">Driver's License</label><input type="text"       name="license"      placeholder="License Code A, B, EB etc." required>
              <label for="Salary">Current Salary</label><input type="number"        name="prev_sal"     placeholder="1000" step="500" required>
              <label for="SalaryExpectation">Salary Expectation</label><input       name="expec_sal"    placeholder="1000" step="500" type="number" required>
              <label for="Benefits">Current Benefits</label><input type="text"      name="benifits"     placeholder="Medical / Company car etc." required>
              <label for="Available">Availability <span class="lightText">(When can you start?)</span></label><input type="date"         name="available"    required>
              </div>

                <h2>Education:</h2>


                <div class="education">
                  <h3>Secondary Education:</h3>
                  <div class="education_more">
                  <label for="lastSchool">Last School Attended</label><input type="text"    name="lastschool" placeholder="Name of School" required>
                  <label for="highestgrade">Highest Grade Passed</label><input type="text"  name="highestgrade" placeholder="Grade Passed" required>
                  <label for="yearschool">Year of Completion</label><input type="number"    name="yearschool" value="2019" min="1990" max="2099" step="1" required>
                  </div>

                  <h3>Tertiary Education:</h3>
                  <div class="education_more">


                  <label for="institution">Institution Attended</label><input type="text"               name="institution" placeholder="Institution">
                  <label for="highestgrade">Diploma / Certificate or Degree</label><input type="text"   name="degree" placeholder="Diploma / Degree">
                  <label for="yeartertiary">Year of Completion</label><input type="number" step="1"     name="yeartertiary" placeholder="Year" min="1990" max="2099">
                  </div>
                </div>

                <div class="computer">
                  <h3>Computer Literacy:</h3>
                <input type="text" name="computer-info" placeholder="Describe Your Computer Skills (MS Word etc)">
              </div>

              <div class="computer">
                <h3>Courses Completed:</h3>
              <input type="text" name="courses" placeholder="Name the courses you attended">
            </div>

            <div class="career_heading">
              <h3>Career Summary:</h3>
              <div class="numrows">
              <p>Click button to add previous employers:</p>
              <button class="btn" onclick="myFuntion()" type="button" name="OK">Add Employer</button>
              </div>
              <h3 class="rightAlign">Please list from <span class="mostRecent">most recent:</span></h3>
            </div>

            <div class="career_outside">

            <div id="career" class="career">
              <div>
                <h4>Company</h4>
              </div>
              <div >
                <h4>Position</h4>
              </div>
              <div class="period">
                <div>
                  <h4>From:</h4>
                </div>
                <div>
                  <h4>To:</h4>
                </div>
              </div>
            </div>
          </div>

          <div class="career_heading">
            <h3>Employment History:</h3>
          </div>

          <div class="career_outside" id="employid">

          </div>
            <div class="submitApplication">
              <button class="btn-submit" type="submit" value="submit" name="submit"><span>Submit Your Application</span></button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <script>
        function myFuntion(){
          var y = document.createElement('div');
          var x = document.createElement('div');
          var a = document.createElement('div');
          var b = document.createElement('div');
          var c = document.createElement('div');

          a.className = "period";
          b.className = "employment_history";

          y.innerHTML = "<input type='text' name='company[]' placeholder='Company'>";
          x.innerHTML = "<input type='text' name='position[]' placeholder='Position'>";
          a.innerHTML = "<div><input type='date' name='dateFrom[]' placeholder='From'></div><div><input type='date' name='dateTo[]' placeholder='To'></div>";

          b.innerHTML = "<label for='companyName'>Company Name</label><input type='text' name='companyNameHistory[]' placeholder='Previous Company Name'><label for='doe'>Date of Employment</label><input type='text' name='doe[]' placeholder='Date Started at Company'><label for=lastposition>Last Position Held</label><input type='text' name='historyPosition[]' placeholder='Title of Your Last Position'><label for='leaving'>Reason for Leaving</label><input type='text' name='leaving[]' placeholder='Reason For Leaving'><label for='contactperson'>Contact Person</label><input type='text' name='contactPerson[]' placeholder='Contact for previous company'><label for='contactnumber'>Contact Number</label><input type='text' name='contactNumber[]' placeholder='Telephone Number and/or email'>";

          c.innerHTML = "<h4>Key Performance Areas</h4><textarea id='employtext' name='performance[]' col='20' rows='5' placeholder='  Explain the most important outcomes of the position ex, what must be accomplished and why.'></textarea>"

          document.getElementById("career").appendChild(y);
          document.getElementById("career").appendChild(x);
          document.getElementById("career").appendChild(a);
          //--------------------------------------------------
          document.getElementById("employid").appendChild(b);
          document.getElementById("employid").appendChild(c);
      }
      </script>

    </div>
  </body>

  </html>

<?php
include("vacancy_functions.php");
if (isset($_POST['All'])){
 $data = getAllApplicants();
}
if (isset($_POST['VacancySelected'])){
 $data = getVacancy($_POST['Vacancy']);
}
if (isset($_POST['Applicant'])){
  $data = getApplicant($_POST['ApplicantID']);
}

function cleanData(&$str) {
  $str = preg_replace("/\t/", "\\t", $str);
  $str = preg_replace("/\r?\n/", "\\n", $str);
  if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}
// filename for download
  $filename = "vacancy_data_" . date('Ymd') . ".xls";

//header("Content-Type: text/plain");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

if(!empty($data)){
$flag = false;
foreach($data as $row) {
if(!$flag) {
  // display field/column names as first row
  echo implode("\t", array_keys($row)) . "\r\n";
  $flag = true;
   }
  array_walk($row, __NAMESPACE__ . '\cleanData');
  echo implode("\t", array_values($row)) . "\r\n";
  }
exit;
} else {
  echo "Not Found";
}

?>

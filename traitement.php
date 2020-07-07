<?php
  $birthdate_day=$_POST['birthdate_jour'];
  $birthdate_month=$_POST['birthdate_mois'];
  $birthdate_year=$_POST['birthdate_année'];
  $year=date('Y');
  $month=date('n');
  $day=date('j');
  $calcul_year=$year-$birthdate_year;
  $calcul_month=$mouth-$birthdate_month;
  $calcul_day=$day-$birthdate_day;
if ($calcul_mouth<0) {
    $calcul_year-=1;
    $calcul_month=12+ $calcul_month;
}
if ($calcul_day<0) {
    $calcul_month-=1;
    $calcul_day=30+ $calcul_day;
}
  echo '<p>vous avez '. $calcul_year. ' ans,'.$calcul_month.' mois, '.$calcul_day.' jours. </p>';

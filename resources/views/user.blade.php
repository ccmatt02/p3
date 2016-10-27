@extends('layouts.master')

<?php
$csv_data = file_get_contents('users.csv');
$rows = explode("\n", $csv_data);

$data = array();
foreach ($rows as $row) {
    $data[] = str_getcsv($row);
}

$keys = array_rand($data, $userNum);
?>

@section('title')
Random User Generator
@stop

@section('mainContent')


<center>
  <table>
    <div class="table-heading">
      <tr>
        <th class="table-heading">&nbsp; First name &nbsp;</th>
        <th>&nbsp; Last name&nbsp; </th>
        <?php if($birthday) echo "<th>&nbsp; Birthday &nbsp;</th>\n"; ?>
        <?php if($idnum) echo "<th>&nbsp; ID Number &nbsp;</th>\n"; ?>
        <?php if($address) echo "<th>&nbsp; Address &nbsp;</th>\n"; ?>
      </tr>
    </div>
    <?php
    foreach($keys as $item)
    {
      echo "<tr>";
      echo "<th>&nbsp;".$data[$item][1]."&nbsp;</th>\n";
      echo "<th>&nbsp;".$data[$item][2]."&nbsp;</th>\n";
      if($birthday) echo "<th>&nbsp;".$data[$item][4]."&nbsp;</th>\n";
      if($idnum) echo "<th>&nbsp;".$data[$item][0]."&nbsp;</th>\n";
      if($address) echo "<th>&nbsp;".$data[$item][3]."&nbsp;</th>\n";
      echo "</tr>";
    }
    ?>
  </table>
</center>
@stop

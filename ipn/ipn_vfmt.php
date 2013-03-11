<?php

//file_put_contents('dump.txt', print_r($_POST['payer_email'], true));


file_put_contents('dump.txt', print_r($_POST, true));


$con = mysql_connect("localhost","intranet_vfmt","VoTe!1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("intranet_voteformyteam", $con);


$voter_email = $_POST['payer_email'];


//$email = 'abc';

$sql = "INSERT INTO voters (voter_email) VALUES('".$voter_email."') ";

mysql_query($sql);


$team_id = $_POST['item_number'];
$votes = $_POST['quantity'];

$sql = "INSERT INTO votes (team_id, votes, voter_email) VALUES('".$team_id."','".$votes."','".$voter_email."') ";


file_put_contents('sql.txt', print_r($sql, true));

mysql_query($sql);


 

?>
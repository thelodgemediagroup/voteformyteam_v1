<?php

//file_put_contents('dump.txt', print_r($_POST['payer_email'], true));

file_put_contents('dump.txt', print_r($_POST, true));

    // 1. Make sure the payment status is "Completed" 
    /*
    if ($_POST['payment_status'] != 'Completed') { 
        // simply ignore any IPN that is not completed
        exit(0); 
    }
    */
    // 2. Make sure seller email matches your primary account email.

    // test:  billin_1247464613_biz@ignitei.com
    // test:  seller@paypalsandbox.com

    if ($_POST['receiver_email'] != 'billin_1247464613_biz@ignitei.com') {
        $errmsg .= "'receiver_email' does not match: ";
        $errmsg .= $_POST['receiver_email']."\n";
    }

    else {


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

}
 

?>
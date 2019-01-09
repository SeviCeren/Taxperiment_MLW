<?php
// 		save.php: saves MouselabWEB data in database
//
//       v 1.00betav2 , 14 Aug 2008    
//		updated version v2 using real_escape_string functions to escape quotes 
//		before loading into the database
//
//     (c) 2003-2008 Martijn C. Willemsen and Eric J. Johnson 
//
//    This program is free software; you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation; either version 2 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program; if not, write to the Free Software
//    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

// include('mlwebdb.inc.php');
include ("../../config.php");

if (!isset($id)) {
    $id = -1;
}


if (isset($_POST)) {
    $expname = $_POST['expname'];
    $subject = intval($_POST['subjectID']);
    $condnum =$_POST['condnum'];
    $choice = $_POST['choice'];
    $procdata = $_POST['procdata'];
    $currentRound = intval($_POST['round']);
    $nextURL = $_POST['nextURL'];
    $addvar = "null";
    $adddata = "null";
    $expID = intval($_POST['experimentID']);
    var_dump($subject);
    console_log("Process Data saved successfully!");
}
else {
    echo "Error saving data: No data was found";
    die();
}
$count = 0;



//foreach ($_POST as $key => $value) {
//    echo $count;
//     switch ($key) {
//			case "expname":
//				$expname = $value;
//				break;
//			case "subject":
//				$subject = $value;
//				break;
//			case "condnum":
//				$condnum= $value;
//				break;
//			case "choice":
//				$choice= $value;
//				break;
//			case "procdata":
//				$procdata= mysql_real_escape_string($value);
//				break;
//			case "nextURL":
//				$nextURL= $value;
//				break;
//			case "to_email":
//				// ignore emailaddress
//				break;
//			default:
//			$addvar .= mysql_real_escape_string($key).";";
//			$adddata .= "\"".mysql_real_escape_string($value)."\";" ;
//			}
//        $count = $count + 1;
//    }

    // var_dump($procdata);

$ipstr = $_SERVER['REMOTE_ADDR'];

$table = 'mlweb';

$sqlquery = "INSERT INTO $table (expname, subject, ip, condnum, choice, submitted, round, procdata, addvar, adddata, experiment_id) VALUES ('$expname','$subject','$ipstr', $condnum,'$choice', NOW(), $currentRound, '$procdata', '$addvar', '$adddata', $expID)";
//var_dump($sqlquery);
if (isset($connection)) {
    if ($connection->query($sqlquery)) {
        echo "Inserted data successfully - " . $connection->info;
    }
    else {
        echo "Error inserting data - " . $connection->error;
    }
}

//$result = mysql_query($sqlquery);
//mysql_close();
echo "finished SQL";

/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$nextRound = $currentRound + 1;
header("Location: http://$host/public/include/experiment/index.php?round=$nextRound&mode=1&expid=132&pid=133");
//exit;
?>

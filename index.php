<?php

$username = "root";
$password = "";
$hostname = "127.0.0.1"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");


if (!mysql_select_db("gr_schedule")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$testQuery = "Select * from Tasks";

$result = mysql_query($testQuery);



?>

<html>
<title>G & R Schedule</title>
	<head>
	</head>
		<body>
		<!-- Sunday -->
			<div>
			<!-- Sunday PHP Query -->
			<?php
				$sundayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 1";
				$resultSunday = mysql_query($sundayQuery);
				?>
				<h1>Sunday</h1>
				<ul>
				<?php while($rowSunday = mysql_fetch_assoc($resultSunday)){ ?>
					<li>
					<?php echo $rowSunday['TaskDescription']; ?>
					</li>
				<?php } ?>
					</ul>
			</div>
		<!-- Monday -->
		<?php
				$mondayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 2";
				$resultMonday = mysql_query($mondayQuery);
				?>
			<div>
				<h1>Monday</h1>
				<ul>
				<?php while($rowMonday = mysql_fetch_assoc($resultMonday)){ ?>
					<li>
					<?php echo $rowMonday['TaskDescription']; ?>
					</li>
				<?php } ?>
					</ul>
			</div>
		<!-- Tuesday -->
		<?php
				$tuesdayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 3";
				$resultTuesday = mysql_query($tuesdayQuery);
				?>
			<div>
				<h1>Tuesday</h1>
				<ul><?php while($rowTuesday = mysql_fetch_assoc($resultTuesday)){ ?>
					<li>
					<?php echo $rowTuesday['TaskDescription']; ?>
					</li>
				<?php } ?>
					</ul>
			</div>
		<!-- Wednesday -->
		<?php
				$wednesdayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 4";
				$resultWednesday = mysql_query($wednesdayQuery);
				?>
			<div>
				<h1>Wednesday</h1>
				<ul><?php while($rowWednesday = mysql_fetch_assoc($resultWednesday)){ ?>
					<li>
					<?php echo $rowWednesday['TaskDescription']; ?>
					</li>
				<?php } ?>
					</ul>
			</div>
		<!-- Thursday -->
		<?php
				$thursdayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 5";
				$resultThursday = mysql_query($thursdayQuery);
				?>
			<div>
				<h1>Thursday</h1>
				<ul><?php while($rowThursday = mysql_fetch_assoc($resultThursday)){ ?>
					<li>
					<?php echo $rowThursday['TaskDescription']; ?>
					</li>
				<?php } ?>
					</ul>
			</div>
		<!-- Friday -->
		<?php
				$fridayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 6";
				$resultFriday = mysql_query($fridayQuery);
				?>
			<div>
				<h1>Friday</h1>
				<ul><?php while($rowFriday = mysql_fetch_assoc($resultFriday)){ ?>
					<li>
					<?php echo $rowFriday['TaskDescription']; ?>
					</li>
				<?php } ?>
			</ul>
					
			</div>
		<!-- Saturday -->
		<?php
				$saturdayQuery = "Select TaskDescription from Tasks JOIN DaysOfWeek ON Tasks.`DaysOfWeek_idDaysOfWeek` = DaysOfWeek.`idDaysOfWeek` where idDaysOfWeek = 7";
				$resultSaturday = mysql_query($saturdayQuery);
				?>
			<div>
				<h1>Saturday</h1>
				<ul><?php while($rowSaturday = mysql_fetch_assoc($resultSaturday)){ ?>
					<li>
					<?php echo $rowSaturday['TaskDescription']; ?>
					</li>
				<?php } ?>
					</ul>
			</div>
		</body>
</html>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Request_makeup" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>ID</th> <th>Name</th> <th>Missed Course</th> <th>CT Date</th><th>Reason</th><th>Status</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $name </td>";
        echo "<td> $missed_course </td>";
        echo "<td> $ct_date </td>";
        echo "<td> $reason </td>";
        echo "<td> $r_status </td>";
		echo "<td> <a href = 'cansel_ct.php?id=$id'> Add Request </a> </td>";
		echo "<td> <a href = 'request_ct.php?id=$id&name=$name&missed_course=$missed_course
        &ct_date=$ct_date&reason=$reason&r_status=$r_status'> Cansel Request </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>
<?php

include 'db_conn.php';

set_time_limit(0);

	$sql = "SELECT station_id, station_name, station_status, zeitstempel FROM tbl_andonaktuell ORDER BY station_id" ;
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
    		// output data of each row
		echo '<table cellspacing="10" cellpadding="10">
                <tr>
                    <th>ID</th>
                    <th>Station</th>
                    <th>Status</th>
                    <th>Zeitstempel</th>
                </tr>';
    	while($row=mysqli_fetch_row($result)) {

			echo "<tr>";
  			echo "<td>". $row[0] . "</td>";
  			echo "<td>". $row[1] . "</td>";
						
			if (strpos($row[2], 'Rot') !== false)
			{
				echo "<td bgcolor='#FF0000'>", $row[2] , "</td>";
				
			}			
			elseif (strpos($row[2], 'gelb') !== false)
			{
				echo "<td bgcolor='#FFFF00'>", $row[2] , "</td>";
			}
			elseif (strpos($row[2], 'gruen') !== false)
			{
				echo "<td bgcolor='#00FF40'>", $row[2] , "</td>";
			}
			elseif (strpos($row[2], 'Aus') !== false)
			{
				echo "<td bgcolor='#FFFFFF'>", $row[2] , "</td>";
			}
			else
			{
				echo "<td bgcolor='#FFFFFF'>", $row[2] , "</td>";
			} 
  			echo "<td>". $row[3] . "</td>";
			echo "</tr>";
	    	
	    }

	    	
	   
	} else {
	    echo "0 results";
	}



$conn->close();

?>
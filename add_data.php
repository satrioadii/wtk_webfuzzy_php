<?php
	include("koneksi.php");

	$add = mysqli_query($sambung," INSERT INTO fuzzy SET id=null, jarak='".$_GET["jarak"]."', kecepatan='".$_GET["kecepatan"]."', hasil='".$_GET["hasil"]."' , date_at=CURDATE(), time_at=CURTIME() ");
	 $cek_display=mysqli_query($sambung, "SELECT * from fuzzy"); 
    if(mysqli_num_rows($cek_display)>5) 
    {
      	$delete_display = mysqli_query($sambung, "DELETE FROM fuzzy LIMIT 1 ");
    }
	$query =mysqli_query($sambung, "SELECT hasil FROM fuzzy WHERE id='1' ");
	
		while($row = mysqli_fetch_assoc($query)) 
		{
			echo "#";
			echo $row['hasil'];
			echo "#@";
			// Echo data , equivalent with send data to esp
		}
?>
<?php
	$cn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($cn,"project");
		$q=mysqli_query($cn,"select * from image") or die(mysqli_error());
		while($row=mysqli_fetch_array($q))
		{
			echo '<a href=# ><img height=200 width=200
         src="data:image/jpeg;base64,'.base64_encode( $row[2] ).'"/></a>&nbsp&nbsp&nbsp';
		}
		?>

<?php     ob_start();  ?>
<html>  <head>
<style type="text/css">
body
{  
  background:pink;   
 }
img 
{
  border: 5px solid #ddd;
  border-radius: 10px;
  border-color:black;
  padding: 10px;
 margin : 5px;
  width: 250px;
}
</style></head>
<body>
<form method="post" enctype="multipart/form-data">
<h2>Select Image to upload:<br />
<input type="file" name="image"/>
<input type="submit" name="Upload" value="Upload" /><br />
</form>
<?php
		$cn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($cn,"dwpd");
		$q=mysqli_query($cn,"select * from image") or die(mysqli_error());
		while($row=mysqli_fetch_array($q))
		{
			echo "<a href='https://www.google.com/' ><img height=250 width=350 src='data:image/jpg;base64,".base64_encode( $row[2] )."' /></a>";
		}
	if(isset($_POST["Upload"]))
	{    
        if(getimagesize($_FILES['image']['tmp_name'])==false)
		{
		echo"please select and image";
		}
		else
		{
              $img=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$name=addslashes($_FILES["image"]["name"]);
		//$img=base64_encode($img);
		$cn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($cn,"dwpd");
		$q=mysqli_query($cn,"insert into image values(5 , '".$name."','".$img."')") or die(mysqli_error());
			if($q)
			{   
                   echo"Uploaded..";
			header("location:imageupload.php?id=1");
			}
			else
			{
			echo"Not Uploaded".$_FILES["image"]["error"];
			}
		}
	
	
	}

?>
</body>
</html>

<?php 
/* generate class */
include "generate.php";
/* data from POST */
if(isset($_POST['email']))
{
/* Store values in variable */ 
$email = $_POST['email'];
$domain = $_POST['domain'];

    $email = ltrim($email);
    $domain = ltrim($domain);
    
     $email = rtrim($email);
    $domain = rtrim($domain);
   
    
     $email = stripslashes($email);
    $domain = stripslashes($domain);
	
	
     $email = htmlentities($email);
    $domain = htmlentities($domain);
	
	/*end */

	/* generate function*/
$res = add_dot($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DotMailGenerator - Skreept.ga</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="description" content="DotMailGenerator - Skreept.ga">
  <meta name="keywords" content="">
  <meta name="author" content="Akshay Shetty">

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/true.png" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="pro.php" method="POST">
				<span class="contact1-form-title">
				Email Generated : <?php echo sizeof($res)."<br>"; ?> </span>
			<div class="border border-success " style="overflow: auto ;max-height: 250px; width: 100%;text-align:center" id="div1" >
		<!-- print mail -->
			<?php  
		
		foreach($res as $a)
		{
			echo nl2br($a."".$domain."\n");
		}
		?>
		<!-- end -->
		</div>
		<br>

		<a href="index.php"><button class="btn btn-info" >Generate Again<button></a> &nbsp	
		 <button class="btn btn-success" onclick="CopyToClipboard('div1')">Copy</button> 

			   <BR><BR>
				<strong>DotMailGenerator</strong><br>
				<strong>By - Skreept.ga</strong>
			</form>
			
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>


<!--===============================================================================================-->
<!-- copy script -->
<script>
function CopyToClipboard(containerid) {
if (document.selection) { 
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("copy"); 

} else if (window.getSelection) {
    var range = document.createRange();
     range.selectNode(document.getElementById(containerid));
     window.getSelection().addRange(range);
     document.execCommand("copy");
     alert("text copied") 
}}
</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php


}

else
{
	header("Location:index.php");
}
?>
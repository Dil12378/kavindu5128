
<?php
function _e( $string ) {
	return htmlentities( $string, ENT_QUOTES, 'UTF-8', false );
}





// Check for form submission
if(isset($_POST["submit"])){
    $name   =$_POST["name"];
		$email  =$_POST["email"];
		$massage=$_POST["massage"];


$TO="senavirathne5128@gmail.com";
$mail_subject="my first email box";
$email_body="<b>FROM:</b>{$name}<br>";
$email_body="<b>EMAIL:</b>{$email}<br>";
$email_body="<b>MASSAGE:</b>{$massage}";
$header="From:{$email}\r\nContent-Type: text/html;";
mail($TO,$mail_subject,$email_body,$header);
}
?>

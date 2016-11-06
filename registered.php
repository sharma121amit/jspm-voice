<?php session_start(); 

$name = $_POST['name'];
$roll = $_POST['roll'];
$dob = $_POST['dob'];
$hall = $_POST['hall'];
$block = $_POST['block'];
$floor = $_POST['floor'];
$room = $_POST['room'];
$oldcontact = $_POST['number2'];
$newcontact = $_POST['number'];
$parentcontact = $_POST['number3'];
$parentname = $_POST['parentname'];
$jeeroll = $_POST['jeeroll'];
$jeerank = $_POST['jeerank'];
$eaa = $_POST['eaa'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$blood = $_POST['blood'];
$particulars = $_POST['particulars'];
$hobbies = $_POST['hobbies'];
$registeredby = $_POST['password'];
$payment = $_POST['payment'];
$regby;


/*$hostname = "sql209.xtreemhost.com";
$username = "xth_18591897";
$password = "56834878";
$database = "xth_18591897_voice"; */
switch ($registeredby) {
	case "voicegopal":
		$regby = "Gopal";
		break;
	case "voicesubham":
		$regby = "Subham";
		break;
	case "voiceyogesh":
		$regby = "Yogesh";
		break;
	case "voicesuchendra":
		$regby = "Suchendra";
		break;
	case "voicehitesh":
		$regby = "Hitesh";
		break;
	case "voiceramesh":
		$regby = "Ramesh";
		break;
	case "voicemanoj":
		$regby = "Manoj";
		break;
	case "voicejagdish":
		$regby = "Jagdish";
		break;
	case "voiceosho":
		$regby = "Osho";
		break;
	case "voicelaxmikant":
		$regby = "Laxmikant";
		break;
	case "voiceajit":
		$regby = "Ajit";
		break;
	case "voicesuchendra":
		$regby = "Suchendra";
		break;
	case "voicesanat":
		$regby = "Sanat";
		break;
	case "voicerakesh":
		$regby = "Rakesh";
		break;
	case "voicedileep":
		$regby = "Dileep";
		break;
	case "voicevamsi":
		$regby = "Vamsi";
		break;
	case "voicesrinivas":
		$regby = "Srinivas";
		break;
	case "voicesuryakant":
		$regby = "Suryakant";
		break;
	case "voicesnehasis":
		$regby = "Snehasis";
		break;
	case "voicedeepak":
		$regby = "Deepak";
		break;
	case "voicesabyasachi":
		$regby = "Sabyasachi";
		break;
	case "voiceyeswant":
		$regby = "Yeswant";
		break;
	default:
		$regby = "fail";

}


if($regby!= "fail") {

$hostname = "localhost";
$username = "root";
$password = "";
$database = "voice";


$cxn = mysqli_connect($hostname,$username,$password,$database) or die("failed to connect to mysql:" . mysqli_error());

$query = "INSERT INTO voice2016 (name, roll, dob, hall, block, floor, room, oldcontact, newcontact, parentcontact, parentname, jeeroll, jeerank, eaa, mail, address, blood, particulars, hobbies, registeredby, payment) VALUES ('$name', '$roll', '$dob', '$hall', '$block', '$floor', '$room', '$oldcontact', '$newcontact', '$parentcontact', '$parentname', '$jeeroll', '$jeerank', '$eaa', '$mail', '$address', '$blood', '$particulars', '$hobbies', '$regby', '$payment')";



if(mysqli_query($cxn, $query)) {
	echo "Successs";
	header('Location: register.php?status=success&name='.$name);
	}
	else
		echo "Fail, Please Contact Developer";

mysqli_close($cxn);
}

else
{
	echo '<div style="color:red; font-size:3em; text-align:centre;">Authentication Failed</div><br>';
	echo '<div style="color:blue; text-align:centre;">Press Backspace and Authenticate Yourself</div>';
}
?>
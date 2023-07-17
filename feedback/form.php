<?php

// require'databse.php';

$con = mysqli_connect("localhost", "root", "", "janki");


// if(isset($_POST["submit"]))
// {
$First_name = $_POST['fisrtname'];
$Last_name = $_POST['lastname'];
// $Contact_No = $_POST['contact'];
$Email = $_POST['email'];
$Rating = $_POST['rating'];
$CommentText = $_POST['comments'];
// }

$query = "INSERT INTO `feedbackform` (`First_Name`, `Last_name`, `Email`, `Rating`, `CommentText`) VALUES ('$First_name','$Last_name','$Email','$Rating','$CommentText')";

mysqli_query($con,$query);

echo "Thank You For Your Feedback";

?>
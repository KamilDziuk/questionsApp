
<!-- Sending variables to the database start -->
<?php
require_once 'config/config.php';
$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}

$id = $_POST['id'];
$questionsEN = $_POST['questionsEN'];
$answerTheQuestionEN = $_POST['answerTheQuestionEN'];
$sql = "INSERT INTO questionsApp (id, answerTheQuestionEN, questionsEN ) 
VALUES ( '$id', '$answerTheQuestionEN', '$questionsEN')";
if ($conn->query($sql) === TRUE) {
echo "Adding questions";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- Sending variables to the database end -->

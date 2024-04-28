<!-- Retrieving variables from the database start -->
<?php
require_once 'config/config.php';
$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM questionsApp";
$result = $conn->query($sql);
$questionsApp = array();
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$questionsApp[] = $row;
}
}
$conn->close();
?>
<!-- Retrieving variables from the database end -->
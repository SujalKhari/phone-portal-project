<?php
$servername = "localhost";
$database = "signin";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$sql = "INSERT INTO users (name, email, password ) VALUES ('$name', '$email' , '$password' )";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php header("Location: index.html "); ?>

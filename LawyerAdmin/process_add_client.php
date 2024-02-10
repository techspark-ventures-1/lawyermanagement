<?php
// Assuming this PHP code is part of your larger PHP file or is included.

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lawyermanagement"; // Change this to the correct database name

$conn = new mysqli($servername, $username, $password, $dbname); // Use $dbname here

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $m_name = mysqli_real_escape_string($conn, $_POST['m_name']);
    $l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $alternate_no = mysqli_real_escape_string($conn, $_POST['alternate_no']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city_id = mysqli_real_escape_string($conn, $_POST['city_id']);
    $reference_name = mysqli_real_escape_string($conn, $_POST['reference_name']);
    $reference_mobile = mysqli_real_escape_string($conn, $_POST['reference_mobile']);
    $lawyer_id = mysqli_real_escape_string($conn, $_POST['lawyer_id']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO lclient (f_name, m_name, l_name, gender, email, mobile, alternate_no, address, country, state, city_id, reference_name, reference_mobile, lawyer_id )
            VALUES ('$f_name', '$m_name', '$l_name', '$gender', '$email', '$mobile', '$alternate_no', '$address', '$country', '$state', '$city_id', '$reference_name', '$reference_mobile', '$lawyer_id')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Record inserted successfully');
            window.location.href = 'client.php';
          </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
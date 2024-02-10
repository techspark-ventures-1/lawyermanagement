<?php
// Include your database connection code here or in a separate file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lawyermanagement";

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $task_subject = $_POST['task_subject'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status1 = $_POST['status1'];
    $priority = $_POST['priority'];
    $related = $_POST['related'];
    $task_description = $_POST['task_description'];

    // Perform SQL query to insert data into the database
    $query = "INSERT INTO task (task_subject,start_date, end_date, status1, priority, related, task_description)
              VALUES ('$task_subject', '$start_date', '$end_date', '$status1', '$priority', '$related', '$task_description')";

    if ($mysqli->query($query) === TRUE) {
        echo "<script>
        alert('Task added successfully');
        window.location.href = 'task.php';
      </script>";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

// Close the database connection
$mysqli->close();
?>

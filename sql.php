<?php
// Database connection parameters
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT id, name, email FROM your_table_name";
$result = $conn->query($sql);

// Initialize an array to store the results
$data = array();

if ($result->num_rows > 0) {
    // Fetch each row and add it to the data array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();

// Encode the array into JSON
echo json_encode($data);
?>

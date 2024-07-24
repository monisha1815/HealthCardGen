<?php
include 'db.php';

$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Medical Card Details</h2>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Age: " . $row['age'] . "<br>";
    echo "Gender: " . $row['gender'] . "<br>";
    echo "Medical Conditions: " . $row['medical_conditions'] . "<br>";
    echo "Card Number: " . $row['card_number'] . "<br>";
} else {
    echo "No user found with the given email.";
}

$conn->close();
?>

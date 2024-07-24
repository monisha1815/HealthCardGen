<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$medical_conditions = $_POST['medical_conditions'];
$card_number = uniqid('CARD_', true);

$sql = "INSERT INTO users (name, email, age, gender, medical_conditions, card_number)
        VALUES ('$name', '$email', '$age', '$gender', '$medical_conditions', '$card_number')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. Your medical card number is: " . $card_number;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

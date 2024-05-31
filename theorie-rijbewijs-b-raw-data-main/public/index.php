<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!-- Dit is een tijdelijke PHP command -->

<?php
// Read the JSON file
$jsonFile = 'data.json';
$jsonData = file_get_contents($jsonFile);

// Decode the JSON data into a PHP array
$data = json_decode($jsonData, true);

// Check if decoding was successful
if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Failed to decode JSON data: " . json_last_error_msg();
    exit;
}

// Access the JSON data
$name = $data['name'];
$age = $data['age'];
$email = $data['email'];

// Output the JSON data
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Email: " . $email . "<br>";
?>
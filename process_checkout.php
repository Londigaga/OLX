<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Validate and sanitize data (you can add more validation as needed)

    // Save data to clients.txt file
    $file = 'clients.txt';
    $current = file_get_contents($file);
    $current .= "Phone: " . $phone . "\nAddress: " . $address . "\n\n";
    file_put_contents($file, $current);

    // Response to client (optional)
    echo "Data saved successfully.";
}
?>

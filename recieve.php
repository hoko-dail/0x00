<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the text input and sanitize it
    $inputData = htmlspecialchars($_POST['data']);
    
    // Prepare the new data to be added
    $newData = "\n$inputData\n---------------------------------------\n";

    // Define the file where data will be saved
    $file = "البيانات.txt";

    // Read the existing content of the file (if it exists)
    $oldData = file_exists($file) ? file_get_contents($file) : '';

    // Prepend the new data to the existing content
    $updatedData = $newData . $oldData;

    // Write the updated content back to the file
    if (file_put_contents($file, $updatedData)) {
        echo "تم الارسال";
    } else {
        echo "Error saving data.";
    }
} else {
    echo "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارسل النص</title>
</head>
<body style="text-align: center;">
    
</body>
</html>

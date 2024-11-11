<?php
// Include database connection file
include './db/db.php';  // Update the path according to your project structure

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $contact_no = $conn->real_escape_string($_POST['contact_no']);
    $prefer_location = $conn->real_escape_string($_POST['prefer_location']);
    $date = $conn->real_escape_string($_POST['date']);
    $plan = $conn->real_escape_string($_POST['plan']);
    $message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

    // SQL query to insert data into the inquiries table
    $query = "INSERT INTO inquiries (full_name, email, address, contact_no, prefer_location, date, plan, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Prepare statement
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ssssssss", $full_name, $email, $address, $contact_no, $prefer_location, $date, $plan, $message);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Your inquiry has been submitted successfully.');</script>";
            // Redirect to a thank-you page or back to the form page
            echo "<script>window.location.href = 'Prices.php';</script>";
        } else {
            echo "<script>alert('There was a problem submitting your inquiry. Please try again.');</script>";
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
} else {
    // Redirect user back to form if the form wasn't submitted
    echo "<script>window.location.href = 'Prices.php';</script>";
}
?>

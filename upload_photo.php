<?php


include './db/db.php'; // Adjust this path as needed

$targetDir = "uploads/"; // Directory where files will be saved

// Ensure the uploads directory exists
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image_name = $conn->real_escape_string($_POST['image_name']);
    $category = $conn->real_escape_string($_POST['category']);
    $file = $_FILES['file'];

    // Generate a unique filename to prevent file overwrite
    $filename = uniqid() . '-' . basename($file["name"]);
    $targetFilePath = $targetDir . $filename;

    // Allowed file types
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

    if (in_array(strtolower($fileType), $allowTypes)) {
        // Move uploaded file to target directory
        if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
            // Insert file info into the database
            $stmt = $conn->prepare("INSERT INTO photos (image_name, file_path, category) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $image_name, $targetFilePath, $category);

            if ($stmt->execute()) {
                echo "<script>alert('The file has been uploaded successfully.');</script>";
                echo "<script>window.location.href = 'admin.php';</script>";
            } else {
                echo "<script>alert('File upload failed, please try again.');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    } else {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed.');</script>";
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
}

$conn->close();

?>

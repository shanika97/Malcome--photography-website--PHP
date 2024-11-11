<?php




include './db/db.php'; // Adjust the path to your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['photo_id'])) {
    $photoId = $conn->real_escape_string($_POST['photo_id']);

    // First, retrieve the file path from the database
    $stmt = $conn->prepare("SELECT file_path FROM photos WHERE id = ?");
    $stmt->bind_param("i", $photoId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $filePath = $row['file_path'];

        // Attempt to delete the file from the server
        if (file_exists($filePath)) {
            unlink($filePath); // Delete the file
        }

        // Now, delete the entry from the database
        $stmt = $conn->prepare("DELETE FROM photos WHERE id = ?");
        $stmt->bind_param("i", $photoId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Photo deleted successfully.');</script>";
        } else {
            echo "<script>alert('Error deleting photo.');</script>";
        }
    } else {
        echo "<script>alert('Photo not found.');</script>";
    }

    $stmt->close();
    $conn->close();
    
    // Redirect back to the admin page
    header('Location: admin.php');
    exit;
} else {
    // Redirect them to the admin page if the request method is not POST or photo_id is not set
    header('Location: admin.php');
    exit;
}
?>


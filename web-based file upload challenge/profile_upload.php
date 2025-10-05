<?php
// profile_upload.php — intentionally vulnerable

$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if ($fileType != "jpg") {
    echo "Only JPG files are allowed!";
    exit;
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "Profile picture uploaded successfully!";
    echo "<br>Your file has been saved.";
    
} else {
    echo "Upload failed.";
}
?>

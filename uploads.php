<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// upload.php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUploads"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo '<div class="error-msg">Sorry, file already exists.</div>';
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUploads"]["size"] > 5000000000000000000) { // 5MB limit
    echo '<div class="error-msg">Sorry, your file is too large.</div>';
    $uploadOk = 0;
}

// Allow certain file formats
$allowed_types = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx", "ppt", "pptx");
if (!in_array($fileType, $allowed_types)) {
    echo '<div class="error-msg">Sorry, only JPG, JPEG, PNG, GIF, PDF, DOC, DOCX, PPT, and PPTX files are allowed.</div>';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<div class="error-msg">Sorry, your file was not uploaded. <a href="user.html">Go back to upload page</a></div>';
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUploads"]["tmp_name"], $target_file)) {
        echo '<div class="success-msg">The file '. htmlspecialchars(basename($_FILES["fileToUploads"]["name"])). ' has been uploaded. <a href="homepage.php">Go back to homepage</a></div>';
    } else {
        echo '<div class="error-msg">Sorry, there was an error uploading your file.</div>';
    }
}
?>

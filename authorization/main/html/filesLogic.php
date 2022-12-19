<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'filemanagement');
 
$sql = "SELECT * FROM html";
$result = mysqli_query($conn, $sql);
 
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['save'])) { 

    $filename = $_FILES['myfile']['name'];
 
    $destination = 'uploads-html/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
 
    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { 
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO html(name, size, downloads) VALUES('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded.";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
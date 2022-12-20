<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'filemanagement');
 
$sql = "SELECT * FROM python";
$result = mysqli_query($conn, $sql);
 
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['save'])) { 

    $filename = $_FILES['myfile']['name'];
 
    $destination = 'uploads-python/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
 
    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { 
        echo "File too large!";
    } else {

        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO python(name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded.";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
 
    $sql = "SELECT * FROM python WHERE id=$id";
    $result = mysqli_query($conn, $sql);
 
    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads-python/' . $file['name'];
 
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads-python/' . $file['name']));
        readfile('uploads-python/' . $file['name']);
 
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE python SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }
 
}
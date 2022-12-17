<html>

<body>

    <?php
    $filename = $_FILES['file']['name'];
    $location = "upload-html/" .$filename;

    if ( move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
        echo '<p> Your file uploaded </p>' ;
    } else {
        echo '<b> Error uploading file </b>' ;  
    }

?>

</body>

</html>
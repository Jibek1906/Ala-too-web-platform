<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Download files</title>
    <link rel="stylesheet" href="python.css" type="text/css" />
</head>

<body>

    <table>
        <thead>
            <th>ID</th>
            <th>Filename</th>
            <th>size (in mb)</th>
            <th>Downloads</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
                <td><?php echo $file['ID']; ?></td>
                <td><?php echo $file['name']; ?></td>
                <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                <td><?php echo $file['downloads']; ?></td>
                <td><a href="downloads.php?file_id=<?php echo $file['ID'] ?>">Download</a></td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>

</body>

</html>
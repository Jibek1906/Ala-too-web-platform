<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Java</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="java.css" type="text/css" />
</head>

<body>
    <header>
        <h1><a href="../../main.html"><img id="back" src="../img/back.png" width="90px" height="90px"></a><img
                class="img-c" src="../img/java.png" width="150px" height="150px">Java</h1>
    </header>
    <div id="body">

        <div class="tasks">
            <h2><strong>Deadlines</strong>
            </h2>
            <div id="deadline">

                <div id="square">
                    <h3 class="first">Task1</h3>
                    <?php

                   $exp_date = "2023/01/15";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">15.01.2023</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task2</h3>
                    <?php

                   $exp_date = "2022/09/30";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">30.09.2022</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task3</h3>
                    <?php

                   $exp_date = "2022/11/24";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">24.11.2022</h5>
                </div>

            </div>

        </div>

        <div class="square" id="square-first">
            <h2><strong>Task 1</strong></h2>
            <h3>Java program to check whether the given number is even or odd<br>
                <h4><strong>Example of Output:</strong></h4>
                <h3 class="text">
                    Enter a number:<br>
                    24<br>
                    The number is even<br>
                    -----------------------------------<br>
                    Enter a number:<br>
                    33<br>
                    The number is odd
                </h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="java.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>15.01.2023</strong></h5>

        </div>

        <div class="square" id="square-second">
            <h2><strong>Task 2</strong></h2>
            <h3>Java program to find out the average of a set of integers<br>
                <h4><strong>Example of Output:</strong></h4>
                <h3 class="text">
                    Enter the count of numbers:<br>
                    5<br>
                    Enter an integer:<br>
                    3<br>
                    Enter an integer:<br>
                    8<br>
                    Enter an integer:<br>
                    6<br>
                    Enter an integer:<br>
                    7<br>
                    Enter an integer:<br>
                    4<br>
                    The average is: 5.6
                </h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="java.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>30.09.2022</strong></h5>

        </div>

        <div class="square" id="square-third">
            <h2><strong>Task 3</strong></h2>
            <h3>Java program to display all the multiples of 3 within the range 10 to 50<br>
                <h4><strong>Expected Output:</strong></h4>
                <h3 class="text">
                    12<br>
                    15<br>
                    18<br>
                    21<br>
                    24<br>
                    27<br>
                    30<br>
                    33<br>
                    36<br>
                    39<br>
                    42<br>
                    45<br>
                    48<br>
                </h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="java.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>24.11.2022</strong></h5>

        </div>

    </div>

</body>

</html>
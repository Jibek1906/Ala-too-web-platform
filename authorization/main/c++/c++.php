<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>C++</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="c.css" type="text/css" />
</head>

<body>
    <header>
        <h1><a href="../../main.html"><img id="back" src="../img/back.png" width="90px" height="90px"></a><img
                class="img-c" src="../img/c++.png" width="150px" height="150px"></h1>
    </header>
    <div id="body">

        <div class="tasks">
            <h2><strong>Deadlines</strong></h2>
            <div id="deadline">

                <div id="square">
                    <h3 class="first">Task1</h3>
                    <?php

                   $exp_date = "2022/12/03";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">03.12.2022</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task2</h3> <?php

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
                    <h3 class="first">Task3</h3>
                    <?php

                   $exp_date = "2022/10/21";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">21.10.2022</h5>
                </div>

            </div>

        </div>

        <div class="square" id="square-first">
            <h2><strong>Task 1</strong></h2>
            <h3>Write a program in C++ to print the sum of two numbers.<br>
                <h4><strong>Sample Output</strong></h4>
                <h3 class="text">Display arithmetic operations with mixed data type :<br>
                    -----------------------------------<br>
                    The sum of 29 and 30 is : 59<br></h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="c++.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>03.12.2022</strong></h5>
        </div>

        <div class="square" id="square-second">
            <h2><strong>Task 2</strong></h2>
            <h3>Write a program in C++ to display various type or arithmetic operation using mixed data type.<br>
                <h4><strong>Sample Output</strong></h4>
                <h3 class="text">Display arithmetic operations with mixed data type :<br>
                    -----------------------------------<br>
                    5 + 7 = 12<br>
                    3.7 + 8.0 = 11.7<br>
                    5 + 8.0 = 13.0<br>
                    5 - 7 = -2<br>
                    3.7 - 8.0 = -4.3<br>
                    5 - 8.0 = -3.0<br>
                    5 * 7 = 35<br>
                    3.7 * 8.0 = 29.6<br>
                    5 * 8.0 = 40.0<br>
                    5 / 7 = 0<br>
                    3.7 / 8.0 = 0.5<br>
                    5 / 8.0 = 0.6

                    <h4 class="req"><strong>Requests</strong></h4>
                    <h3 class="req-text">Code should be:<br>
                        valid<br>
                        clean<br>
                        no comments please</h3>
                </h3>
                <div class="row">
                    <form action="c++.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>15.01.2023</strong></h5>
        </div>

        <div class="square" id="square-third">
            <h2><strong>Task 3</strong></h2>
            <h3> Write a program in C++ to display the operation of pre and post increment and decrement.<br>
                <h4><strong>Sample Output</strong></h4>
                <h3 class="text">Display the operation of pre and post increment and decrement :<br>
                    -----------------------------------<br>

                    The number is : 57<br>
                    After post increment by 1 the number is : 58<br>
                    After pre increment by 1 the number is : 59<br>
                    After increasing by 1 the number is : 60<br>
                    After post decrement by 1 the number is : 59<br>
                    After pre decrement by 1 the number is : 58<br>
                    After decreasing by 1 the number is : 57

                    <h4 class="req"><strong>Requests</strong></h4>
                    <h3 class="req-text">Code should be:<br>
                        valid<br>
                        clean<br>
                        no comments please</h3>
                </h3>
                <div class="row">
                    <form action="c++.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>21.10.2022</strong></h5>
        </div>

    </div>

</body>
<script src="c.js"></script>

</html>
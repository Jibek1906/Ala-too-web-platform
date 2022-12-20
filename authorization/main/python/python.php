<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Python</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="python.css" type="text/css" />
</head>

<body>
    <header>
        <h1><a href="../../main.html"><img id="back" src="../img/back.png" width="90px" height="90px"></a><img
                class="img-c" src="../img/python.webp" width="150px" height="150px">Python</h1>
    </header>
    <div id="body">
        <div class="tasks">
            <h2><strong>Deadlines</strong></h2>
            <div id="deadline">

                <div id="square">
                    <h3 class="first">Task1</h3>
                    <?php

                   $exp_date = "2022/11/29";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">29.11.2022</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task2</h3> <?php

                   $exp_date = "2023/11/01";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">01.11.23</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task3</h3>
                    <?php

                   $exp_date = "2023/02/28";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">28.02.2023</h5>
                </div>

            </div>

        </div>

        <div class="square" id="square-first">
            <h2><strong>Task 1</strong></h2>
            <h3>Write a program to iterate the first 10 numbers and in each iteration, print the sum of the current and
                previous number.<br>
                <h4><strong>Expected Output:</strong></h4>
                <h3 class="text">Printing current and previous number sum in a range(10)<br>
                    -----------------------------------<br>
                    Current Number 0 Previous Number 0 Sum: 0<br>
                    Current Number 1 Previous Number 0 Sum: 1<br>
                    Current Number 2 Previous Number 1 Sum: 3<br>
                    Current Number 3 Previous Number 2 Sum: 5<br>
                    Current Number 4 Previous Number 3 Sum: 7<br>
                    Current Number 5 Previous Number 4 Sum: 9<br>
                    Current Number 6 Previous Number 5 Sum: 11<br>
                    Current Number 7 Previous Number 6 Sum: 13<br>
                    Current Number 8 Previous Number 7 Sum: 15<br>
                    Current Number 9 Previous Number 8 Sum: 17
                </h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="python.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>29.11.2022</strong></h5>
        </div>

        <div class="square" id="square-second">
            <h2><strong>Task 2</strong></h2>
            <h3>Write a program to accept a string from the user and display characters that are present at an even
                index number.<br>
                For example, str = "pynative" so you should display ‘p’, ‘n’, ‘t’, ‘v’.
                <h4><strong>Expected Output:</strong></h4>
                <h3 class="text">Orginal String is pynative<br>
                    Printing only even index chars<br>
                    -----------------------------------<br>
                    p<br>
                    n<br>
                    t<br>
                    v
                </h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="python.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>01.11.23</strong></h5>
        </div>

        <div class="square" id="square-third">
            <h2><strong>Task 3</strong></h2>
            <h3>Write a function to return True if the first and last number of a given list is same. If numbers are
                different then return False.<br>
                Given:<br>
                <h3 id="given">numbers_x = [10, 20, 30, 40, 10]<br>
                    numbers_y = [75, 65, 35, 75, 30]</h3>
                <h4><strong>Expected Output:</strong></h4>
                <h3 class="text">
                    Given list: [10, 20, 30, 40, 10]<br>
                    result is True<br>
                    -----------------------------------<br>
                    numbers_y = [75, 65, 35, 75, 30]<br>
                    result is False
                </h3>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">Code should be:<br>
                    valid<br>
                    clean<br>
                    no comments please</h3>

                <div class="row">
                    <form action="python.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>28.02.2023</strong></h5>
        </div>

    </div>

</body>

</html>
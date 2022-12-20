<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" type="text/css" />
</head>

<body>
    <main class="main">
        <header>
            <section class="up">
                <span>
                    <h1><img id="logo" src="img/logo.png" width="150" height="150"> Ala-Too International University
                        <a href="https://instagram.com/alatoo.edu.kg?igshid=NDk5N2NlZjQ="><img src="img/instagram.png"
                                width="50" height="50"></a>
                        <a
                            href="https://api.whatsapp.com/send/?phone=996555820000&text=Здравствуйте!%0A%0A&type=phone_number&app_absent=0"><img
                                src="img/what's-app.png" width="50" height="50"></a>
                        <a href="https://www.facebook.com/AlaTooInternationalUniversity/"><img src="img/facebook.png"
                                width="50" height="50"></a>
                    </h1>
                </span>
            </section>
            <div id="log-reg"><a href="login.php"><img src="img/login.png" width="50" height="50"></a>
                <a href="register.php"><img src="img/add.png" width="50" height="50"></a>
            </div>
        </header>
        <h2>Courses:</h2>

        <div class="projects">
            <div class="java">
                <form action="main/java/java.php" method="post">
                    <div class="j-square" id="square">
                        <img class="course" src="img/java.png" width="60" height="60"><br>
                        <h3><strong>Java</strong></h3>
                        <h3 id="btn-text">Created by: Azamat K.</h3>
                        <button id="j-btn" type="Submit" class="courses-btn">
                            <strong>Open</strong>
                        </button>
                    </div>
                </form>
            </div>

            <div class="python">
                <form action="main/python/python.php" method="post">
                    <div id="square">
                        <img class="course" src="img/p.png" width="60" height="60"><br>
                        <h3 class="p"><strong>Python</strong></h3>
                        <h3 id="btn-text">Created by: Javlon K.</h3>
                        <button id="p-btn" type="Submit" class="courses-btn">
                            <strong>Open</strong>
                        </button>
                    </div>
                </form>
            </div>

            <div class="c++">
                <form action="main/c++/c++.php" method="post">
                    <div id="square">
                        <img class="course" src="img/c.png" width="60" height="60"><br>
                        <h3 class="html"><strong>C++</strong></h3>
                        <h3 id="btn-text">Created by: Abdulaev N.</h3>
                        <button id="c-plus-btn" type="Submit" class="courses-btn">
                            <strong>Open</strong>
                        </button>
                    </div>
                </form>
            </div>

            <div class="html">
                <form action="main/html/html.php" method="post">
                    <div id="square">
                        <img class="course" src="img/html.png" width="60" height="60"><br>
                        <h3 class="html"><strong>HTML</strong></h3>
                        <h3 class="btn-text" id="btn-text">Created by: Isaev R.</h3>
                        <button id="html-btn" type="Submit" class="courses-btn">
                            <strong>Open</strong>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div id="proposed-projects">
            <h2>Proposed projects:</h2>
            <h3 class="pr">Java</h3>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/1.png" width="60px" height="60px"><strong>15.01.2023</strong></h5>
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

            </div>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/2.png" width="60px" height="60px"><strong>30.09.2022</strong></h5>
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

            </div>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/3.png" width="60px" height="60px"><strong>24.11.2022</strong></h5>
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

            </div>

            <h3 class="pr">Python</h3>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/1.png" width="60px" height="60px"><strong>29.11.2022</strong></h5>
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

            </div>
            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/2.png" width="60px" height="60px"><strong>01.11.23</strong></h5>
                <?php

                   $exp_date = "2023/11/01";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>

            </div>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/3.png" width="60px" height="60px"><strong>28.02.2023</strong></h5>
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

            </div>

            <h3 class="pr">C++</h3>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/1.png" width="60px" height="60px"><strong>03.12.2022</strong></h5>
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


            </div>
            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/2.png" width="60px" height="60px"><strong>16.01.2023</strong></h5>
                <?php

                $exp_date = "2023/01/16";
                $today_date = date('Y/m/d');

                $exp = strtotime($exp_date);
                $td = strtotime($today_date);

                if ($td > $exp) {
                echo "TIME IS OVER";
                } else {
                echo "YOU CAN STILL DO IT";
                }?>

            </div>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/3.png" width="60px" height="60px"><strong>21.10.2022</strong></h5>
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

            </div>
            <h3 class="pr">HTML</h3>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/1.png" width="60px" height="60px"><strong>23.02.2023</strong></h5>
                <?php

                   $exp_date = "2023/02/23";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>

            </div>
            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/2.png" width="60px" height="60px"><strong>08.01.2023</strong></h5>
                <?php

                $exp_date = "2023/01/08";
                $today_date = date('Y/m/d');

                $exp = strtotime($exp_date);
                $td = strtotime($today_date);

                if ($td > $exp) {
                echo "TIME IS OVER";
                } else {
                echo "YOU CAN STILL DO IT";
                }?>

            </div>

            <div id="deadlines">
                <h5 id="numbers"></h5><img src="main/img/3.png" width="60px" height="60px"><strong>31.10.2022</strong></h5>
                <?php

                $exp_date = "2022/10/31";
                $today_date = date('Y/m/d');

                $exp = strtotime($exp_date);
                $td = strtotime($today_date);

                if ($td > $exp) {
                echo "TIME IS OVER";
                } else {
                echo "YOU CAN STILL DO IT";
                }?>

            </div> 

        </div>

    </main>
    <footer class="footer">© 2020 Ala-Too International University</footer>
</body>

</html>
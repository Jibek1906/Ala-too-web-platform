<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="html.css" type="text/css" />
</head>

<body>
    <header>
        <h1><a href="../../main.php"><img id="back" src="../img/back.png" width="90px" height="90px"></a><img
                class="img-c" src="../img/html.png" width="150px" height="150px">HTML</h1>
    </header>
    <div id="body">

        <div class="tasks">
            <h2><strong>Deadlines</strong></h2>
            <div id="deadline">

                <div id="square">
                    <h3 class="first">Task1</h3>
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
                    <h5 id="numbers">23.02.2023</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task2</h3> <?php

                   $exp_date = "2023/01/08";
                   $today_date = date('Y/m/d');

                   $exp = strtotime($exp_date);
                   $td = strtotime($today_date);

                   if ($td > $exp) {
                   echo "TIME IS OVER";
                   } else {
                   echo "YOU CAN STILL DO IT";
                   }?>
                    <h5 id="numbers">08.01.2023</h5>
                </div>

                <div id="square">
                    <h3 class="first">Task3</h3>
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
                    <h5 id="numbers">31.10.2022</h5>
                </div>

            </div>

        </div>

        <div class="square" id="square-first">
            <h2><strong>Task 1</strong></h2>
            <h3><strong>A Tribute Page</strong><br>
                <h3 class="text">
                    Make a webpage writing about that person adding his/her image.
                    On the top of the webpage, add the image and name of the person and below that give layout for the
                    rest of the details.
                    You can use paragraphs, lists, links, images with CSS to give it a descent look. Add a suitable
                    background color and font style on your webpage.
                    Most of the parts you can make using HTML but to give it a better look using a bit of CSS.
                </h3>
                <h4><strong>You can take help from the link given below</strong></h4>
                <h3>click on picture</h3>
                <a id="example" href="https://codepen.io/freeCodeCamp/pen/zNqgVx"><img src="../img/ex1.png" width="90px"
                        height="90px"></a>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">
                    <strong>Github</strong><br>
                    readme.md<br>
                    with a link to web app<br>
                    description<br>
                    some screenshots<br>
                    commit history (should start from more than 1 week before submission)<br>
                    <strong>Code should be:</strong><br>
                    valid<br>
                    clean<br>
                    no comments please
                </h3>

                <div class="row">
                    <form action="html.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>23.02.2023</strong></h5>
        </div>

        <div class="square" id="square-second">
            <h2><strong>Task 2</strong></h2>
            <h3><strong>Restaurant Website</strong><br>
                <h3 class="text">
                    Showcase your solid knowledge of HTML and CSS creating a beautiful webpage for a restaurant.
                    Making a layout for a restaurant will be a bit complicated than previous project examples.
                    You will be aligning the different food items and drinks using a CSS layout grid.
                    You will be adding prices, images and you need to give it a beautiful look and feel as well using
                    the proper combination of colors, font-style and images.
                    You can add pictures gallery for different food items, you can also add sliding images for a better
                    look.
                    Add links for redirection to internal pages. Make it responsive setting a viewport, using media
                    queries and grid.
                </h3>
                <h4><strong>You can take help from the link given below</strong></h4>
                <h3>click on picture</h3>
                <a id="example"
                    href="https://www.geeksforgeeks.org/design-a-webpage-for-online-food-delivery-system-using-html-and-css/"><img
                        src="../img/ex2.png" width="90px" height="90px"></a>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">
                    <strong>Github</strong><br>
                    readme.md<br>
                    with a link to web app<br>
                    description<br>
                    some screenshots<br>
                    commit history (should start from more than 1 week before submission)<br>
                    <strong>Code should be:</strong><br>
                    valid<br>
                    clean<br>
                    no comments please
                </h3>

                <div class="row">
                    <form action="html.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>08.01.2023</strong></h5>
        </div>

        <div class="square" id="square-third">
            <h2><strong>Task 3</strong></h2>
            <h3><strong>Restaurant Website</strong><br>
                <h3 class="text">
                    Use flexbox and media queries for responsiveness.
                    Add the company name with an image (related to photography) on the top (landing page).
                    Below that showcase your work adding multiple images.
                    Mention the contact detail of the photographer at the bottom (footer).
                    Add a button to view your work.
                    This button will directly bring you down to the images section.
                    You need to take care of the margin, padding, color combination, font-size, font-style, image size
                    and styling of a button.
                </h3>
                <h4><strong>You can take help from the link given below</strong></h4>
                <h3>click on picture</h3>
                <a id="example"
                    href="https://www.geeksforgeeks.org/how-to-make-image-gallery-using-html-css-and-javascript/"><img
                        src="../img/ex3.png" width="90px" height="90px"></a>
                <h4 class="req"><strong>Requests</strong></h4>
                <h3 class="req-text">
                    <strong>Github</strong><br>
                    readme.md<br>
                    with a link to web app<br>
                    description<br>
                    some screenshots<br>
                    commit history (should start from more than 1 week before submission)<br>
                    <strong>Code should be:</strong><br>
                    valid<br>
                    clean<br>
                    no comments please
                </h3>

                <div class="row">
                    <form action="html.php" method="post" enctype="multipart/form-data">
                        <h4 class="req"><strong>Upload File</h4>
                        <h5>Your file extension must be .zip, .pdf or .png </h5>
                        <input type="file" name="myfile"> <br>
                        <button type="submit" name="save">upload</button>
                    </form>
                </div>

                <h4><strong>Deadline</strong></h4>
                <h5><strong>31.10.2022</strong></h5>
        </div>

    </div>

</body>

</html>
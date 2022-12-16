<html>
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/c++.css">
</head>
<body>
   <div class="container">
      <h1>Tasks C++</h1>

        <section><div class="row">
           <form class="animated fadeIn" id="form">
           <div class="">
            <div class="s12 l12 m12">

                <input type="text" id="name" placeholder="Name">
                <input type="text" id="subject" placeholder="Subject">
                <input type="date" id="myDate">
            </div>
               
               <div class="row">
                <div class="s10 l10 m10">
                <textarea id="description" placeholder="Requests" cols="30" rows="10" onClick="myObj.textSelect(this)"> Requests</textarea>
                               

            </div>
            </div>
            <div class="col s12 l12 m12">
                <div class="btn" onclick="submitInfo()">Submit</div>
                <div class="btn" onclick="myObj.hide()">Close</div>
            </div>

            </div>
            </form>
        </div></section>
       <div class="btn" onClick="myObj.show()" id="show">New Task</div>
<!--       TASK LIST-->
  
          <div class="row" style="text-align:center;" id="myTasks">
             

              
          </div>    
   </div>
   <script src="c++.js"></script>



    </body>
</html>
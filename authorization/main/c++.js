
var myObj= {
    //выбирает функцию TextArea 
    textSelect: function(){
        document.getElementById('description').select();
    },

    hide: function() {
    document.getElementById("form").style.display = "none";
    document.getElementById("show").style.display = "inline-block";

},
//Показывает Form Method
    show:function(){

    document.getElementById("form").style.display = "block";
    document.getElementById("show").style.display = "none";
    document.getElementById('myDate').valueAsDate = new Date();
    },
    //Удаляет задания
    removeTask: function () {
    var id = this.getAttribute('id');
    var myTasks = returnToDo();
    myTasks.splice(id, 1);
    localStorage.setItem('myData', JSON.stringify(myTasks));
    document.getElementById('myTasks').innerHTML = '';
    showMyTasks();
    console.log('delete');

}
};
//Проверяет есть ли информация в LocalStorage
function returnToDo(){
    var myTasks = [];
    var myTasksTemp = localStorage.getItem('myData');
    if(myTasksTemp != null){
        myTasks = JSON.parse(myTasksTemp);
    }
    return myTasks;
}
//Класс благодаря, которуму создаются задния.
function Task(){
    this.name = document.getElementById('name').value;
    this.subject = document.getElementById('subject').value;
    this.date = document.getElementById('myDate').value;
    this.describe = document.getElementById('description').value;
}
//Втавляет task properties в HTML
function newTask(x,y,z,o){
    document.getElementById('myTasks').innerHTML +=
        '<div class="col l3 m4 s12 animated zoomIn"> <h4>'+z+  ':</h1>'+
        '<p>'+y+'</p>' +
        '<p>By: '+x+'</p>' +
        '<p>Due: ' +o +'</p>'+
        '<div class="btn red" >Delete</div>'+
    '</div>'
}
//Берет все элемменты в Array.
function showMyTasks(){
    var myTasks = returnToDo();
    document.getElementById('myTasks').innerHTML = '';
    for(var i=0;i<myTasks.length;i++){
        newTask(
            myTasks[i].name,
            myTasks[i].describe,
            myTasks[i].subject,
            myTasks[i].date
        );
    }
    var button = document.getElementsByClassName('red');
    for (var j = 0; j < button.length; j++) {
        button[j].addEventListener('click', myObj.removeTask);
        console.log(button[j].addEventListener('click', myObj.removeTask));

    }
}
function submitInfo(){
    var myTasks = returnToDo();
    myTasks.push(new Task);
    localStorage.setItem('myData',JSON.stringify(myTasks));
    showMyTasks();
    myObj.hide();
}
showMyTasks();
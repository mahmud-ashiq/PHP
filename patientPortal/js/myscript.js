
function validateForm() {
  var sex = document.getElementById("sex").value;
  if (!sex) {
    alert("Gender must be selected");
    return false;
  }
  var address = document.getElementById("address").value;
  if (address == "") {
    //alert("asdf");
    document.getElementById("add").innerHTML = "Address must be filled";
    return false;
  }
  var age = document.getElementById("age").value;
  age = parseInt(age);
  if (age < 18 || age > 100) {
    alert("Age must be between 18 to 100");
    return false;
  }
  var postal = document.getElementById("postal").value;
  if (isNaN(postal) || postal.length != 5) {
    alert("postal code must be 5 digit number (JS validation)");
    return false;
  }
}
function loadDoc() {
  var str = document.getElementById("name").value;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    document.getElementById("demo").innerHTML = this.responseText;
  }
<<<<<<< HEAD
  xhttp.open("GET", "../controller/test.php?name="+str);
=======
  xhttp.open("GET", "../controller/test.php?name=" + str);
>>>>>>> 786f61c1a96bec76688ec17b7af72ebfd0c3e24b
  xhttp.send();
}

function loadUser() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
<<<<<<< HEAD
    document.getElementById("txt").innerHTML = this.responseText;
=======
    document.getElementById("txt").innerHTML =
      this.responseText;
>>>>>>> 786f61c1a96bec76688ec17b7af72ebfd0c3e24b
  }
  xhttp.open("GET", "../controller/searchUser.php");
  xhttp.send();
}

<<<<<<< HEAD
function loadData(){
  var str;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "https://jsonplaceholder.typicode.com/users", true);
  xhttp.onload = function(){
    var data = JSON.parse(xhttp.responseText);
     data.forEach(function(user ){
      document.getElementById("output").innerHTML +=  "Name: "+user.name + "<br> ID: "+ user.id +"<br> Username: "+user.username+ "<br><br>" ;
     });
    
    
  }
  xhttp.send();
}


=======
>>>>>>> 786f61c1a96bec76688ec17b7af72ebfd0c3e24b





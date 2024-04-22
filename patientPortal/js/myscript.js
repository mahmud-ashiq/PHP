   
    function validateForm() {
        var sex = document.getElementById("sex").value;
        if(!sex)
        {
            alert("Gender must be selected");
            return false;
        }
        var address = document.getElementById("address").value;
        if(address == "")
        {
            //alert("asdf");
            document.getElementById("add").innerHTML = "Address must be filled";
            return false;
        }
        var age = document.getElementById("age").value;
        age = parseInt(age);
        if(age < 18 || age > 100 )
        {
            alert("Age must be between 18 to 100");
            return false;
        }
        var postal = document.getElementById("postal").value;
        if(isNaN(postal) || postal.length != 5)
        {
            alert("postal code must be 5 digit number (JS validation)");
            return false;
        }

        function loadDoc(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("add").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "http://localhost/WT/patientPortal/view/login.php", true);
            xhttp.send();
        }
        
        

    }

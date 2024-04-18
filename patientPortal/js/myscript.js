<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        if(name == "")
        {
            alert("Name must be filled (JS validation)");
            return false;
        }
    }
 </script>
function myFunction(){
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
    var data = document.getElementById("data");
  
    // If the checkbox is checked, display the output text
    if(checkBox.checked == true){
        text.style.display = "block";
        data.style.display = "none";
    }else{
        text.style.display = "none";
        data.style.display = "block";
    }
}
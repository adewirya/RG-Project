function ValidasiCV(){ 
    var fileInput = document.getElementById('file'); 
    var filePath = fileInput.value; 
  
    // Allowing file type 
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i; 
      
    if (!allowedExtensions.exec(filePath)) { 
        alert('Invalid file type'); 
        fileInput.value = ''; 
        return false; 
    }  
} 

function ValidasiFC(){ 
    var fileInput = document.getElementById('fc'); 
    var filePath = fileInput.value; 
  
    // Allowing file type 
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i; 
      
    if (!allowedExtensions.exec(filePath)) { 
        alert('Invalid file type'); 
        fileInput.value = ''; 
        return false; 
    }  
} 

function ValidasiIDC(){ 
    var fileInput = document.getElementById('idc'); 
    var filePath = fileInput.value; 
  
    // Allowing file type 
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf)$/i; 
      
    if (!allowedExtensions.exec(filePath)) { 
        alert('Invalid file type'); 
        fileInput.value = ''; 
        return false; 
    }  
} 
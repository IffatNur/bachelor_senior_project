function validate(){
    var name= document.getElementById("name");
    var mail= document.getElementById("mail");
    var phone= document.getElementById("phone");
    var address= document.getElementById("address");

    if(name.value=="" || mail.value=="" || phone.value=="" || address.value=="")
    {
        alert("Please fillup the form completely");
        return false; 
    }
    else{
       
    }
    function phone(){

    if(phone.length<11 || phone.length>11)
    {
        alert("Invalid Number");
        return false;
    }
    else{
        
    }
}
}

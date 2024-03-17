function viewPwd(){
    let x = document.getElementById('pwd')  ;
    if (x.type === "password"){
        x.type = "text";
    }else if(x.type === "text"){
        x.type = "password";
    }
}
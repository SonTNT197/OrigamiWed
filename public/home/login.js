document.querySelector('.img__btn').addEventListener('click', function() {
    document.querySelector('.cont').classList.toggle('s--signup');
  });
  
  function Signup(){
    let username = document.getElementById("username").value
    let useremail = document.getElementById("useremail").value
    let userpassword = document.getElementById("userpassword").value
    let confirmpass = document.getElementById("confirmpass").value
    let flag = true
    if(username=""){
      document.querySelector("#mess1").innerHTML = "Not valid"
      flag = false
    }
    else if(!Checkname(username)){
      document.querySelector("#mess1").innerHTML = "Wrong name"
      flag = false
    }
    else if(useremail=""){
      document.querySelector("#mess2").innerHTML = "Not valid"
    }
    else if(!Checkemail(useremail)){
      document.querySelector("#mess2").innerHTML = "Email is not true"
      flag = false
    }
    else if(userpassword=""){
      document.querySelector("#mess3").innerHTML = "Not valid"
      flag = false
    }
    else if(!Checkpass(userpassword)){
      document.querySelector("#mess3").innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character"
    }
    else if(confirmpass=""){
      document.querySelector("#mess4").innerHTML = "Not valid"
      flag = false
    }
    else if(userpassword != confirmpass){
      document.querySelector("#mess4").innerHTML = "It's not matched with password"
      flag = false
    }
  }
  function Checkemail(v){
    let regemail =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    return regemail.test(v)
    }
  function Checkpass(v){
    let regpass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
    return regpass.test(v)
  }
  function Checkname(v){
    let regname = /^[a-zA-Z]/
    return regname.test(v)
  }
  
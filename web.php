```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login & Register Form</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;

    /* Forest Background */
    background:url('https://images.unsplash.com/photo-1448375240586-882707db888b?auto=format&fit=crop&w=1600&q=80')
              center/cover no-repeat;
}

.container{
    width:380px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(15px);
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 32px rgba(0,0,0,0.2);
    color:white;
}

h2{
    text-align:center;
    margin-bottom:20px;
}

.form{
    display:none;
    animation:fade 0.4s ease;
}

.form.active{
    display:block;
}

@keyframes fade{
    from{
        opacity:0;
        transform:translateY(10px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.input-group{
    margin-bottom:15px;
}

.input-group input{
    width:100%;
    padding:12px;
    border:none;
    outline:none;
    border-radius:10px;
    font-size:15px;
}

.password-box{
    display:flex;
    gap:5px;
}

.password-box input{
    flex:1;
}

.password-box button{
    border:none;
    border-radius:10px;
    padding:0 12px;
    cursor:pointer;
}

.btn{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#ffffff;
    color:#333;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#f0f0f0;
}

.switch{
    text-align:center;
    margin-top:15px;
}

.switch a{
    color:#fff;
    font-weight:bold;
    text-decoration:none;
}

.message{
    text-align:center;
    margin-top:10px;
    font-weight:bold;
}

@media(max-width:450px){
    .container{
        width:90%;
    }
}
</style>
</head>

<body>

<div class="container">

    <!-- LOGIN FORM -->
    <div class="form active" id="loginForm">
        <h2>Login</h2>

        <div class="input-group">
            <input type="email" id="loginEmail"
                   placeholder="Email Address">
        </div>

        <div class="input-group">
            <div class="password-box">
                <input type="password" id="loginPassword"
                       placeholder="Password">
                <button type="button"
                        onclick="togglePassword('loginPassword',this)">
                    Show
                </button>
            </div>
        </div>

        <button class="btn" onclick="loginUser()">
            Login
        </button>

        <div id="loginMsg" class="message"></div>

        <div class="switch">
            Don't have an account?
            <a href="#" onclick="showRegister()">
                Register
            </a>
        </div>
    </div>

    <!-- REGISTER FORM -->
    <div class="form" id="registerForm">
        <h2>Create Account</h2>

        <div class="input-group">
            <input type="text" id="name"
                   placeholder="Full Name">
        </div>

        <div class="input-group">
            <input type="email" id="registerEmail"
                   placeholder="Email Address">
        </div>

        <div class="input-group">
            <div class="password-box">
                <input type="password" id="registerPassword"
                       placeholder="Password">
                <button type="button"
                        onclick="togglePassword('registerPassword',this)">
                    Show
                </button>
            </div>
        </div>

        <button class="btn" onclick="registerUser()">
            Register
        </button>

        <div id="registerMsg" class="message"></div>

        <div class="switch">
            Already have an account?
            <a href="#" onclick="showLogin()">
                Login
            </a>
        </div>
    </div>

</div>

<script>

function showRegister(){
    document.getElementById("loginForm")
        .classList.remove("active");

    document.getElementById("registerForm")
        .classList.add("active");
}

function showLogin(){
    document.getElementById("registerForm")
        .classList.remove("active");

    document.getElementById("loginForm")
        .classList.add("active");
}

function togglePassword(id,btn){

    const input = document.getElementById(id);

    if(input.type === "password"){
        input.type = "text";
        btn.innerText = "Hide";
    }else{
        input.type = "password";
        btn.innerText = "Show";
    }
}

function registerUser(){

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("registerEmail").value.trim();
    let password = document.getElementById("registerPassword").value.trim();

    let msg = document.getElementById("registerMsg");

    if(name==="" || email==="" || password===""){
        msg.style.color="yellow";
        msg.innerText="Please fill all fields.";
        return;
    }

    localStorage.setItem("email",email);
    localStorage.setItem("password",password);

    msg.style.color="lightgreen";
    msg.innerText="Registration Successful!";

    setTimeout(()=>{
        showLogin();
    },1000);
}

function loginUser(){

    let email = document.getElementById("loginEmail").value.trim();
    let password = document.getElementById("loginPassword").value.trim();

    let savedEmail = localStorage.getItem("email");
    let savedPassword = localStorage.getItem("password");

    let msg = document.getElementById("loginMsg");

    if(email === savedEmail &&
       password === savedPassword){

        msg.style.color="lightgreen";
        msg.innerText="Login Successful!";
    }
    else{
        msg.style.color="yellow";
        msg.innerText="Invalid Email or Password";
    }
}
</script>

</body>
</html>
```

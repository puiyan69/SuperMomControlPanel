<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<style>
body {
    background-color : #273953;
}
.email-div, .password-div{
    margin-right : 30px;
}
.email-div input, .password-div input{
    outline: 0;
    color : white;
    height : 45px;
    border-width: 0 0 2px;
    border-color : grey;
    background-color : #273A53; 
}
#email, #password {
    border-radius : 10px;
}
#email:focus, #password:focus {
    border-color : #8EFAA3;
}
#logInButton{
    width : 425px;
    font-weight : bold;
    height : 45px;
    background-color : #53A5A7;
    margin-right : 30px;
    border:none;
}
#logo{
    height : 200px;
    width : 200px;
    margin-top : 30px;
}
.verticalLine {
  border-left: 1px solid grey;
}
.form-group{
    display : flex;
    margin-top : 60px;
    justify-content:center;
}
#title{
    color : white;
    text-align : center;
    font-family : Comic Sans MS;
}
#footer{
    color : grey;
}
.submit-div{
    margin-top : 50px;
}


</style>
<body>
    <div align="center">
    <figure>
        <img src="image\AppLogo.png" class="rounded float-left" id="logo" alt="...">
    </figure>
    <h3 id="title">Super Mom Control Panel</h3>
    </div>
    <div class="verticalLine"></div>
    <form>
        <div class="form-group" align=center>
            <div class="input-group mb-3 email-div">
                <input type="text" class="form-control" id="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
            </span>
            </div>
             <br>
            <div class="input-group mb-3 password-div">
                <input type="password" class="form-control" id="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <br>
        </div>
        <div class="submit-div" align=center>
            <button type="submit" class="btn btn-primary" id="logInButton">SIGN IN</button>
        </div>
    </form>
    </div>
    <footer class="footer navbar-fixed-bottom"id="footer">&copy; Copyright 2019 Chow Pui Yan</footer>
</body>
</html>
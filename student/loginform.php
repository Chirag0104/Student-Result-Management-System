<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    
</head>
<body>

    


    <div id="student-form">
        <div id="student-heading">
            <h1>Student Login</h1>
        </div>
        <div id="form-section">
            <form action="confirmlogin.php" method="post" id="student-login-form">
                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email" placeholder="Email address" required><br>
                <label for="password">Password :</label><br>
                <input type="password" id="password" name="password" placeholder="Your password" required  onkeyup='check();' />
                <i class="bi bi-eye-slash" id="togglePassword-3"></i><br>
                <span id='message-3'></span><br><br>
                <?php 

        session_start();

        if(isset($_SESSION['error'])) { ?>
            <div class="alert">
              Warning! Wrong email address and password.
            </div>
          <?php } ?>
                <input id="button" type="submit" value="Submit">
                <a href="signup.php">Create new account</a>

                

            </form>
        </div>
    </div>
    <script>
        // FUNCTION TO TOGGLE EYE BUTTON IN STUDENT LOGIN PAGE

const togglePassword3 = document.querySelector('#togglePassword-3');
const password3 = document.querySelector('#password');
togglePassword3.addEventListener('click', function (e) {
    const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
    password3.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});


var check = function() {
    document.getElementById('button').disabled = true;
            len = document.getElementById('password').value;
            if(len.length<8){
                document.getElementById('message-3').innerHTML = '**Password length must be atleast 8 characters';
                document.getElementById('message-3').style.color = 'red';
                document.getElementById('message-3').style.fontSize = 'small';
                document.getElementById('message-3').style.marginBottom = '200px';
                document.getElementById('button').disabled = true;
            }
            else if(len.length>15){
                document.getElementById("message-3").innerHTML = '**Password length must be less than 15 characters';
                document.getElementById('message-3').style.color = 'red';
                document.getElementById('message-3').style.fontSize = 'small';
                document.getElementById('message-3').style.marginLeft = '10px';
                document.getElementById('button').disabled = true;
            }
            else{
                document.getElementById('message-3').innerHTML = ' ';
                document.getElementById('button').disabled = false;
            }
    
}

    </script>
</body>
</html>

<?php unset($_SESSION['error']); ?>
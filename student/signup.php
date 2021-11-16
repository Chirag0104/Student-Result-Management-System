<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
<?php
      include '../db/conn.php';

    session_start();

    if(isset($_POST['submit'])){
        $Random=$_POST['randcheck'];
        if($Random==$_SESSION['rand']){
        $Name=$_POST['name'];
        $Class=$_POST['class'];
        $Roll_No=$_POST['rollno'];
        $Email=$_POST['email-2'];
        $Password=$_POST['password'];
        $isSuccess = $crud->insert_data($Name,$Class,$Roll_No,$Email,$Password);}

    }
  ?>
      
    <div id="signup-form-1">
        <div id="signup-heading-1">
            <h1>Sign Up</h1>
        </div>
        <div id="form-section-signup">
            <form action="signup.php" method="POST" id="student-signup-form">
            <?php
                $rand=rand();
                $_SESSION['rand']=$rand;
            ?>
                <label for="name">Full Name :</label><br>
                <input type="name" id="name" name="name" placeholder="Enter your full Name" required><br>
                <input type="hidden" value="<?php echo $rand; ?>" name='randcheck' />
                <label for="class">Class :</label><br>
                <input type="number"  id="class" name="class" placeholder="Enter your Class" required max="12"><br>
                <label for="Roll Number">Roll Number</label><br>
                <input type="number" id="rollno" name="rollno" placeholder="Enter your Roll Number" required><br>
                <label for="email">Email :</label><br>
                <input type="email" id="email-2" name="email-2" placeholder="Email address" required><br>
                <label for="password">Password :<br></label>
                <input type="password" id="password-2" name="password" placeholder="Type a password" required="" onkeyup='check();' onkeyup='check();' />
                <i class="bi bi-eye-slash" id="togglePassword"></i><br>
                <label for="password">Confirm Password :<br></label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-type your password" required onkeyup='check();' />
                <i class="bi bi-eye-slash" id="togglePassword-2"></i>
                <span id='message'></span><br>
                <span id='message-2'></span><br>
                <input id="button-3" type="submit" value="Submit" name="submit">
            </form>
            Already have an account ?
            <a href="loginform.html">Login</a>
        </div>
    </div>
    <script>

     

// FUNCTION TO TOGGLE EYE BUTTON IN STUDENT SIGNUP PAGE


const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password-2');
togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});


const togglePassword2 = document.querySelector('#togglePassword-2');
const password2 = document.querySelector('#confirm_password');
togglePassword2.addEventListener('click', function (e) {
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    this.classList.toggle('bi-eye');
});


// PASSWORD MATCH IN STUDENT SIGN-UP PAGE

var check = function() {
    if (document.getElementById('password-2').value ==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = ' ';
        
            len = document.getElementById('password-2').value;
            if(len.length<8){
                document.getElementById('message-2').innerHTML = '**Password length must be atleast 8 characters';
                document.getElementById('message-2').style.color = 'red';
                document.getElementById('message-2').style.fontSize = 'small';
                document.getElementById('message-2').style.marginLeft = '10px';
            }
            else if(len.length>15){
                document.getElementById("message-2").innerHTML = '**Password length must be less than 15 characters';
                document.getElementById('message-2').style.color = 'red';
                document.getElementById('message-2').style.fontSize = 'small';
                document.getElementById('message-2').style.marginLeft = '10px';
            }
            else{
                document.getElementById('message-2').innerHTML = ' ';
                document.getElementById('button-3').disabled = false;
            }
    } else {
        document.getElementById('button-3').disabled = true;
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').style.fontSize = 'small';
        document.getElementById('message').style.marginLeft = '10px';
        document.getElementById('message').innerHTML = '<br>Password and Confirm password does not match';
    }
}


    </script>   
</body>
</html>
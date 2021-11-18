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
            <h1>Admin Login</h1>
        </div>
        <div id="form-section">
            <form action="#" method="post" id="student-login-form">
                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email" placeholder="Email address" required><br>
                <label for="password">Password :</label><br>
                <input type="password" id="password" name="password" placeholder="Your password" required />
                <i class="bi bi-eye-slash" id="togglePassword-3"></i><br>
                <input id="button" type="submit" value="Submit">
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


    </script>
</body>
</html>
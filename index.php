<!DOCTYPE html>
<html>
<head>
    <title>Login and Signup Form</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <h1>Login and Signup Form</h1>

    <button onclick="openSignupForm()">Signup/Register</button>

    <div id="loginForm" class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>

    <div id="signupForm" class="form-popup">
        <div class="form-container">
            <h2>Signup/Register</h2>
            <form action="signup.php" method="post">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Signup">
            </form>
            <span class="close" onclick="closeSignupForm()">&times;</span>
        </div>
    </div>

    <script>
        // Function to open the signup form
        function openSignupForm() {
            document.getElementById("signupForm").style.display = "block";
        }

        // Function to close the signup form
        function closeSignupForm() {
            document.getElementById("signupForm").style.display = "none";
        }
    </script>
</body>
</html>
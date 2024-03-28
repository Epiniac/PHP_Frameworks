<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HETIC login</title>
</head>
<body>  
    <div class="loginDiv" id="loginDiv">
        <h1>Login</h1>
        <div class="inputField">
            <input type="text" id="username" required aria-invalid="false" />
            <label>Email or Username</label>
        </div>
        <div class="inputField">
            <input type="password" id="password" required aria-invalid="false"/>
            <label>Password</label>
        </div>
        <div class="error" aria-errormessage="Invalid username or password." id="error">
        <p>You have entered an invalid username or password.</p>
    </div>
        <button id="login" class="login">Login</button>
    </div>

    <div id="success" class="modal" aria-modal="true">
    <div class="modal-content">
        <h1>Login Successful!</h1>
            <span>Welcome to my website!</span>
            <span id="smile">😁</span>
        <button id="close" class="login" onclick="closeModal()">Logout</button>
    </div>
    </div>
</body>
</html>
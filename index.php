
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andhra Pradesh</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>


    <div class="container">
        <a href="index.php" class="home-btn"><i class="fas fa-home"></i> Home</a>
        <img id="main-logo" src="./images/ap-logo.png" alt="logo" style="height: 150px;">

        <h1>Government of Andhra Pradesh</h1>
        <h1>ANDHRA PRADESH ENVIRONMENT MANAGEMENT CORPORATION LTD</h1>
        <p>Environment , Forests , Science & Technology Department</p>
        <hr>

        <h4>Generator/Receiver & Transport Login</h4>


        <div class="form-container">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <i id="user" class="fa fa-user icon" aria-hidden="true"></i>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <i id="key" class="fa fa-key icon" aria-hidden="true"></i>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="enter-captcha">Enter Captcha</label>
                <input type="text" id="enter-captcha" name="enter-captcha" required>
            </div>
            <div class="form-group">
                <label for="display-captcha">Captcha</label>
                <input type="text" id="display-captcha" disabled value="j7h5As"/>
                 <span class="create-captcha"></span>
                <button class="captcha-refresh"  >
                    <i for="captcha-code" class="fa fa-refresh" aria-hidden="true" value="j7h5As" style="text-align: center;"></i>
                </button>
            </div>

            <button type="login" class="login-btn">LOGIN</button>
            <p class="pass-btn">Don't Have An Account? / <a href="forgot_password.php">Forgot Password</a></p>
        </form>
    </div>

    <div class="links">
        <div class="box">
            <i class="icon">🏭</i>
            <div class="title">Generator/Receiver</div>
            <a class="button" href="register_generator.php">Register Here</a>
            <a  href="forgot_password_generator.php">Forgot Password?</a>
            <!-- <p>Forgot Password?</p> -->
        </div>
        <div class="box">
            <i class="icon">🚚</i>
            <div class="title">Transporter</div>
            <a class="button" href="register_transporter.php">Register Here</a>
            <a href="forgot_password_transporter.php">Forgot Password?</a>
        </div>
        <div class="box">
            <i class="icon">🌋</i>
            <div class="title">Fly Ash Receiver</div>
            <a class="button" href="register_flyash.php">Register Here</a>
            <a href="forgot_password_flyash.php">Forgot Password?</a>
        </div>

    </div>
    </div>
</body>

</html>
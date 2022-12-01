<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<header>
    <?php include 'header.php';?>
</header>
<body>
    <div class="main">
        <div class="content">
            <div class="content_description">
                <h1>Donations save lives</h1>
                <hr>
                <p>Team Description of the Website</p>
                <form action="">
                    <input type="submit"class="submit_button"value="Read More"></input>
                </form>
            </div>
            <div class="content_signup">
                <div class="signup_form">
                    <form action="">
                        <div class="signup_form-heading">
                            <h2>Sign In</h2>
                        </div>
                        <div class="signup_form-items">
                            <div class="signup_form-item">
                                <label for="new_username">Username</label>
                                <input type="text" name="new_username" id="new_username"placeholder="Enter your username">
                            </div>
                            <div class="signup_form-item">
                                <label for="new_password">Password</label>
                                <input type="password" name="new_password" id="new_password"placeholder="Enter your password">
                            </div>
                            <div class="signup_form-button">
                                <input class="button-primary"value='Login'></input>
                            </div>
                            <div class="signup_form-footer">
                                <div class="signup_form-footer-item">
                                    <p>Don't have an account yet? <a href="signup_citizen.html">Sign Up</a></p>
                                </div>
                                <div class="signup_form-footer-item item-pass">
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
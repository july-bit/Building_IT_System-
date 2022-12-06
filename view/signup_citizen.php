<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/signup.css">
    <link rel="stylesheet" href="/assets/css/buttons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="content">
            <div class="content-form">
                <div class="content-form_img--citizen">
                    <img src="/assets/img/donator_bg.png" alt="">
                    <div class="content-form_img--text">
                        <div class="form_text--main">
                            <h2>Welcome donators to the Blood mana community!</h2>
                            <hr>
                            <p>Your donations spread love, hope, and save lives</p>    
                        </div>
                        <div class="form_text--footer">
                            <p>Team Name ;D</p>
                        </div>
                    </div>
                </div>
                <div class="content-form_main">
                    <div class="text_heading">                    
                        <h2>Sign Up</h2>
                    </div>
                    <div class="content-form_items">
                        <form action="">
                            <div class="content-form_item">
                                <label for="donator_username">Username</label>
                                <input type="text" name="donator_username" id="donator_username" placeholder="Enter username">
                            </div>
                            <div class="content-form_item">
                                <label for="user_pass">Password</label>
                                <input type="password" name="user_pass" id="user_pass" placeholder="Enter password">
                            </div>
                            <div class="content-form_item">
                                <label for="user_fullname">Full Name</label>
                                <input type="text" name="user_fullname" id="user_fullname" placeholder="Enter full name">
                            </div>
                            <div class="content-form_item">
                                <label for="user_ID">Citizen ID</label>
                                <input type="number" name="user_ID" id="user_ID" placeholder="Enter national ID">
                            </div>
                            <div class="content-form_checkbox">
                                <div class="content-form_checkbox-item">
                                    <input type="checkbox" name="checkbox" id="user_checkbox">
                                </div>
                                <div class="content-form_checkbox-policy">
                                    <p>By clicking, you agree with our <a href="policy.html">Terms and Policies</a></p>
                                </div>
                            </div>
                            <div class="content-form_footer">
                                <div class="content-form_footer-item">                        
                                    <input class="submit-button citizen-button"value="Register"></input>
                                </div>
                                <div class="content-form_footer-item">
                                    <p>Already had an account?                                
                                        <a href="homepage.html">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
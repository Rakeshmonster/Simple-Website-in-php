
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
 <link rel="stylesheet" href="style.css">
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
 <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
        <form action="#" class="search-bar">
            <input type="text" placeholder="Search......">
            <button type="submit"><i class='bx bx-search' ></i></button>
        </form>
    </header>
    <div class="background"></div>

    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bxs-building-house' ></i>RoomRent</h2>
            <div class="text-sci">
                <h2>Welcome! <br><span>To Our website.</span></h2>
                <p>It Helps in finding the House/flats/room on rent in our website.</p>

                <div class="social-icons">
                    <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                </div>
            </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form action="logind.php" method="post">
                    <h2>Sign in</h2>
                     <div class="input-box">
                       <span class="icon"><i class='bx bxs-envelope' ></i></span>
                       <input type="text" name="nameemail" required>
                       <label >Username or Email</label>
                     </div>
                      <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" class="cpassword" required>
                        <label >Password</label>
                       </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" name="submit" class="btn">Sign In</button>
                    <div class="login-register">
                        <p>Don't have an account?
                            <a href="#" class="register-link">Sign up</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <form action="database.php" method="post">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user' ></i></span>
                        <input type="text" name="Name" required>
                        <label >Name</label>
                      </div>
                     <div class="input-box">
                       <span class="icon"><i class='bx bxs-envelope' ></i></span>
                       <input type="email" name="Email" required>
                       <label >Email</label>
                     </div>
                      <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="Password" required>
                        <label >Password</label>
                       </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & Conditions</label>
                    </div>
                    <button type="submit" name="submit" class="btn">Sign Up</button>
                    <div class="login-register">
                        <p>Already have an account.
                            <a href="#" class="login-link">Sign in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Shedula Application - Login Page</title>
</head>
<body>
    <?php include("./includes/header.php") ?>
    <section class="signup-section">
        <div class="container">
            <form class="signup-form">
                <div class="signup">
                    <label name="frname">First Name</label>
                    <input class="" id="" type="name" name="frname" placeholder="First Name" \>
                </div>
                <div class="signup">
                    <label class="" id="" name="lname">Last Name</label>
                    <input class="" id="" name="lname" type="name" placeholder="Last Name" \>
                </div>
                <div class="signup">
                    <label class="" name="e-mail" id="">Email Address</label>
                    <input class="" id="" type="email" name="e-mail" placeholder="Your Email" />
                </div>
                <div class="signup">
                    <label name="pass">Password</label>
                    <input class="" name="pass" type="password" placeholder="Enter Password"/>
                </div>
                <div class="signup">
                    <label name="cpass">Confirm Password</label>
                    <input class="" name="cpass" type="password" placeholder="Confirm Password"/>
                </div>
                <input class ="btn" type="submit"/>
            </form>
        </div>
        <div><a href="./login.php">Have an Account?</a></div>
    </section>
    <?php include("./includes/footer.php") ?>
</body>
</html>
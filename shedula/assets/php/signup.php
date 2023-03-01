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
            <h1>SIGNUP FORM</h1>
            <form class="signup-form" action="./signup.php" method="post">
                <div class="signup">
                    <label class="signup-label" name="frname">First Name</label>
                    <input class="signup-input" id="" type="name" name="frname" placeholder="First Name" \>
                </div>
                <div class="signup">
                    <label class="signup-label" id="" name="lname">Last Name</label>
                    <input class="signup-input" id="" name="lname" type="name" placeholder="Last Name" \>
                </div>
                <div class="signup">
                    <label class="signup-label" name="e-mail" id="">Email Address</label>
                    <input class="signup-input" id="" type="email" name="e-mail" placeholder="Your Email" />
                </div>
                <div class="signup">
                    <label class="signup-label" name="pass">Password</label>
                    <input class="signup-input" name="pass" type="password" placeholder="Enter Password"/>
                </div>
                <div class="signup">
                    <label class="signup-label" name="cpass">Confirm Password</label>
                    <input class="signup-input" name="cpass" type="password" placeholder="Confirm Password"/>
                </div>
                <input class ="btn" type="submit"/>
                <a class="signup-account" href="./login.php">I Have an Account</a>
            </form>
        </div>
    </section>
    <?php 
    $error =NULL;      
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $FirstName = $_POST['frname'];
            $LastName  = $_POST['lname'];
            $EmailAddress = $_POST['e-mail'];
            $Password = $_POST['pass'];
            $ConfirmPassword = $_POST['cpass'];
        //Conditions to ensure no empty Inputs and Short attributes
        if ($Password != $ConfirmPassword)
        echo "The Passwords do Not Match";
        elseif ($FirstName == "" || $LastName == "")
        echo "Enter the names correctly";
        elseif ($EmailAddress == "")
        echo "Enter the Email Address correctly";
        else
        echo "Proceed";
        echo $Password;
        }
    
    ?>
    <?php include("./includes/footer.php") ?>
</body>
</html>
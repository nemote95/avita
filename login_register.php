<?php
ob_start();
session_start();
//	if( isset($_SESSION['user'])!="" ){
//		header("Location: home.php");
//	}
include_once 'config.php';

$error = false;
$nameError="";
$emailError="";
$passError="";
$name="";
$email="";
$pass="";
$errMSG="";
$errTyp="";
if (isset($_POST['btn-signup']) ) {

    // clean user inputs to prevent sql injections
    if(isset($_POST['name'])){
        $name = trim($_POST['name']);
        $name = strip_tags($name);
        $name = htmlspecialchars($name);
    }
    if(isset($_POST['email'])) {
        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);
    }
    if(isset($_POST['pass'])) {
        $pass = trim($_POST['pass']);
        $pass = strip_tags($pass);
        $pass = htmlspecialchars($pass);
}

    // basic name validation
    if (empty($name)) {
        $error = true;
        $nameError = "Please enter your full name.";
    } else if (strlen($name) < 3) {
        $error = true;
        $nameError = "Name must have atleat 3 characters.";
    } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $nameError = "Name must contain alphabets and space.";
    }

    //basic email validation
    if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
        $error = true;
        $emailError = "Please enter valid email address.";
    } else {
        // check email exist or not
        $query = "SELECT email FROM user WHERE email='$email'";
        $result = $dbh->prepare($query);
        $res = $result->execute();
        $rows = $result->fetchAll(); // assuming $result == true
        $n = count($rows);
//        $result = mysqli_query($conn,$query);
        //$count = mysql_num_rows($result);
//        $count = $result->num_rows;
        if($n!=0){
            $error = true;
            $emailError = "Provided Email is already in use.";
        }
    }
    // password validation
    if (empty($pass)){
        $error = true;
        $passError = "Please enter password.";
    } else if(strlen($pass) < 6) {
        $error = true;
        $passError = "Password must have atleast 6 characters.";
    }

    // password encrypt using SHA256();
    $password = hash('sha256', $pass);

    // if there's no error, continue to signup
    if( !$error ) {

        $query="INSERT INTO user (email,last_name,first_name,phone,address,password) VALUES ('$email','ahmadi','$name','09127472816','yazd','$password')";
        //$query = "INSERT INTO user (UID,email,last_name,first_name,phone,address,password)VALUES(0,'$email','$name','aa','bb','dd','$password')";
        $res = $dbh->prepare($query);
        $res->execute();
        if ($res) {
            $errTyp = "success";
            $errMSG = "Successfully registered, you may login now";
            unset($name);
            unset($email);
            unset($pass);
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }

    }
}
?>
<?php
if( isset($_POST['btn-login']) ) {

// prevent sql injections/ clear user invalid inputs
if(isset($_POST['email'])) {
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
}

if(isset($_POST['pass'])) {
    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
}
// prevent sql injections / clear user invalid inputs

if(empty($email)){
$error = true;
$emailError = "Please enter your email address.";
} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
$error = true;
$emailError = "Please enter valid email address.";
}

if(empty($pass)){
$error = true;
$passError = "Please enter your password.";
}

// if there's no error, continue to login
if (!$error) {
$password = hash('sha256', $pass); // password hashing using SHA256
    $query = "SELECT UID,last_name,password FROM user WHERE email='$email'";
    $result = $dbh->prepare($query);
    $res = $result->execute();
    $rows = $result->fetchAll(); // assuming $result == true
    $n = count($rows);
//$res=mysqli_query($conn,"SELECT UID,last_name,password FROM user WHERE email='$email'");
//$row=mysqli_fetch_array($res);
//$count = $res->num_rows; // if uname/pass correct it returns must be 1 row
//echo ($row['password']);
if( $n == 1) {
if($row['password']==$pass){
$_SESSION['user'] = $row['UID'];
header("Location: index.php");
}
else{
$errMSG = "Incorrect Credentials, Try again...";
}
} else {
$errMSG = "no match found !";
}

}
}
?>
<!--  = Login =  -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="loginModalLabel"><span class="light">ورود</span> در وبمارکت</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="#">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmail">نام کاربری</label>
                <div class="controls">
                    <input type="text" class="input-block-level" name="email" id="inputEmail" placeholder="نام کاربری">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" naame="pass" for="inputPassword">رمز عبور</label>
                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox">
                        مرا به خاطر بسپار
                    </label>
                </div>
            </div>
            <button type="submit" name="btn-login" class="btn btn-primary input-block-level bold higher">
                ورود
            </button>
            <?php
            if ( isset($errMSG) ) {

                ?>
                <div class="form-group">
                    <div class="alert alert-danger">
                        <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </form>
        <p class="center-align push-down-0">
            <a href="#" data-dismiss="modal">رمز عبورتان را فراموش کرده اید؟</a>
        </p>
    </div>
</div>

<!--  = Register =  -->
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="registerModalLabel"><span class="light">ثبت نام</span>در آویتا</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" >
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">نام کاربری</label>
                <div class="controls">
                    <input type="text" name="name" class="input-block-level" id="inputUsernameRegister" placeholder="نام کاربری" >
                    <span class="text-danger"><?php echo $nameError; ?></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmailRegister">ایمیل</label>
                <div class="controls">
                    <input type="email" name="email" class="input-block-level" id="inputEmailRegister" placeholder="ایمیل">
                    <span class="text-danger"><?php echo $emailError; ?></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPasswordRegister">رمز عبور</label>
                <div class="controls">
                    <input type="password" name="pass" class="input-block-level" id="inputPasswordRegister"
                           placeholder="Password">
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            <button type="submit" name="btn-signup" class="btn btn-danger input-block-level bold higher">
                ثبت نام
            </button>
<!--            <span class="text-danger">--><?php //echo $errMSG; ?><!--</span>-->
            <?php
            if ( isset($errMSG) ) {

                ?>
                <div class="form-group">
                    <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                        <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </form>
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">قبلا ثبت نام کرده اید؟</a>
        </p>

    </div>
</div>


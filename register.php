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
        $query = "SELECT email FROM users WHERE email='$email'";
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


        $sql = $dbh->prepare("INSERT INTO users (email,last_name,first_name,password) VALUES 
        (:email, :last_name,:first_name,:password);");
        $first_name="test";
        $sql->bindParam(':email', $email);
        $sql->bindParam(':last_name', $name);
        $sql->bindParam(':first_name', $first_name);
        $sql->bindParam(':password', $pass);
        $sql->execute();
        $errTyp = "success";
        $errMSG = "Successfully registered, you may login now";


        unset($name);
        unset($email);
        unset($pass);}
}
?>
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
<?php ob_end_flush(); ?>

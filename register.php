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
    if(isset($_POST['first_name'])){
        $first_name = trim($_POST['first_name']);
        $first_name = strip_tags($first_name);
        $first_name = htmlspecialchars($first_name);
    }
    if(isset($_POST['last_name'])){
        $last_name = trim($_POST['last_name']);
        $last_name = strip_tags($last_name);
        $last_name= htmlspecialchars($last_name);
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
    if (empty($first_name)) {
        $error = true;
        $nameError = "Please enter your full name.";
    } else if (strlen($first_name) < 3) {
        $error = true;
        $nameError = "Name must have atleat 3 characters.";
    } else if (!preg_match("/^[a-zA-Z ]+$/",$first_name)) {
        $error = true;
        $nameError = "Name must contain alphabets and space.";
    }

    if (empty($last_name)) {
        $error = true;
        $lastnameError = "Please enter your full name.";
    } else if (strlen($last_name) < 3) {
        $error = true;
        $lastnameError = "Name must have atleat 3 characters.";
    } else if (!preg_match("/^[a-zA-Z ]+$/",$last_name)) {
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
        ?>
        <script>alert( "Please enter password.")</script>
        <?php
        $passError = "Please enter password.";
    } else if(strlen($pass) < 6) {
        $error = true;
        $passError = "Password must have atleast 6 characters.";
    }
    //password hash
    $cost = 10;
    $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
    $salt = sprintf("$2a$%02d$", $cost) . $salt;
    $password = crypt($pass, $salt);

    // if there's no error, continue to signup
    if( !$error ) {
        $sql = $dbh->prepare("INSERT INTO user (email,last_name,first_name,phone,address,password) VALUES 
        (:email, :last_name,:first_name, :phone,:address,:password);");
        $address ="test_address";
        $phone="09123456789";
        $sql->bindParam(':email', $email);
        $sql->bindParam(':last_name', $last_name);
        $sql->bindParam(':first_name', $first_name);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':address', $address);
        $sql->bindParam(':password', $password);
        $sql->execute();
        $errTyp = "success";
        $errMSG = "Successfully registered, you may login now";

        unset($name);
        unset($email);
        unset($pass);
    ?>
        <script>
            jQuery(function($) {
                $('.btn-login').click(function() {
                    var post_url = 'register.php';

                    $.ajax({
                        type: 'POST',
                        url: post_url,
                        data: $('#loginform').serialize(),
//                        dataType: 'html',
                        async: true,
                        success: function(data) {
                            $('#errorDiv1').append(data);
                        }
                    });
                })
            });
            $('#registerModal').modal('hide');
        </script>
        <?php
    }
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
        <form method="post" id="loginform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" >
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">نام</label>
                <div class="controls">
                    <input type="text" name="first_name" class="input-block-level" id="inputUsernameRegister" placeholder="نام" >
                    <span class="text-danger"><?php echo $nameError; ?></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">نام خانوادگی</label>
                <div class="controls">
                    <input type="text" name="last_name" class="input-block-level" id="inputUsernameRegister" placeholder="نام خانوادگی" >
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
                <div id="errorDiv1">

                </div>
            </div>
            <button type="submit" name="btn-signup" class="btn btn-danger input-block-level bold higher btn-login">
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

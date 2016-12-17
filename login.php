<?php
include ('config.php');
$error='';
//session_start();
if(isset($_POST['btn-login']) ) {
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
// if there's no error, continue to
    ?>

<?php
    if (!$error) {
        $password = hash('sha256', $pass); // password hashing using SHA256
        $query = "SELECT UID,last_name,password FROM users WHERE email='$email'";
        $result = $dbh->prepare($query);
        $result->execute();
        $row=$result->fetch();
        
        if( $result) {
			var_dump(str_replace('"', '', $row["password"])==$pass);
			echo "space";
			var_dump($pass);
            if($row['password']==$pass){
                $_SESSION['user'] = $row->UID;
                $_SESSION['lastname']=$row->last_name;
                $_SESSION['loggedIn']=true;
                
                $errMSG = "u logged in successfully..";
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
        <h3 id="loginModalLabel"><span class="light">ورود</span> در آویتا </h3>
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
                <label class="control-label hidden shown-ie8"  for="inputPassword">رمز عبور</label>
                <div class="controls">
                    <input type="password" name="pass" class="input-block-level" id="inputPassword" placeholder="Password">
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
<!--            <h3>--><?php //echo  $_SESSION['user'] ?><!-- </h3>-->
<!--            <h3>--><?php //echo  $_SESSION['email'] ?><!-- </h3>-->
        </form>
        <p class="center-align push-down-0">
            <a href="#" data-dismiss="modal">رمز عبورتان را فراموش کرده اید؟</a>
        </p>
    </div>
</div>


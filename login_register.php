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
                    <input type="text" class="input-block-level" id="inputEmail" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPassword">رمز عبور</label>
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
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                ورود
            </button>
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
        <h3 id="registerModalLabel"><span class="light">ثبت نام</span> در وبمارکت</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="#">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">نام کاربری</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmailRegister">ایمیل</label>
                <div class="controls">
                    <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPasswordRegister">رمز عبور</label>
                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPasswordRegister"
                           placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-danger input-block-level bold higher">
                ثبت نام
            </button>
        </form>
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">قبلا ثبت نام کرده اید؟</a>
        </p>

    </div>
</div>


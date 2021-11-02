<input type="radio" name="user" id="none-check" checked>
<div class="register" style="display: none; ">
    <input type="radio" name="user" id="register-check">
    <label class="user__btn" for="register-check">
        <a class="btn btn--login">Register</a>
    </label>
    <div class="register__container">
        <label for="none-check" class="register__label-back"></label>
        <div class="register__box">
            <div class="register__box-heading">
                <p class="register__box-heading-text">Register</p>
                <label for="login-check">
                    <p class="register__box-login-label cursor-pointer">Login</p>
                </label>
            </div>
            <form action="./test.php" method="post">
                <input type="text" name="username-register" id="username" placeholder="Username">
                <input type="password" name="pass-register" id="password" placeholder="Password">
                <select name="permission-register" id="permission">
                    <option value="user">User</option>
                </select>
                <button class="btn btn--login">Đăng kí</button>
            </form>
            <div class="login__box-footer">
                <label for="none-check"><a href="" class="btn btn--back">Back</a></label>
            </div>
        </div>
    </div>
</div>
<div class="login">
    <input type="radio" name="user" id="login-check">
    <label class="user__btn" for="login-check">
        <a class="btn btn--login">Login</a>
    </label>
    <div class="login__container">  
        <label for="none-check" class="login__label-back"></label>
        <div class="login__box">
            <div class="login__box-heading">
                <p class="login__box-heading-text">Login</p>
                <label for="register-check">
                    <p class="login__box-register-label cursor-pointer">Register</p>
                </label>
                </div>
            <form action="xllogin.php" method="post">
                <input type="text" name="username-login" id="username" placeholder="Username">
                <input type="password" name="pass-login" id="password" placeholder="Password">
                <select name="permission-login" id="permission">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <button class="btn btn--login">Đăng nhập</button>
            </form>
            <div class="login__box-footer">
                <label for="none-check"><p class="btn btn--back">Back</p></label>
            </div>
        </div>
    </div>
</div>
<div class="background_login">
<div id="login_wrapper">
    <form action="index.php?page=login" method="POST">
        <label class="button"><div class="button_input">Login</div></label>
        <div class="clear"></div>
        <div class="input">
            <label>
            <div class="text">Username: </div>
            <div> <input type="text" name="username" placeholder="Enter the username..." id="username" value=<?=@$username ?>></div></label>
        </div>
        <div class="input">
            <label>
            <div class="text">Password: </div>
            <div> <input type="password" name="password" placeholder="Enter the password..." id="password" value=<?=@$password ?>></div></label>
        </div>
        <div class="input" style="padding-bottom:10px">
        <input class="submit"  type="submit" name="submit1" value="Submit">
        </div>
        <div class="clear"></div>
    </form>
    <div class="clear"></div>
     <form action="index.php?page=login" method="POST">
         <div class="clear"></div>
         <label class="button"><div class="button_input">Register</div></label>
         <div class="clear"></div>
        <div class="input">
            <label>
            <div class="text">Email: </div>
            <div> <input type="text" name="email" placeholder="Enter the email..." id="email" value=<?=@$email ?>></div></label>
        </div>
        <div class="input">
            <label>
            <div class="text">Username: </div>
            <div> <input type="text" name="username" placeholder="Enter the username..." id="username" value=<?=@$username ?>></div></label>
        </div>
        <div class="input">
            <label>
            <div class="text">Password: </div>
            <div> <input type="password" name="password" placeholder="Enter the password..." id="password" value=<?=@$password ?>></div></label>
        </div>
        <div class="input">
            <label>
            <div class="text">Retype password: </div>
            <div> <input type="password" name="r_password" placeholder="Retype the password..." id="r_password" value=<?=@$r_password ?>></div></label>
        </div>
         <div class="input" style="padding-bottom:10px">
        <input class="submit"  type="submit" name="submit2" value="Submit">
         </div>
        <div class="clear"></div>
    </form>
    <div class="clear"></div>
</div>
</div>
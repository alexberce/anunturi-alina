<div class="background_login">
<div id="login_wrapper">
    <form action="<?=base_url();?>account/login" method="POST">
        <label class="button"><div class="button_input">Login</div></label>
        <div class="clear"></div>
        <?php echo form_error('username_login','<div class="alert alert-danger">','</div>');?>
        <div class="input text-center">
            <label>
            <div class="text">Username: </div>
            <div> <input type="text" name="username_login" placeholder="Enter the username..." id="username" value=<?=@$username ?>></div></label>
        </div>
        <?php echo form_error('password_login','<div class="alert alert-danger">','</div>');?>
        <div class="input text-center">
            <label>
            <div class="text">Password: </div>
            <div> <input type="password" name="password_login" placeholder="Enter the password..." id="password" value=<?=@$password ?>></div></label>
        </div>
        <div class="input text-center" style="padding-bottom:10px">
        <input class="submit"  type="submit" name="submit1" value="Submit">
        </div>
        <div class="clear"></div>
    </form>
    <div class="clear"></div>
     <form action="<?php echo base_url();?>account/register" method="POST">
         <div class="clear"></div>
         <label class="button"><div class="button_input">Register</div></label>
         <div class="clear"></div>
         <?php echo form_error('email','<div class="alert alert-danger">','</div>');?>
        <div class="input text-center">
            <label>
            <div class="text">Email: </div>
            <div> <input type="text" name="email" placeholder="Enter the email..." id="email" value=<?=@$email ?>></div></label>
        </div>
         <?php echo form_error('username','<div class="alert alert-danger">','</div>');?>
        <div class="input text-center">
            <label>
            <div class="text">Username: </div>
            <div> <input type="text" name="username" placeholder="Enter the username..." id="username" value=<?=@$username ?>></div></label>
        </div>
         <?php echo form_error('password','<div class="alert alert-danger">','</div>');?>
        <div class="input text-center">
            <label>
            <div class="text">Password: </div>
            <div> <input type="password" name="password" placeholder="Enter the password..." id="password" value=<?=@$password ?>></div></label>
        </div>
         <?php echo form_error('r_password','<div class="alert alert-danger">','</div>');?>
        <div class="input text-center">
            <label>
            <div class="text">Retype password: </div>
            <div> <input type="password" name="r_password" placeholder="Retype the password..." id="r_password" value=<?=@$r_password ?>></div></label>
        </div>
         <div class="input text-center" style="padding-bottom:10px">
        <input class="submit"  type="submit" name="submit2" value="Submit">
         </div>
        <div class="clear"></div>
    </form>
    <div class="clear"></div>
</div>
</div>
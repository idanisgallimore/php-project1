<!-- //add from - use session cookies  -->
<?php 
    include_once("brandonly.php");
?>
<h1 class="page-title">Log in</h1>
<form class="login-container container" method="post" action="index.php">
    <input class="form-input" type="text" name="email" placeholder="Enter Your Email"/>
    <input class="form-input" type="password" name="password" placeholder="Enter your password"/>
    <input type="hidden"  name="page" value="login"/>
    <input class="btn btn-yes btn-small" type="submit" value="log in"/>
    <a href="index.php?page=signup" class="link body-link login-link">Sign Up</a>
    <a href="index.php?page=forgotPassword" class="link body-link login-link">Forgot password?</a>
</form>
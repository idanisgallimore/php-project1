<?php 
    include_once("brandonly.php");
?>
<h1 class="page-title">Sign Up</h1>
<!-- //add from - use session cookies  -->
<form method="get" class="login-container signup-cont container" action="index.php">
    <input class="form-input" type="text" name="name" placeholder="Enter Your Full Name"/>
    <input class="form-input" type="text" name="email" placeholder="Enter Your Email"/>
    <input class="form-input" type="password" name="password" placeholder="Choose a password"/>
    <input type="hidden"  name="page" value="addUser"/>
    <input class="btn btn-yes btn-small" type="submit" value="submit"/>
    <a href="index.php?page=loginPage" class="link body-link login-link">Log In</a>
</form>
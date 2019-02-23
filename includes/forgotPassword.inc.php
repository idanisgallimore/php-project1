<!-- //add from - use session cookies  -->
<?php 
    include_once("brandonly.php");
?>
<h1 class="page-title">Enter Your Email</h1>
<form class="login-container container" method="post" action="index.php">
    <input class="form-input" type="text" name="email" placeholder="Enter Your Email"/>
    <input type="hidden"  name="page" value="sendEmail"/>
    <input class="btn btn-yes btn-small" type="submit" value="Receive Email"/>
</form>
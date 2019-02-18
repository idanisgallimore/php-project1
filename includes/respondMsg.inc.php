<?php include("nav.php");?>
<h1 class="page-title">Respond to <?php $from = $_REQUEST['from']; echo ucwords($from) ?></h1>
<form class="msg-send" method="get" action="index.php">
    <?php 
        $from = $_REQUEST['from'];
        echo "<input type=\"hidden\" name=\"touser\" value=\"$from\"/>";
    ?>
    <!-- add user when you do session cookies *idy -->
    <input type="hidden" name="fromWhom" value="test"/>
    <!-- ------------------------------------------- -->
    <textarea class="form-area" name="message">Add your message!</textarea>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
    <input type="hidden"  name="page" value="response"/>
    <input class="btn btn-yes btn-small" type="submit" value="submit"/>
</form>

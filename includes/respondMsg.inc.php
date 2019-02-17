<?php include("nav.php");?>
<form method="get" action="index.php">
    <?php 
        $from = $_REQUEST['from'];
        echo "<input type=\"hidden\" name=\"touser\" value=\"$from\"/>";
    ?>
    <!-- add user when you do session cookies *idy -->
    <input type="hidden" name="fromWhom" value="test"/>
    <!-- ------------------------------------------- -->
    <textarea name="message">Add your message!</textarea>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
    <input type="hidden"  name="page" value="response"/>
    <input class="btn btn-yes" type="submit" value="submit"/>
</form>
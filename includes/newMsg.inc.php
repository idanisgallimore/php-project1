<?php include("nav.php");?>
<h1 class="page-title">Add New Message</h1>
<!-- //add from - use session cookies  -->
<form class="msg-send" method="get" action="index.php">
    <select class="select-user" name="user">
        <option value="All members">All members</option>
        <?php 
        // Connection to Db
        require_once("library/connection.php");
        $con = connectToDb();
        //-------------------
        $query = "SELECT userid, name from ms_users";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($result)){
            $userid = $row['userid'];
            $name = $row['name'];
            echo "<option value=\"$name\">$name</option>";
        }
        ?>
    </select>
    <!-- <input type="hidden" name="fromWhom" value="?"/> -->
    <textarea class="form-area" name="message">Add your message!</textarea>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
    <input type="hidden"  name="page" value="addMsg"/>
    <input class="btn btn-yes btn-small" type="submit" value="submit"/>

</form>
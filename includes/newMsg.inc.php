<?php include("nav.php");?>
<h1 class="page-title">Add New Message</h1>
<!-- //add from - use session cookies  -->
<form method="get" action="index.php">
    <select name="user">
        <option value="All members">All members</option>
        <?php 
        $con = mysqli_connect("localhost", "idanis", "test", "messages_site");
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
    <textarea name="message">Add your message!</textarea>
    <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
    <input type="hidden"  name="page" value="addMsg"/>
    <input class="btn btn-yes" type="submit" value="submit"/>

</form>
<?php include("footer.php");?>
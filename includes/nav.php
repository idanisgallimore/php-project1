<nav>
    <a href="index.php?page=viewMsgs">View messages</a>
    <a href="index.php?page=newMsg">Add new message</a>
    <a href="index.php?page=signup">Sign Up</a>
    <a href="index.php?page=updateUser">Update Info</a>

    <a href="index.php">Home</a>
    <?php 
        $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
        // Change the line below when you add session cookies *idy
        $query = "SELECT * from msg WHERE to_user = 'test'";
        $result = mysqli_query($con, $query);
        $row = mysqli_num_rows($result);
        echo "<a href=\"index.php?page=inbox\">Inbox ($row)</a>";
    ?>
    <a href="index.php?page=logout">Log Out</a>

</nav>
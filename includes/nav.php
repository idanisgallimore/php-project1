<div class="nav-button">
    <div class="btn-cont">
        <i class="fas fa-align-justify"></i>
    </div>
</div>

<nav>
    <ul class="navigation">
    <?php 
        include_once("library/inboxNmb.php");
        include_once("library/getName.php");
        $name = getName($_SESSION["user"]);
        // store links in array 
        $links = array("Home" => "dashboard", "About Us" => "about", "Message Board" => "viewMsgs", "Send Message" => "newMsg");
        foreach($links as $key => $val){
            echo "<li class=\"navli\"><a class=\"ul-links\" href=\"index.php?page=$val\">$key</a></li>";
        }
        echo "<div class=\"underlinks\"> ";
        // inbox and logout links
        $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
        // Get the messages 
        $number = getNumber($name);
        echo "<a class=\"unli\" href=\"index.php?page=inbox\">Inbox ($number)</a>
        <li class=\"ul-links\"><a class=\"unli\" href=\"index.php?page=logout\">Log out</a></li>
        <div>";
    ?>


    </ul>
</nav>
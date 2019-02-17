<?php 
    include("nav.php");
    include_once("library/inboxNmb.php");
    include_once("library/getName.php");
    $user = $_SESSION["user"];
    $name = ucwords(getName($user));
    $con = mysqli_connect("localhost", "idanis", "test", "messages_site") or die("did not connect");
    // the page title
    echo "<h1 class=\"page-title\">Welcome $name!!!</h1>";

    // loop through to create the links in the page
    echo "<div class=\"container dashboard-container\">";
        $links = array("Inbox" => "inbox", "Message Board" => "viewMsgs", "Send Message" => "newMsg", "Account" => "userAcc");
        foreach ($links as $key => $val){
            if($key === "Inbox"){
                $number = getNumber($name);
                // echo $number;
                echo "<div class=\"link-cont link-$val\">
                    <a class=\"dashb-link\" href=\"index.php?page=$val\"><p class=\"link-text\">Inbox ($number)</p></a>
                </div>"; 
            }else{
                echo "<div class=\"link-cont link-$val\">
                    <a class=\"dashb-link\" href=\"index.php?page=$val\"><p class=\"link-text\">$key</p></a>
                </div>"; 
            }
        }
    echo "</div>";
?>
<?php include("footer.php");?>

<?php include("nav.php");?>
<h1 class="page-title">Account</h1>
<?php 
    // loop through to create the links in the page
    echo "<div class=\"container dashboard-container\">";
        $links = array("Change User Info" => "updateUser", "Delete Account" => "deleteAcc");
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

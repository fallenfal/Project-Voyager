<?php include("includes/header.php"); ?>
<?php include("includes/left-nav.php"); ?>
<?php include("includes/top-nav.php"); ?>
<?php
if(!$session->isSignedIn()){
    redirect('login.php');
} else {
    $username = Users::clean($_SESSION['user_id']['username']);
    $role = Users::clean($_SESSION['user_id']['role']);
}

?>

<div class="container">


    <?php
echo __FILE__."/vendor/autoload.php";



    if($role == "admin"){
        echo "<h1>bun venit $role</h1>";
    }


    echo "http://localhost:8181/login/activate.php<br>";
    echo  __FILE__."/login/activate.php";

    echo "<h2>$username</h2>";
    var_dump($_SESSION['user_id']);
    //echo $_SESSION['user_id'];
    echo $_SESSION['user_id']['role'];
    echo "<p>".var_dump($session->user_id)."</p>";
    echo "<h1>$session_message </h1>";
    $users = new Users();
    if($users->emailExist("lapos.alexgabriel@gmail.com")){
        echo "TRUE";
    } else {
        echo "FALSE";
    }

    echo "<br><br>";
    echo microtime(true);
    $microtime = explode('.',microtime(true));
    echo "<br><br>";
    echo $microtime = current($microtime);
    echo "<br><br>";
    echo date('U') + 720 * 60* 60;



    ?><br><br><br>

    <?php

    $a = '';
    $b = '';

    if(empty($a) || empty($b)){
        echo "merge daca amandoua sunt goale";
    } else {
        echo "nu merge cu OR daca amandoua sunt goale";
    }












    ?>
    <br><br>
    <!-- strada stanjeneilor 4 -->
    <?php
    if(isset($_POST['submit'])){
        $address = $_POST['address'];
        $new_address = explode(' ',$address);
        $final_address = implode("+",$new_address);

    }
    var_export($new_address);
    echo "<br>Adressa:https://maps.google.com/maps?q=".$final_address;



    ?>

    <form method="post">
        <input type="text" name="address">
        <input type="submit" name='submit' value="Submit">
    </form>


<br><br>




    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=bv%201%20decembrie&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.emojilib.com">list of star names</a>
        </div>
        <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}
            .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
        </style>
    </div>









    <?php var_dump($_COOKIE['username']); ?>
</div>



<?php include("includes/footer.php"); ?>

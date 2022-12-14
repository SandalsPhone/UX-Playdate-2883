<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Landing Page </title>
    <link rel="stylesheet" href="css folder/landing_page.css">
</head>
<body>
    <?php
        if(isset($_SESSION['is_login'])){
            $first_row_profile = '<a href="myprofile_page.php" class="sign_in_login_div_signin">'. $_SESSION["first_name"] .'</a>';
            $second_row_profile = '<a href="logout.php" class="sign_in_login_div_logout"> Logout</a>';
        }
        else{  
            $first_row_profile = '<a href="sign_up_page.html" class="sign_in_login_div_signin"> Sign Up </a>';
            $second_row_profile = '<a href="login_page.html" class="sign_in_login_div_login"> Login </a>';
        }
    ?>
    <div class="nav">
        <table>
            <tr class="tablerow">
                <td><img src="pic/My project 1.svg"></td>
                <td><a href=""> HOME </a></td> 
                <td> SCHEDULE </td>
                <td> LEARNING KIT </td>
                <td> FIND A FRIEND </td>
                <td><a href="product_page.php"> BOOK A PLAYDATE </a></td>
                <td></td>
                <td>
                    <div class="search_box">
                            <input type="text" placeholder="SEARCH" class="input">
                            <button type="submit">
                                <img src="pic/search-md.png" width="80%" height="80%">
                            </button>
                    </div>
                </td>
                <td class="cart_button">
                    <a href="">
                        <img src="pic/shopping-cart-01.png" width="70%" height="70%">
                    </a>
                </td>
                <td class="chat_icon">
                    <img src="pic/chat_icon.png" width="70%" height="70%">
                </td>
                <td class="acc_button">   
                    <button class="toggle" onclick="showingDiv()">
                        <img src="pic/usercircle.png" width="70%" height="70%">
                    </button>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
        </table>
    </div>

    <div class="sign_in_login_div" id="btn">
        <?= $first_row_profile?>
        <br>
        <?= $second_row_profile?>
    </div>

    <div class="container">
        <img src="pic/Frame 88.png" width="100%" height="100%"><br>
        <div class="spaceone">
            <div class="book_a_playdate"><b> Book a playdate </b></div>
            <br>
            <div class="subpar_one">
                Let's book a playdate for your children <br>
                while enhancing their skills and knowledge <br> 
                through our learning kit.
            </div>
            <br style="line-height: 50px;">
            
            <a href="#linkedtotop">
                <button class="first_button">
                    Book a playdate
                </button>
            </a>
            </div>
    </div>
    <div class="section_two">
    Our playdate provides program for children from the age of 4-11. With 
    <br>
    the aim to practice cognitive and behavioral behavior.
    </div>
    <div class="container_two">
        <img src="pic/pic ungu.png" width="100%" height="100%"><br>
        <div class="space_two">
            <div class="find_a_friend"><b> Find a Friend </b></div>
            <br>
                <div class="subpar_two">
                    Find someone suitable to be your child's <br>
                    playdate so they can be good friends in <br>
                    the future
                </div>
                <br style="line-height: 52px;">
                <button class="second_button">
                    Find Now
                </button>
        </div>
    </div>
    <div class="container_three">
        <img src="pic/bglingkarbaru.png" class="bglingkar"><br>
        <div class="space_three">
            <div class="how_web">How Our Website Works</div>
        <br>
        <table>
            <tr class="firstrow">
                <td class="numberone">
                    <img src="pic/numberone.png">
                </td>
                <td class="numberonedesc">
                    On our website, you could find a friend to go for <br>
                    a playdate with a suitable profile to your children.
                </td>
                <td class="numbertwo">
                    <img src="pic/numbertwo.png">
                </td>
                <td class="numbertwodesc">
                    After finding friends, you could choose a desirable <br>
                    location for your children's playdate venue.
                </td>
            </tr>
            <tr>
                <td class="numberthree">
                    <img src="pic/numberthree.png">
                </td>
                <td class="numberthreedesc">
                    After all is settled, you can book <br>
                    your playdate for your children <br>
                    and proceed to checkout.
                </td>
                <td class="numberfour">
                    <img src="pic/numberfour.png">
                </td>
                <td class="numberfourdesc">
                    You can also choose a learning kit you think best <br>
                     for your children to help enhance their skills and <br>
                     knowledge for the playdate.
                </td>
            </tr>
        </table>    
        </div>
    </div>
    <div class="learning_kit">
        <div class="header_kit">
            Learning Kit
        </div> 
        Our available learning kit for playdate
        <br>
        <br>
    </div>
    <div class="kit_options">
        <table class="kit_table">
            <tr>
                <td>
                    <select name="sortbyage" required>
                        <option value="" disabled selected hidden> SORT BY AGE </option>
                        <option value=""> 4-5 yrs old </option>
                        <option value=""> 6-7 yrs old </option>
                        <option value=""> 8-9 yrs old </option>
                        <option value=""> 10-11 yrs old</option>
                    </select>
                </td>
                <td>
                    <select name="sortbyprice" required>
                        <option value="" disabled selected hidden>SORT BY PRICE</option>
                        <option value=""> Highest to Lowest </option>
                        <option value=""> Lowest to Highest </option>
                    </select>
                </td>
                <td>
                    <select name="sortbydifficulty" required>
                        <option value="" disabled selected hidden>SORT BY DIFFICULTY</option>
                        <option value=""> Easy </option>
                        <option value=""> Medium </option>
                        <option value=""> High </option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="product_grid">
            <?php
                $host = 'db';
                $user = 'root';
                $pass = 'mypass';
                $database = 'learning_kit';
                 
                $conn = mysqli_connect($host, $user, $pass, $database);
                if (!$conn) {
                    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
                }

                $kit = mysqli_query($conn, "SELECT * FROM `learning_kit`");

                $learning_kits = array();

                while ($arr = mysqli_fetch_assoc($kit)){
                    array_push($learning_kits, $arr);
                }

                $learning_kits_json = json_encode($learning_kits);
                file_put_contents("Js Script/JSON/learning_kit_data.json", $learning_kits_json);

                mysqli_close($conn);
            ?>
            <div class="grid1">
                <div class="container_product">
                    <img src="<?=$learning_kits[0]['gambar_learning_kit']?>"><br>
                    <label class="boldedtext"> <?=$learning_kits[0]['nama_learning_kit']?> </label><br><br>
                    <label class = "age">AGE <?= $learning_kits[0]['usia_min_learning_kit'] ?>-<?= $learning_kits[0]['usia_max_learning_kit'] ?></label><br><br>
                    <img src="<?php
                        if($learning_kits[0]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[0]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[0]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                    <br><br>
                 Price : Rp  XXX.XXX
                 <br>
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                    <img src="<?=$learning_kits[1]['gambar_learning_kit']?>"><br>
                    <label class="boldedtext"> <?=$learning_kits[1]['nama_learning_kit']?> </label><br><br>
                    <label class = "age">AGE <?=$learning_kits[1]['usia_min_learning_kit']?>-<?=$learning_kits[1]['usia_max_learning_kit']?></label><br><br>
                    <img src="<?php
                        if($learning_kits[1]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[1]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[1]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                    <br><br>
                        Price : Rp  XXX.XXX
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                    <img src="<?=$learning_kits[2]['gambar_learning_kit']?>" class="gambar_pekerjaan"><br>
                        <label class="boldedtext"> <?=$learning_kits[2]['nama_learning_kit']?> </label><br><br>
                        <label class = "age">AGE <?=$learning_kits[2]['usia_min_learning_kit']?>-<?=$learning_kits[2]['usia_max_learning_kit']?></label><br><br>
                        <img src="<?php
                        if($learning_kits[2]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[2]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[2]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                        <br><br>
                        Price : Rp  XXX.XXX
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                    <img src="<?=$learning_kits[3]['gambar_learning_kit']?>"><br>
                        <label class="boldedtext"> <?=$learning_kits[3]['nama_learning_kit']?> </label><br><br>
                        <label class = "age">AGE <?=$learning_kits[3]['usia_min_learning_kit']?>-<?=$learning_kits[3]['usia_max_learning_kit']?></label><br><br>
                        <img src="<?php
                        if($learning_kits[3]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[3]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[3]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                        <br><br>
                        Price : Rp  XXX.XXX
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                <img src="<?=$learning_kits[0]['gambar_learning_kit']?>"><br>
                    <label class="boldedtext"> <?=$learning_kits[0]['nama_learning_kit']?> </label><br><br>
                    <label class = "age">AGE <?= $learning_kits[0]['usia_min_learning_kit'] ?>-<?= $learning_kits[0]['usia_max_learning_kit'] ?></label><br><br>
                    <img src="<?php
                        if($learning_kits[0]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[0]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[0]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                    <br><br>
                 Price : Rp  XXX.XXX
                 <br>
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                    <img src="<?=$learning_kits[1]['gambar_learning_kit']?>"><br>
                    <label class="boldedtext"> <?=$learning_kits[1]['nama_learning_kit']?> </label><br><br>
                    <label class = "age">AGE <?=$learning_kits[1]['usia_min_learning_kit']?>-<?=$learning_kits[1]['usia_max_learning_kit']?></label><br><br>
                    <img src="<?php
                        if($learning_kits[1]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[1]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[1]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                    <br><br>
                        Price : Rp  XXX.XXX
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                    <img src="<?=$learning_kits[2]['gambar_learning_kit']?>" class="gambar_pekerjaan"><br>
                        <label class="boldedtext"> <?=$learning_kits[2]['nama_learning_kit']?> </label><br><br>
                        <label class = "age">AGE <?=$learning_kits[2]['usia_min_learning_kit']?>-<?=$learning_kits[2]['usia_max_learning_kit']?></label><br><br>
                        <img src="<?php
                        if($learning_kits[2]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[2]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[2]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                        <br><br>
                        Price : Rp  XXX.XXX
                 </div>
            </div>
            <div class="grid1">
                <div class="container_product">
                <img src="<?=$learning_kits[3]['gambar_learning_kit']?>"><br>
                        <label class="boldedtext"> <?=$learning_kits[3]['nama_learning_kit']?> </label><br><br>
                        <label class = "age">AGE <?=$learning_kits[3]['usia_min_learning_kit']?>-<?=$learning_kits[3]['usia_max_learning_kit']?></label><br><br>
                        <img src="<?php
                        if($learning_kits[3]['difficulty_learning_kit'] < 2){
                            echo 'pic/easy-small.png';
                        }
                        else if($learning_kits[3]['difficulty_learning_kit'] < 3){
                            echo 'pic/easy-big.png';
                        }
                        else if($learning_kits[3]['difficulty_learning_kit'] < 4){
                            echo 'pic/medium.png';
                        }
                        else{
                            echo 'pic/hard.png';
                        }
                        ?>">
                        <br><br>
                        Price : Rp  XXX.XXX
                 </div>
            </div>
        </div>
        <button class="find_button"> FIND MORE </button>
        <br><br>
        <div class="blur_popup">
            <p></p>
        </div>
        <div class="my_body_popup">
                <table class="my_body_popup_table">
                    <tr>
                        <th class="my_body_popup_header"> My Body </th>
                        <th> <img src="pic/X_Icon_2.png" id="close_popup"> </th>
                    </tr>
                    <tr>
                        <td>
                        <img src="pic/4setengah_star.png" style="padding-left: 43%;">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="pic/mybody_popup.png">
                        </td>
                    </tr>
                    <tr>
                        <td class="my_body_popup_price">
                            Price Rp XXX.XXX /Session
                        </td>
                        <td>
                            <button class="my_body_popup_button"> 
                                Book Now
                            </button>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
    <div class="before_footer">
        <img src="pic/bglingkar.png" width="100%" height="100%"><br>
        <div class="space_four" id="linkedtotop">
        <div class="booking_playdate_footer">Book a Playdate </div>
        <br>
        <div class="purpletext">
        Find a place and learning kit that you want, select your date and time. The <br>
        learning kit will be ready when you arrive. These playdate can be booked for any <br>
        age. 
        <u><b>
            Children 3 years and younger will need to be accompanied by an adult <br>
            during play date. You can only Book Place that has minimum 3 participant.
        </b></u>
        </div>
        <br><br>
        <div class="three_icons">
            <table class="three_icons_table">
                <tr>
                    <td>
                        <img src="pic/marker-pin-01.png">
                    </td>
                    <td>
                        <img src="pic/calendar-date.png">
                    </td>
                    <td>
                        <img src="pic/gaming-pad-01.png">
                    </td>
                </tr>
                <tr class="purpletextthree">
                    <td> Find a Place & Select Learning Kit </td>
                    <td> Schedule your Date </td>
                    <td> Play Onsite </td>
                </tr>
                <tr></tr>
                <tr>
                    <td> Select a place and a learning kit <br>
                                that are suitable for your child's <br>
                                needs.
                     </td>
                    <td>Select a date and time that is  <br>
                                comfortable for you and your <br>
                                child.
                    </td>
                    <td> Play and socialize onsite with <br>
                                other children.
                    </td>
                </tr>
            </table>
        </div>
        <br><br>
        <button class="prev_icon_button">
            <img src="pic/button left.png">
        </button>
        <button class="next_icon_button">
            <img src="pic/button right.png">
        </button>
        <?php
            $host = 'db';
            $user = 'root';
            $pass = 'mypass';
            $database = 'book_a_playdate';
             
            $conn = mysqli_connect($host, $user, $pass, $database);
            if (!$conn) {
                exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
            }

            $kit = mysqli_query($conn, "SELECT * FROM `book_a_playdate`");

            $playdates = array();

            while ($arr = mysqli_fetch_assoc($kit)){
                array_push($playdates, $arr);
            }
        ?>

        <div class="highlight">
            <div class="place1">
                <img src="<?= $playdates[0]['gambar_book_a_playdate'] ?>">
                <div class="purple2">
                    <div class="inside_purple2">
                        <label style="font-weight: 600;" class="place_label"><?= $playdates[0]['tempat_book_playdate'] ?></label>
                        <br><br>
                        Available Date: <?= date('d M Y', strtotime($playdates[0]['available_date_book_playdate_1']))  ?>, 
                                        <?= date('d M Y', strtotime($playdates[0]['available_date_book_playdate_2']))  ?>,
                                        <?= date('d M Y', strtotime($playdates[0]['available_date_book_playdate_3']))  ?>
                        <br>
                        Area: <?= $playdates[0]['area_book_playdate'] ?>
                        <br style="line-height: 30px;">
                        Address : 
                        <u><?= $playdates[0]['address_book_playdate_1'] ?><br>
                            <?= $playdates[0]['address_book_playdate_2'] ?>
                        </u>
                        <br style="line-height: 30px;">
                        <br>
                        <button class="bookinimage">
                            BOOK
                        </button>
                    </div>
                </div>
            </div>
            <div class="place1">
                <img src="<?= $playdates[1]['gambar_book_a_playdate'] ?>">
                <div class="purple2">
                    <div class="inside_purple2">
                        <label style="font-weight: 600;" class="place_label"><?= $playdates[1]['tempat_book_playdate'] ?></label>
                        <br><br>
                        Available Date: <?= date('d M Y', strtotime($playdates[1]['available_date_book_playdate_1']))  ?>, 
                                        <?= date('d M Y', strtotime($playdates[1]['available_date_book_playdate_2']))  ?>,
                                        <?= date('d M Y', strtotime($playdates[1]['available_date_book_playdate_3']))  ?>
                        <br>
                        Area: <?= $playdates[1]['area_book_playdate'] ?>
                        <br style="line-height: 30px;">
                        Address : 
                        <u>
                            <?= $playdates[1]['address_book_playdate_1'] ?> 
                            <br>
                            <?= $playdates[1]['address_book_playdate_2'] ?>
                        </u>
                        <br style="line-height: 30px;">
                        <br>
                        <button class="bookinimage">
                            BOOK
                        </button>
                    </div>
                </div>
            </div>
            <div class="place1">
                <img src="<?= $playdates[2]['gambar_book_a_playdate'] ?>">
                <div class="purple2">
                    <div class="inside_purple2">
                        <label style="font-weight: 600;" class="emporium_label"><?= $playdates[2]['tempat_book_playdate'] ?></label>
                        <br><br>
                        Available Date: <?= date('d M Y', strtotime($playdates[2]['available_date_book_playdate_1']))  ?>, 
                                        <?= date('d M Y', strtotime($playdates[2]['available_date_book_playdate_2']))  ?>,
                                        <?= date('d M Y', strtotime($playdates[2]['available_date_book_playdate_3']))  ?>
                        <br>
                        Area: <?= $playdates[2]['area_book_playdate'] ?>
                        <br style="line-height: 30px;">
                        Address : 
                        <u>
                            <?= $playdates[2]['address_book_playdate_1'] ?>
                        </u>
                        <br style="line-height: 30px;">
                        <br>
                        <button class="bookinimage">
                            BOOK
                        </button>
                    </div>
                </div>
            </div>
            <div class="place1">
                <img src="<?= $playdates[3]['gambar_book_a_playdate'] ?>">
                <div class="purple2">
                    <div class="inside_purple2">
                        <label style="font-weight: 600;" class="pluit_label"><?= $playdates[3]['tempat_book_playdate'] ?></label>
                        <br><br>
                        Available Date: <?= date('d M Y', strtotime($playdates[3]['available_date_book_playdate_1']))  ?>, 
                                        <?= date('d M Y', strtotime($playdates[3]['available_date_book_playdate_2']))  ?>,
                                        <?= date('d M Y', strtotime($playdates[3]['available_date_book_playdate_3']))  ?>
                        <br>
                        Area: <?= $playdates[3]['area_book_playdate'] ?>
                        <br style="line-height: 30px;">
                        Address : 
                        <u>
                            <?= $playdates[3]['address_book_playdate_1'] ?> <br>
                            <?= $playdates[3]['address_book_playdate_2'] ?>
                        </u>
                        <br style="line-height: 30px;">
                        <br>
                        <button class="bookinimage">
                            BOOK
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <div class="what_they_say">
        <div>
            <label class="content_they_say"> What They Say </label>
            <table class="they_say_table">
                <tr>
                    <td>
                        <img src="pic/bubble-one.png">
                    </td>
                    <td>
                        <img src="pic/bubble-two.png">
                    </td>
                    <td>
                        <img src="pic/bubble-three.png">
                    </td>
                </tr>
            </table>
        </div>
        <img src="pic/bgbintang.png" width="100%" height="100%">
    </div>
    <footer class="footer">
        <div class="footer_div">
            Find Your Friends now   (CTA) (Get Started)
            <br style="line-height:0px;">
            ___________________________________________
            <br style="line-height:30px;">
            <table class="table_footer">
                <tr>
                    <td>Your Account</td>

                    <td>Booking a Playdate</td>
                </tr>
                <tr>
                    <td>Sign Up</td>

                    <td>Schedule</td>
                </tr>
                <tr>
                    <td>Login</td>

                    <td>About us</td>
                </tr>
                <tr>
                    <td>Help</td>

                    <td>Learning Kit</td>
                </tr>
                <tr>
                    <td>Become An Affiliate</td>
                </tr>
            </table>
            <br>
             ______________________
             <br />&nbsp;<br />

             __________________________
             <br class="seperate_logo">
             <table class="footer_logos">
                <tr>
                    <td><img src="pic/Group.png"></td>
                    <td><img src="pic/facebook logo.png"></td>
                    <td><img src="pic/Group(1).png"></td>
                    <td><img src="pic/TikTok logo.png"></td>
                </tr>
             </table>
        </div>
        <br />&nbsp;<br />

        <table class="bottom_bar">
            <tr>
                <td> 2022 NARA </td>
                <td> Terms of Services </td>
                <td> Privacy Policy </td>
                <td> Cookie Setting </td>
                <td> Cooking Policy </td>
                <td> Help </td>
            </tr>
        </table>
        <br><br>
    </footer>
</body>
<script src="Js Script/landing_page.js"></script>
</html>
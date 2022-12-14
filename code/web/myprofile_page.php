<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product Page </title>
    <link rel="stylesheet" href="css folder/myprofile_page.css">
</head>
<body>
    <?php
        if(isset($_SESSION['is_login'])){
            $name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
            $birth_year = date('Y', strtotime($_SESSION['birth_date']));
            $age = date('Y') - $birth_year;
            $birth_date = date('d/m/Y', strtotime($_SESSION['birth_date']));
            $email = $_SESSION['email'];
            $phone_number = $_SESSION['phone_number'];
            $gender = $_SESSION['gender'];
            $address = $_SESSION['address'];

            $first_row_profile = '<a href="myprofile_page.php" class="sign_in_login_div_signin">'. $_SESSION["first_name"] .'</a>';
            $second_row_profile = '<a href="logout.php" class="sign_in_login_div_logout"> Logout</a>';
        }
        else{
            $first_row_profile = '<a href="sign_up_page.html" class="sign_in_login_div_signin"> Sign Up </a>';
            $second_row_profile = '<a href="login_page.html" class="sign_in_login_div_login"> Login </a>';
        }
    ?>
    <div class="navbar">
        <table>
            <tr class="navbarcontent">
                <td><img src="pic/My project 1.svg"></td>
                <td><a href="landing_page.php"> HOME </a></td> 
                <td> SCHEDULE </td>
                <td> LEARNING KIT </td>
                <td> FIND A FRIEND </td>
                <td><a href="product_page.php"> BOOK A PLAYDATE </a></td>
                <td>
                    <div class="searchbox">
                        <input type="text" placeholder="SEARCH" class="input">
                        <button type="submit">
                            <img src="pic/search-md.png" width="80%" height="80%">
                        </button>
                    </div>
                </td>
                <td class="shoppingcart">
                    <img src="pic/shopping-cart-01.png" width="80%" height="80%">
                </td>
                <td class="chat_icon">
                    <img src="pic/chat_icon.png" width="70%" height="70%">
                </td>
                <td class="usercircle">
                    <button class="toggle" onclick="showingDiv()">
                        <img src="pic/usercircle.png" width="80%" height="80%">
                    </button>
                </td>
            </tr>
        </table>
    </div>

    <div class="sign_in_login_div" id="btn">
        <?= $first_row_profile ?>
        <br>
        <?= $second_row_profile ?>
    </div>

    <div class="sectionone"><!--semua posisi div diubah jaadi relative jadi sesuai ama pagesize-->
        <table class="place_options">
            <tr>
                <td class="title1">
                    My Profile
                </td>
                <td>
                    <button class="flipback">
                        <img src="pic/flip-backward.png" width="70%" height="70%">
                    </button><!--bisa diubah ke img-->
                    <br>
                    <label class="back_label_top"> Back </label>
                </td>
            </tr>
        </table>
        <!---
        <label class="underline_long" id="underlines"> ___________________________ </label>
        <label class="underline_long2" id="underlines"> ___________________________ </label>
        <label class="underline_long3" id="underlines"> ___________________________ </label>
        <label class="underline_long4" id="underlines"> ___________________________ </label>
        <label class="underline_long5" id="underlines"> ___________________________ </label>
        <label class="underline_long6" id="underlines"> ___________________________ </label>
        -->
        <div class="main">
            <div class="produk">
                <div>
                    <button class="buttonprofile">My Profile</button><!--bisa jadiin href / button terserah-->
                </div>
                <div>
                    <button class="buttonmyfavorite">My Favorite</button>
                </div>
                <div>
                    <button>Friends List (6)</button><!--jadiin dropdownlist-->
                </div>
                <div>
                    <button>Friends Request (8)</button>
                </div>
                <div>
                    <button>Friends Request (8)</button>
                </div>
                <div>
                    <button onclick="showTransactionHistory()">Transaction History</button>
                </div>
                <div>
                    <a href="" class="sign_out_produk">Sign out</a>
                </div>
            </div>
            <div class="profile" id="profile_section">
                <div class="profile_title">
                    <div class="My_Profile_Picture_text">
                        My Profile Picture
                    </div>
                    <div class="My_Bio_text">
                        My Bio
                    </div>
                </div>
                <div class="myprofile">
                    <div class="myprofile_left">
                        <div class="picture">
                            <span><img src="pic/Ellipse 125.png" width="120px" height="120px"></span>
                        </div>
                        <div class="change_profile_myprofilepic">
                            <a href="">Change Profile</a>
                        </div>
                    </div>
                    <div class="myprofile_right">
                        <div class="Name">
                            <div class="Name_text">
                                Name
                            </div>
                            <div class="Name_ans">
                                <?= $name ?>
                            </div>
                        </div>
                        <div class="Age">
                            <div class="Age_text">
                                Age
                            </div>
                            <div class="Age_ans">
                                <?= $age ?>
                            </div>
                        </div>
                        <div class="Date_of_birth">
                            <div class="Date_of_birth_text">
                                Date of Birth
                            </div>
                            <div class="Date_of_birth_ans">
                                <?= $birth_date ?>
                            </div>
                        </div>
                        <div class="Email">
                            <div class="Email_text">
                                Email
                            </div>
                            <div class="Email_ans">
                                <?= $email ?>
                            </div>
                        </div>
                        <div class="Phone_number">
                            <div class="Phone_number_text">
                                Phone number
                            </div>
                            <div class="Phone_number_ans">
                                <?= "+62 " . $phone_number ?>
                            </div>
                        </div>
                        <div class="Address">
                            <div class="Address_text">
                                Address
                            </div>
                            <div class="Address_ans">
                                <?= $address ?>
                            </div>
                        </div>
                    </div>
                </div>

        <label class="underline_long7" id="underlines"> ___________________________ </label>
        <label class="underline_long8" id="underlines"> ___________________________ </label>
        <label class="underline_long9" id="underlines"> ___________________________ </label>
        <label class="underline_long10" id="underlines"> ___________________________ </label>
        <label class="underline_long11" id="underlines"> ___________________________ </label>
        <label class="underline_long12" id="underlines"> ___________________________ </label>

        <div class="profile_title">
            <div class="children_Picture_text">
                Children Picture
            </div>
            <div class="My_Bio_text_children">
                My Bio
            </div>
        </div>
                <div class="chidren_profile">
                    <div class="myprofile_left">
                        <div class="picture">
                            <span><img src="pic/faces/Ellipse 121.png" width="120px" height="120px"></span>
                        </div>
                        <div class="change_profile_myprofilepic">
                            <a href="">Change Profile</a>
                        </div>
                        <div class="star_rating"><!--bisa diubah classnya biar sama ama page lain-->
                            <img src="pic/4 setengah 12 org.png" height="100%" width="100%" style="padding-left:30px;">
                        </div>
                    </div>
                    <div class="myprofile_right_child">
                        <div class="Name">
                            <div class="Name_text">
                                Name
                            </div>
                            <div class="Name_ans">
                                Melissa K
                            </div>
                        </div>
                        <div class="Age">
                            <div class="Age_text">
                                Age
                            </div>
                            <div class="Age_ans">
                                31
                            </div>
                        </div>
                        <div class="Date_of_birth">
                            <div class="Date_of_birth_text">
                                Date of Birth
                            </div>
                            <div class="Date_of_birth_ans">
                                17/05/1991
                            </div>
                        </div>
                        <div class="Email">
                            <div class="Email_text">
                                Email
                            </div>
                            <div class="Email_ans">
                                melissa@xyz.com
                            </div>
                        </div>
                        <div class="Phone_number">
                            <div class="Phone_number_text">
                                Phone number
                            </div>
                            <div class="Phone_number_ans">
                                +62 812 34456788
                            </div>
                        </div>
                        <div class="Address">
                            <div class="Address_text">
                                Address
                            </div>
                            <div class="Address_ans">
                                Jl.Abc No. 12, Jakarta Barat
                            </div>
                        </div>
                        <div class="child_desc">
                            cheerful kid who likes painting and enjoys nature. 
                            She is about to be in primary school, 
                            so some friends would be great to help her socialize.
                        </div>
                    </div>
                </div>
                <div class="addchildren">
                    <button>
                        <img src="pic/plus bulat.png">
                    </button>
                </div>
            </div>
            <div class="myfav">
                <div class="place_text"><!--buat text lu bisa jadiin satu aj cssnya-->
                    Place
                </div>
                <div class=""><!--masukin yang udah lu buat itu-->
                    xxx
                </div>
                <div class="learning_kit_text">
                    Learning Kit
                </div>
                <div class="">
                    xxx
                </div>
            </div>

            <div class="friends_list"><!--tambahin container yg udah dibuat-->
                <div class="searchbox_friends_list">
                <input type="text" placeholder="SEARCH">
                <button> <img src="pic/search-md.png" width="80%" height="80%"> </button>
                </div>
                <div class="friend_one">
                    <img src="pic/3faces.png" height="50px">
                    <label class="friend_list_top"> Angel, Mira, Nicole </label>
                    <label class="friend_list_below"> Natasha Witi </label>
                </div>
                <img src="pic/chat_icon.png" class="chat_icon_in_friend_list">
                <div class="friend_two">
                    <img src="pic/3faces.png" height="50px">
                    <label class="friend_list_top"> Laura, Leis, Axel </label>
                    <label class="friend_list_below"> Yolanda </label>
                </div>
                <img src="pic/chat_icon.png" class="chat_icon_in_friend_list">
                <div class="friend_three">
                    <img src="pic/3faces.png" height="50px">
                    <label class="friend_list_top"> Andrew, Daniel , Siti </label>
                    <label class="friend_list_below"> Verstappen </label>
                </div>
                <img src="pic/chat_icon.png" class="chat_icon_in_friend_list">
                <div class="friend_four">
                    <img src="pic/3faces.png" height="50px">
                    <label class="friend_list_top"> Valerie, Watson, Brim </label>
                    <label class="friend_list_below"> Marcus </label>
                </div>
                <img src="pic/chat_icon.png" class="chat_icon_in_friend_list">
                <div class="friend_five">
                    <img src="pic/3faces.png" height="50px">
                    <label class="friend_list_top"> Tira, Michael, Max </label>
                    <label class="friend_list_below"> Agnes </label>
                </div>
                <img src="pic/chat_icon.png" class="chat_icon_in_friend_list">
                <div class="friend_six">
                    <img src="pic/3faces.png" height="50px">
                    <label class="friend_list_top"> Laura, Siri, Aileen </label>
                    <label class="friend_list_below"> Vanessa </label>
                </div>
                <img src="pic/chat_icon.png" class="chat_icon_in_friend_list">
            </div>

            <div class="frienda_req"><!--tambahin container yg udah dibuat-->

            </div>

            <div class="transaction_history"><!--nyambung ama database-->

            </div>

            <div class="trans_history_section" id="trans_history">
                <div class="history_one">
                    <img src="pic/Screenshot (389) 1.png">
                    <label class="hist_one_name_of_service"> Tamasya </label>
                    <label class="hist_one_day"> Wednesday </label>
                    <br>
                    <label class="hist_one_session_and_time"> Session 1 | 10.00 - 11.00 </label>
                    <br>
                    <label class="hist_one_place"> Central Park </label>
                    <label class="hist_one_status"> Completed </label>
                    <button class="hist_one_review"> Review </button>
                    <br>
                    <button class="hist_one_book_again"> Book Again </button>
                </div>
                <div class="history_two">
                    <img src="pic/Screenshot (389) 1.png">
                    <label class="hist_two_name_of_service"> Tamasya </label>
                    <label class="hist_two_day"> Wednesday </label>
                    <br>
                    <label class="hist_two_session_and_time"> Session 1 | 10.00 - 11.00 </label>
                    <br>
                    <label class="hist_two_place"> Central Park </label>
                    <label class="hist_two_status"> Completed </label>
                    <button class="hist_two_review"> Review </button>
                    <br>
                    <button class="hist_two_book_again"> Book Again </button>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer">
        <div class="footerdiv">
            Find Your Friends now   (CTA) (Get Started)
            <br style="line-height:0px;">
            ___________________________________________
            <br style="line-height:30px;">
            <table class="tablefooter">
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
                 <br class="seperatelogo">
                 <table class="footerlogos">
                    <tr>
                        <td><img src="pic/Group.png"></td>
                        <td><img src="pic/facebook logo.png"></td>
                        <td><img src="pic/Group(1).png"></td>
                        <td><img src="pic/TikTok logo.png"></td>
                    </tr>
                 </table>
            </div>
            <br />&nbsp;<br />
    
            <table class="bottombar">
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
<script src="Js Script/myprofile_page.js"></script>
</html>
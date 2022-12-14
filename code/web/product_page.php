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
    <link rel="stylesheet" href="css folder/product_page.css">
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
    <div class="navbar">
        <table>
            <tr class="navbarcontent">
                <td> 
                    <img src="pic/My project 1.svg">
                </td>
                <td>
                      <a href="landing_page.php"> HOME </a> 
                </td>
                <td>
                    SCHEDULE
                </td>
                <td>
                    <a href=""> LEARNING KIT </a>
                </td>
                <td>
                    FIND A FRIEND
                </td>
                <td>
                    <a href=""> BOOK A PLAYDATE </a>
                </td>
                <td class="shoppingcart">
                    <img src="pic/shopping-cart-01.png" width="80%" height="80%">
                </td>
                <td>
                    <div class="searchbox">
                        <input type="text" placeholder="SEARCH" class="input">
                        <button type="submit">
                            <img src="pic/search-md.png" width="80%" height="80%">
                        </button>
                </div>
                </td>
                <td class="usercircle">
                    <button class="toggletwo" onclick="showloginsection()">
                        <img src="pic/usercircle.png" width="80%" height="80%">
                    </button>
                </td>
            </tr>
        </table>
    </div>

    <div class="signin_login_div" id="btntwo">
        <?= $first_row_profile ?>
        <br>
        <?= $second_row_profile ?>
    </div>

        <div class="sectionone">
            <table class="place_options">
                <tr>
                    <td>
                        <!--
                        <button class="left_button_img">
                        <img src="pic/button left.png">
                        -->
                        </button>
                    </td>

                    <td class="place_name"><!--kalo segitiganya mau dipindahin atau dikecilin tambahin td atau div di dalam td class ini-->
                        CENTRAL PARK &#9660<!--kalo mau diubah jadi button-->
                    </td>
                    <td>
                        <!---
                        <button class="right_button_img">
                        <img src="pic/button right.png">
                        </button>
                        -->
                    </td>
                </tr>
                <tr>    
                    <td>

                    </td>
                    <td class="place_rating">
                        <img src="pic/star-rating.png">
                    </td>
                </tr>
            </table>
            <div class="background_for_grid_choice"></div>
            <div class="grid_of_places_choices">
                <div class="grid_item_city_one">    Jakarta        </div>
                <div class="grid_item_city_two">    Tangerang   </div>
                <div class="grid_item_places_name">    Central Park                </div>
                <div class="grid_item_places_name">    Emporium Mall            </div>
                <div class="grid_item_places_name">Living World                    </div>
                <div class="grid_item_places_name">    Plaza Indonesia          </div>
                <div class="grid_item_places_name">    Pluit Village                </div>
                <div class="grid_item_places_name">    AEON Mall                  </div>
                <div class="grid_item_places_name">    Mall Taman Anggrek  </div>
                <div class="grid_item_places_name">    Mall of Indonesia        </div>
                <div class="grid_item_places_name">    Summarecon Mall Serpong   </div>
                <div class="grid_item_places_name">    Gandaria City Mall         </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">    Tangerang City Mall      </div>
                <div class="grid_item_places_name">   Pondok Indah Mall</div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   Supermal Karawaci  </div>
                <div class="grid_item_places_name">   Mall Kelapa Gading  </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   Metropolis Town Square </div>
                <div class="grid_item_places_name">   Lippo Mall</div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   Bandara City Mall  </div>
                <div class="grid_item_places_name">   Plaza Senayan</div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   Mall Bale Kota </div>
                <div class="grid_item_places_name">   Senayan City </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   The Breeze BSD City</div>
                <div class="grid_item_places_name">   Kota Kasablanka </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   Mall Cipinang Indah </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   </div>
                <div class="grid_item_places_name">   Grand Indonesia</div>
            </div>
            <table>
                <td class="share_icon">
                    <img src="pic/share-01.png">
                </td>
                <td>
                    <u> Share </u>
                </td>
                <td class="heart_icon">
                    <img src="pic/heart-rounded.png">
                </td>
                <td>
                    <u> Save </u>
                </td>
            </table>
            <br><br>
            <label class="select_learning_kit"> Select Learning Kit </label>
            <br>
            <label class="tick_to_select"> 
                <img src="pic/select_icon.png" width="8%" height="8%" style="margin-left: -3px;"> 
            </label>
        </div>


        <div class="grid1">
            <div class="grid_item2">
                <div class="grid_item_content">
                    <img src="pic/image 35.png" class="grid_img">
                    <div class="grid_item_buttons">
                        <button class="select_button">
                            <img src="pic/grid-icons/select_default.png" class="select_img" onmouseover="this.src='pic/grid-icons/select_hover.png'" onmouseout="this.src='pic/grid-icons/select_default.png'">
                        </button>
                        <br>
                        <button class="like_button">
                            <img src="pic/grid-icons/like_default.png" class="like_img" onmouseover="this.src='pic/grid-icons/like_hover.png'" onmouseout="this.src='pic/grid-icons/like_default.png'">
                        </button>
                        <br>
                        <button class="share_button">
                            <img src="pic/grid-icons/share_default.png" onmouseover="this.src='pic/grid-icons/share_hover.png'" onmouseout="this.src='pic/grid-icons/share_default.png'">
                        </button>
                    </div>
                    <div class="grid_item_text">
                        <label class="grid_item_header"> My Body </label><br>
                        <label class="grid_item_header_content">Learn more human body</label><br>
                        <label class="grid_item_header_content">parts</label><br>
                        <label class="grid_item_header_content">6-8 years old</label><br>
                        <label class="grid_item_header_content">Session 1 (10.00-11.00)</label> <br>
                        <label class="grid_item_header_content">5/8 attendants</label><br>
                        <label class="grid_item_header_content">35 times booked</label><br>
                        <img src="pic/easy-big.png" class="grid_item_difficulty">
                        <label class="grid_item_price"> Rp. XXX.XXX </label>
                        <div class="grid_item_days">
                            <button class="grid_item_day_one notpurple"> Mon </button>
                            <button class="grid_item_day_two notpurple"> Wed </button>
                            <button class="grid_item_day_three notpurple"> Fri </button>
                            <button class="grid_item_day_four notpurple"> Sun </button>
                        </div>
                    </div>
                    <button class="dropdown_button">
                      <img src="pic/down.png" class="down_img">
                      <img src="pic/up.png" class="up_img">
                    </button>
                </div>
            </div>
            <div class="grid_item2">
                <div class="grid_item_content">
                    <img src="pic/image 37.png" class="grid_img">
                    <div class="grid_item_buttons">
                        <button class="select_button" >
                            <img src="pic/grid-icons/select_default.png" class="select_img" onmouseover="this.src='pic/grid-icons/select_hover.png'" onmouseout="this.src='pic/grid-icons/select_default.png'">
                        </button>
                        <br>
                        <button class="like_button">
                            <img src="pic/grid-icons/like_default.png" class="like_img" onmouseover="this.src='pic/grid-icons/like_hover.png'" onmouseout="this.src='pic/grid-icons/like_default.png'">
                        </button>
                        <br>
                        <button class="share_button">
                            <img src="pic/grid-icons/share_default.png" onmouseover="this.src='pic/grid-icons/share_hover.png'" onmouseout="this.src='pic/grid-icons/share_default.png'">
                        </button>
                    </div>
                    <div class="grid_item_text">
                        <label class="grid_item_header"> Pekerjaan </label><br>
                        <label class="grid_item_header_content">Learn more human body</label><br>
                        <label class="grid_item_header_content">parts</label><br>
                        <label class="grid_item_header_content">6-8 years old</label><br>
                        <label class="grid_item_header_content">Session 1 (10.00-11.00)</label> <br>
                        <label class="grid_item_header_content">5/8 attendants</label><br>
                        <label class="grid_item_header_content">35 times booked</label><br>
                        <img src="pic/easy-big.png" class="grid_item_difficulty">
                        <label class="grid_item_price"> Rp. XXX.XXX </label>
                        <div class="grid_item_days">
                            <button class="grid_item_day_one notpurple"> Mon </button>
                            <button class="grid_item_day_two notpurple"> Wed </button>
                            <button class="grid_item_day_three notpurple"> Fri </button>
                            <button class="grid_item_day_four notpurple"> Sun </button>
                        </div>
                    </div>
                    <button class="dropdown_button">
                        <img src="pic/down.png" class="down_img">
                        <img src="pic/up.png" class="up_img">
                    </button>
                </div>
            </div>
            <div class="grid_item2">
                <div class="grid_item_content">
                    <img src="pic/image%2041.png" class="grid_img">
                    <div class="grid_item_buttons">
                        <button class="select_button" >
                            <img src="pic/grid-icons/select_default.png" class="select_img" onmouseover="this.src='pic/grid-icons/select_hover.png'" onmouseout="this.src='pic/grid-icons/select_default.png'">
                        </button>
                        <br>
                        <button class="like_button">
                            <img src="pic/grid-icons/like_default.png" class="like_img" onmouseover="this.src='pic/grid-icons/like_hover.png'" onmouseout="this.src='pic/grid-icons/like_default.png'">
                        </button>
                        <br>
                        <button class="share_button">
                            <img src="pic/grid-icons/share_default.png" onmouseover="this.src='pic/grid-icons/share_hover.png'" onmouseout="this.src='pic/grid-icons/share_default.png'">
                        </button>
                    </div>
                    <div class="grid_item_text">
                        <label class="grid_item_header"> Tamasya </label><br>
                        <label class="grid_item_header_content">Learn more human body</label><br>
                        <label class="grid_item_header_content">parts</label><br>
                        <label class="grid_item_header_content">6-8 years old</label><br>
                        <label class="grid_item_header_content">Session 1 (10.00-11.00)</label> <br>
                        <label class="grid_item_header_content">5/8 attendants</label><br>
                        <label class="grid_item_header_content">35 times booked</label><br>
                        <img src="pic/easy-big.png" class="grid_item_difficulty">
                        <label class="grid_item_price"> Rp. XXX.XXX </label>
                        <div class="grid_item_days">
                            <button class="grid_item_day_one notpurple"> Mon </button>
                            <button class="grid_item_day_two notpurple"> Wed </button>
                            <button class="grid_item_day_three notpurple"> Fri </button>
                            <button class="grid_item_day_four notpurple"> Sun </button>
                        </div>
                    </div>
                    <button class="dropdown_button">
                        <img src="pic/down.png" class="down_img">
                        <img src="pic/up.png" class="up_img">
                    </button>
                </div>
            </div>
            <div class="grid_item2">
                <div class="grid_item_content">
                    <img src="pic/image%2045.png" class="grid_img">
                    <div class="grid_item_buttons">
                        <button class="select_button" >
                            <img src="pic/grid-icons/select_default.png" class="select_img" onmouseover="this.src='pic/grid-icons/select_hover.png'" onmouseout="this.src='pic/grid-icons/select_default.png'">
                        </button>
                        <br>
                        <button class="like_button">
                            <img src="pic/grid-icons/like_default.png" class="like_img" onmouseover="this.src='pic/grid-icons/like_hover.png'" onmouseout="this.src='pic/grid-icons/like_default.png'">
                        </button>
                        <br>
                        <button class="share_button">
                            <img src="pic/grid-icons/share_default.png" onmouseover="this.src='pic/grid-icons/share_hover.png'" onmouseout="this.src='pic/grid-icons/share_default.png'">
                        </button>
                    </div>
                    <div class="grid_item_text">
                        <label class="grid_item_header"> Day and Night </label><br>
                        <label class="grid_item_header_content">Learn more human body</label><br>
                        <label class="grid_item_header_content">parts</label><br>
                        <label class="grid_item_header_content">6-8 years old</label><br>
                        <label class="grid_item_header_content">Session 1 (10.00-11.00)</label> <br>
                        <label class="grid_item_header_content">5/8 attendants</label><br>
                        <label class="grid_item_header_content">35 times booked</label><br>
                        <img src="pic/easy-big.png" class="grid_item_difficulty">
                        <label class="grid_item_price"> Rp. XXX.XXX </label>
                        <div class="grid_item_days">
                            <button class="grid_item_day_one notpurple"> Mon </button>
                            <button class="grid_item_day_two notpurple"> Wed </button>
                            <button class="grid_item_day_three notpurple"> Fri </button>
                            <button class="grid_item_day_four notpurple"> Sun </button>
                        </div>
                    </div>
                    <button class="dropdown_button">
                        <img src="pic/down.png" class="down_img">
                        <img src="pic/up.png" class="up_img">
                    </button>
                </div>
            </div>
            <div class="grid_item2">
                <div class="grid_item_content">
                    <img src="pic/image%2046.png" class="grid_img">
                    <div class="grid_item_buttons">
                        <button class="select_button" >
                            <img src="pic/grid-icons/select_default.png" class="select_img" onmouseover="this.src='pic/grid-icons/select_hover.png'" onmouseout="this.src='pic/grid-icons/select_default.png'">
                        </button>
                        <br>
                        <button class="like_button">
                            <img src="pic/grid-icons/like_default.png" class="like_img" onmouseover="this.src='pic/grid-icons/like_hover.png'" onmouseout="this.src='pic/grid-icons/like_default.png'">
                        </button>
                        <br>
                        <button class="share_button">
                            <img src="pic/grid-icons/share_default.png" onmouseover="this.src='pic/grid-icons/share_hover.png'" onmouseout="this.src='pic/grid-icons/share_default.png'">
                        </button>
                    </div>
                    <div class="grid_item_text">
                        <label class="grid_item_header"> Spell The Words </label><br>
                        <label class="grid_item_header_content">Learn more human body</label><br>
                        <label class="grid_item_header_content">parts</label><br>
                        <label class="grid_item_header_content">6-8 years old</label><br>
                        <label class="grid_item_header_content">Session 1 (10.00-11.00)</label> <br>
                        <label class="grid_item_header_content">5/8 attendants</label><br>
                        <label class="grid_item_header_content">35 times booked</label><br>
                        <img src="pic/easy-big.png" class="grid_item_difficulty">
                        <label class="grid_item_price"> Rp. XXX.XXX </label>
                        <div class="grid_item_days">
                            <button class="grid_item_day_one notpurple"> Mon </button>
                            <button class="grid_item_day_two notpurple"> Wed </button>
                            <button class="grid_item_day_three notpurple"> Fri </button>
                            <button class="grid_item_day_four notpurple"> Sun </button>
                        </div>
                    </div>
                    <button class="dropdown_button">
                        <img src="pic/down.png" class="down_img">
                        <img src="pic/up.png" class="up_img">
                    </button>
                </div>
              </div>
              <div class="grid_item2">
                <div class="grid_item_content">
                    <img src="pic/image%2047.png" class="grid_img">
                    <div class="grid_item_buttons">
                        <button class="select_button" >
                            <img src="pic/grid-icons/select_default.png" class="select_img" onmouseover="this.src='pic/grid-icons/select_hover.png'" onmouseout="this.src='pic/grid-icons/select_default.png'">
                        </button>
                        <br>
                        <button class="like_button">
                        <img src="pic/grid-icons/like_default.png" class="like_img" onmouseover="this.src='pic/grid-icons/like_hover.png'" onmouseout="this.src='pic/grid-icons/like_default.png'">
                        </button>
                        <br>
                        <button class="share_button">
                            <img src="pic/grid-icons/share_default.png" onmouseover="this.src='pic/grid-icons/share_hover.png'" onmouseout="this.src='pic/grid-icons/share_default.png'">
                        </button>
                    </div>
                    <div class="grid_item_text">
                        <label class="grid_item_header"> Tap and Slice </label><br>
                        <label class="grid_item_header_content">Learn more human body</label><br>
                        <label class="grid_item_header_content">parts</label><br>
                        <label class="grid_item_header_content">6-8 years old</label><br>
                        <label class="grid_item_header_content">Session 1 (10.00-11.00)</label> <br>
                        <label class="grid_item_header_content">5/8 attendants</label><br>
                        <label class="grid_item_header_content">35 times booked</label><br>
                        <img src="pic/easy-big.png" class="grid_item_difficulty">
                        <label class="grid_item_price"> Rp. XXX.XXX </label>
                        <div class="grid_item_days">
                            <button class="grid_item_day_one notpurple"> Mon </button>
                            <button class="grid_item_day_two notpurple"> Wed </button>
                            <button class="grid_item_day_three notpurple"> Fri </button>
                            <button class="grid_item_day_four notpurple"> Sun </button>
                        </div>
                    </div>
                    <button class="dropdown_button">
                        <img src="pic/down.png" class="down_img">
                        <img src="pic/up.png" class="up_img">
                    </button>
                </div>
            </div>
        </div>
        <br><br>
        <div class="dropdown_grid">
            <img src="pic/down.png" class="down_grid">
            <img src="pic/up.png" class="up_grid">
        </div>
        <br>
        <div class="blur_popup"></div>
        <div class="pop_up_share_learningkit">
            <table>
                <tr>
                    <td class="share_learningkit_header"> Share Learning Kit to </td>
                </tr>
                <tr>
                    <td>
                        <div class="share_learningkit_searchbar">
                            <input type="text" placeholder="search" class="share_learningkit_input">
                            <button type="submit" class="share_learningkit_magnifying_glass">
                                <img src="pic/search-md2.png" width="80%" height="80%">
                            </button>
                        </div>
                    </td>
                    <td class="copy_link_learningkit">
                         copy link 
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        <div class="share_learningkit_list_of_friends">
                                <img src="pic/faces/Ellipse 136.png" width="20" height="20%"> Mellisa Suprapto <br/>
                                <p> <img src="pic/faces/Ellipse 137.png" width="20" height="20%"> Valerie Prayoga <br/>
                                <p> <img src="pic/faces/Ellipse 135.png" width="20" height="20%"> Tiffany Angelica Lance <br/>
                        </div>
                    </td>
                    <td style="position:relative; left:-350px; top: 12px; font-family: Lato; color: #575757;">
                        Share to :
                    </td>
                </tr>
                <tr class="share_to_logos">
                    <td><img src="pic/Group.png"></td>
                    <td><img src="pic/facebook logo.png"></td>
                    <td><img src="pic/Group(1).png"></td>
                    <td><img src="pic/TikTok logo.png"></td>
                    <td><img src="pic/whatsapp.png"></td>
                </tr>
                <tr>
                <td>
                    <div class="learningkit_friends_container">
                        <div>
                            <img src="pic/left-arrow.png" class="left_arrow">
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 121.png">
                            <label> Jen </label>
                            <label> Dinda J. </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 122.png">
                            <label> Bill </label>
                            <label> Messy K. </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 124.png">
                            <label> Vee </label>
                            <label> Angelina </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 134.png">
                            <label> Lois </label>
                            <label> Carolina </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 135.png">
                            <label> Pru </label>
                            <label> Anggi </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 123.png">
                            <label> Wendy </label>
                            <label> Melissa </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 133.png">
                            <label> Mike </label>
                            <label> Adinda </label>
                        </div>
                        <div>
                            <img src="pic/right-arrow.png" class="right_arrow">
                        </div>
                    </div>
                        <div>
                            <a href="">
                            <button class="friends_share">  SHARE </button>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="pop_up_share_location">
            <table>
                <tr>
                    <td class="share_location_header"> Share Location to </td>
                </tr>
                <tr>
                    <td>
                        <div class="share_location_searchbar">
                            <input type="text" placeholder="search" class="share_location_input">
                            <button type="submit" class="share_location_magnifying_glass">
                                <img src="pic/search-md2.png" width="80%" height="80%">
                            </button>
                        </div>
                    </td>
                    <td class="copy_link_location">
                         copy link 
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        <div class="share_location_list_of_friends">
                                <img src="pic/faces/Ellipse 136.png" width="20" height="20%"> Mellisa Suprapto <br/>
                                <p> <img src="pic/faces/Ellipse 137.png" width="20" height="20%"> Valerie Prayoga <br/>
                                <p> <img src="pic/faces/Ellipse 135.png" width="20" height="20%"> Tiffany Angelica Lance <br/>
                        </div>
                    </td>
                    <td style="position:relative; left:-350px; top: 12px; font-family: Lato; color: #575757;">
                        Share to :
                    </td>
                </tr>
                <tr class="share_to_logos_shareloc">
                    <td><img src="pic/Group.png"></td>
                    <td><img src="pic/facebook logo.png"></td>
                    <td><img src="pic/Group(1).png"></td>
                    <td><img src="pic/TikTok logo.png"></td>
                    <td><img src="pic/whatsapp.png"></td>
                </tr>
                <tr>
                <td>
                    <div class="location_friends_container">
                        <div>
                            <img src="pic/left-arrow.png" class="left_arrow_shareloc">
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 121.png">
                            <label> Jen </label>
                            <label> Dinda J. </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 122.png">
                            <label> Bill </label>
                            <label> Messy K. </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 124.png">
                            <label> Vee </label>
                            <label> Angelina </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 134.png">
                            <label> Lois </label>
                            <label> Carolina </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 135.png">
                            <label> Pru </label>
                            <label> Anggi </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 123.png">
                            <label> Wendy </label>
                            <label> Melissa </label>
                        </div>
                        <div>
                            <img src="pic/faces/Ellipse 133.png">
                            <label> Mike </label>
                            <label> Adinda </label>
                        </div>
                        <div>
                            <img src="pic/right-arrow.png" class="right_arrow_shareloc">
                        </div>
                    </div>
                        <div>
                            <a href="">
                            <button class="friends_share_shareloc">  SHARE </button>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="whatyouget">
            <div class="what_you_get_content">
                <label class="what_you_get_label"> What You Get </label>
                
                <div class="what_you_get_tamasya">
                    <img src="pic/Screenshot (389) 1.png" width="224px" height="208px" style="float: left; border-radius: 40px; margin-left: -2px; padding-right: 15px;" >
                    <label class="what_you_get_tamasya_header"> Tamasya </label>
                    <img src="pic/X_Icon.png" class="what_you_get_tamasya_x_icon">
                    <br style="display:block; margin-bottom: 0.5em;">
                    Wednesday
                    <br style="display: block; margin-bottom: 6px;">
                    Session 1 | 10.00-11.00
                    <br  style="display: block; margin-bottom: 6px;">
                    Central Park
                    <img src="pic/faces_and_+3.png" class="what_you_get_tamasya_3faces">
                </div>
                
                <br>
                
                <div class="what_you_get_mybody">
                    <img src="pic/Screenshot (389) 1.png" width="224px" height="208px" style="float: left; border-radius: 40px; margin-left: -2px; padding-right: 15px;" >
                    <label class="what_you_get_mybody_header"> My Body </label>
                    <img src="pic/X_Icon.png" class="what_you_get_mybody_x_icon">
                    <br style="display:block; margin-bottom: 0.5em;">
                    Wednesday
                    <br style="display: block; margin-bottom: 6px;">
                    Session 1 | 10.00-11.00
                    <br  style="display: block; margin-bottom: 6px;">
                    Central Park
                    <img src="pic/faces_and_+2.png" class="what_you_get_tamasya_3faces_plus2">
                </div>

                <div class="book_button_div">
                    <button  class="what_you_get_book_button"> BOOK </button>
                </div>
            </div>
            <img src="pic/bg_whatyouget_revisi.png" class="whatyouget_bg">
        </div>
                

        <br>

        <div class="instructor">
            <label class="instructorlabel"> Instructor </label>
            <table class="instructortable">
                <td><img src="pic/ins-bambang.png"></td>
                <td><img src="pic/ins-bella.png"></td>
            </table>
        </div>

        <div class="rec_learning_kit">
            <br><br>
            <label class="recom_learn_kit"> Recommended Learning Kit </label>
            <table class="three_items">
                <td class="first_container">
                        <div class="container_tamasya">
                            <img src="pic/Screenshot (389) 1.png"><br>
                            <img src="pic/Group 180.png">
                            <br><br><br>
                            <button class="learn_more_button">
                                LEARN MORE
                            </button>
                         <br>
                         </div>
                </td>

                <td class="second_container">
                    <div class="container_tamasya_dua">
                        <img src="pic/Screenshot (389) 1.png"><br>
                        <img src="pic/Group 180.png">
                        <br><br><br>
                        <button class="learn_more_button_dua">
                            LEARN MORE
                        </button>
                        <br>
                    </div>
                 </td>

                <td class="third_container">
                    <div class="container_tamasya_tiga">
                        <img src="pic/Screenshot (389) 1.png"><br>
                        <img src="pic/Group 180.png">
                        <br><br><br>
                        <button class="learn_more_button_tiga">
                            LEARN MORE
                        </button>
                        <br>
                    </div>
                </td>
                
            </table>
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
<script src="Js Script/product_page.js"></script>
</html>
<?php

  include_once("phpHandler/signinHandler.php");
  include_once("class/signinClass.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/singin.css">
    <title>StayTuned</title>
</head>
<body>
<div class="signinContainer">
    <div class="signinTitle">
        <h1>Stay Tuned</h1>
        
    </div>
     
    <div class="formContainer">
      
        <form action="phpHandler/signinHandler.php" method="POST">
            <h2>Create a new acount</h2>
            <p>It's quick and easy.</p>
            <span></span>
            <div class="input">
                <input type="text" name="firstname" namespace placeholder="First name">
                <input type="text" name="lastname" placeholder="last name">
            </div>
            <label>Birthday ?</label>
            <div class="date">
                <select id="month" name="month">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                <select id="day" name="day">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select id="year" name="year">
                    <option value="2025">2025</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                </select>
            </div>
            <label>Gender ?</label>
            <div class="gender">
                <select id="gender" name="gender">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="undecided">Undecided</option>
                </select>
            </div>
            <div class="createAcountDiv">
                <input type="text" name="username" placeholder="Mobile number or email">
                <input type="password" name="password" placeholder="New password">
            </div>
            <div class="plink">
                <p>People who use our service may have uploaded your contact information to</p>
                <p>Stay Tuned <a href="#">Learn more.</a></p>
                
                <p>By clicking Sign Up, you agree to our <a href="#"> Terms, Privacy Policy  </a> and <a href="#"> Cookies Policy.</a> </p>
                <p>You may receive SMS Notifications from us and can opt out any time.</p>
                <div class="signUp">
                    <button name="signUp">Sign Up</button>
                </div>
               
                <a class="alHaveAcount" id="alHaveAcount" href="login.php">Already have an account?</a>
            </div>
        </form>
    </div>
    <div class="footerSignin">
        <div class="footerText">
        <p>    English (US)
            Filipino
            Bisaya
            Español
            日本語
            한국어
            中文(简体)
            العربية
            Português (Brasil)
            Français (France)
            Deutsch
        </p>
        <span>boder top</span>
        <p>Sign UpLog InMessengerStayTuned LiteVideoStayTuned PayStayTuned  StoreStayTuned  QuestRay-Ban StayTuned  AIInstagramThreads</p>
        <p>Voting Information CenterPrivacy PolicyPrivacy CenterAboutCreate adCreate PageDevelopersCareersCookiesAd choices TermsHelp</p>
        <p>Contact Uploading & Non-Users Settings Activity log</p>
        <p>Staytuned © 2025</p>
      </div>
    </div>
 </div>

 <script src="javascript/index.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 <style>
   

 </style>
</body>
</html>
<?php 
  session_start();
  require_once("config.php");
   require_once("phpFunction.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginContainer">

        <div class="titleContent">
            <div class="titleDiv">
                <h1>StayTuned</h1>
                <p>Connect with firends and the world</p>
                <p>around you on Staytuned</p>
                <p style='background-color: gold;'><strong>Programmed By:Oliver Charlie G. Lapinig</strong></p>
            </div>
          

        </div>
        <div class="loginContent">

           
            <form action="phpFunction.php" method="POST">
                <input type="text" name="username" placeholder="Username" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <button name="login" id="btnLogin">Login</button>

                <a href="#">Forgot password?</a>
                <span class="borderTop"></span>
                <button id="btnCreateAcount" onclick="redirecetSignin()">Create new acount</button>
            </form>
             <p class="createpPageparagraph"><strong>Create a Page</strong> for a celebrity, brand or business.</p>
        </div>
        <div class="footerContent">
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
</body>
</html>
<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
.loginContainer{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows:3fr 1fr;

    grid-template-areas: "titleContent loginContent"
                         "footerContent";

height: 100vh;
width: 100%;
background-color: whitesmoke;

position: relative;
}
.titleContent{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}
.titleContent .titleDiv{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}
.titleDiv >h1{
    color: rgb(16, 108, 247);
    font-weight:bold;
    font-size:50px;
}
.titleDiv > p{
    font-size: 1.5rem;
    text-align:start;
}
.loginContent{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    width: 400px;
    height: 370px;
    border-radius:10px 10px;
    margin-top: 50px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
    z-index: 100;

}
.loginContent > form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    gap: 15px;
 
}
form > input{
    padding: 13px;
    width: 370px;
    border-radius:3px;
    border: none;
    /* border: 0.1px solid rgb(167, 163, 163); */
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
    cursor: pointer;
}
form > button{
    padding: 13px;
    width: 370px;
    border-radius:3px;
    border: none;
    cursor: pointer;
}
form #btnLogin{
    background-color: rgb(16, 108, 247);
    color: white;
    font-weight: bold;
}
form > a{
    color: rgb(16, 108, 247);
    font-size: smaller;
    text-decoration: none;
    cursor: pointer;
    transition: 0.5s;
}
form > a:hover{
    text-decoration: underline;

}
form .borderTop{
    background-color: rgba(153, 148, 148, 0.918);
    width: 370px;
    padding: 1px;
    margin: 10px;
}
form #btnCreateAcount{
    background-color: rgba(28, 196, 28, 0.863);
    color: white;
    width: 200px;
    margin:5px 5px;
    font-weight: bold;
    transition: 0.5s;
}
form #btnCreateAcount:hover{
    background-color: rgba(23, 150, 23, 0.863);
    font-weight: bold;
}
.createpPageparagraph{
    position: absolute;
    bottom: 160px;
    color: rgba(99, 98, 98, 0.993);
}
.footerContent{
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px;
   align-items: center;
    background-color: white;
    width: 100%;
    position: absolute;
    bottom: 0;
    padding: 15px;
    font-size: small;
    text-align: start;
    color: rgba(99, 98, 98, 0.993);
}
.footerContent .footerText{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items:flex-start;
    gap: 3px;
}
 /*============================================= Large devices (laptops/desktops, 1200px and up) ===============*/
@media(max-width: 1200px) and (min-width:825px) {
    .loginContainer{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows:3fr 1fr;
    
        grid-template-areas: "titleContent loginContent"
                             "footerContent";
    
    height: 100vh;
    width: 100%;
    background-color: whitesmoke;

    }
    .titleContent{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: start;
        gap: 5px;
    }
    .titleContent .titleDiv{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .titleDiv >h1{
        color: rgb(16, 108, 247);
        font-weight:bold;
        font-size:3rem;
    }
    .titleDiv > p{
        font-size: 1rem;
        text-align:start;
    }
    .loginContent{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        width: 400px;
        height: 350px;
        border-radius:10px 10px;
        margin-top: 180px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
    
            
         position: relative;
         z-index: 100;
    }
    .loginContent > form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 15px;
     
    }
    form > input{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        /* border: 0.1px solid rgb(167, 163, 163); */
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        cursor: pointer;
    }
    form > button{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        cursor: pointer;
    }
    form #btnLogin{
        background-color: rgb(16, 108, 247);
        color: white;
        font-weight: bold;
    }
    form > a{
        color: rgb(16, 108, 247);
        font-size: smaller;
        text-decoration: none;
        cursor: pointer;
        transition: 0.5s;
    }
    form > a:hover{
        text-decoration: underline;
    
    }
    form .borderTop{
        background-color: rgba(153, 148, 148, 0.918);
        width: 370px;
        padding: 1px;
        margin: 5px;
    }
    form #btnCreateAcount{
        background-color: rgba(28, 196, 28, 0.863);
        color: white;
        width: 200px;
        margin:5px 5px;
        font-weight: bold;
        transition: 0.5s;
    }
    form #btnCreateAcount:hover{
        background-color: rgba(23, 150, 23, 0.863);
        font-weight: bold;
    }
    .createpPageparagraph{
        position: absolute;
        bottom: 7px;
        color: rgba(99, 98, 98, 0.993);
    }
    .footerContent{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 3px;
       align-items: center;
        background-color: white;
        width: 100%;
        position: absolute;
        bottom: 0;
        padding:2px;
        font-size: small;
        text-align: start;
        color: rgba(99, 98, 98, 0.993);
    }
    .footerContent .footerText{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items:flex-start;
        gap: 3px;
    }

}

@media (max-width: 824px) and (min-width: 500px){
    .loginContainer{
        display: grid;
        grid-template-rows:1fr 1fr 1fr;
/*     
        grid-template-areas: "titleContent" 
                             "loginContent"
                             "footerContent"; */
    
    height: 100vh;
    width: 100%;
    background-color: whitesmoke;
    

    }
    .titleContent{
   
       gap: 5px;

       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;

       margin-left: 150px;

    }
    .titleContent .titleDiv{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .titleDiv >h1{
        color: rgb(16, 108, 247);
        font-weight:bold;
        font-size:3rem;

    }
    .titleDiv > p{
        font-size: 1rem;
        text-align:start;
        padding: 3px;
        margin-bottom: 5px;
    }
    .loginContent{
        grid-row-start: 2;
        grid-row-end: 4;
 

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        width: 380px;
        height: 340px;
        border-radius:5px 5px;
        margin-top: 0;
        margin-left: 150px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
    
        position: relative;
    }
    .loginContent > form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 10px;
     
    }
    form > input{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        /* border: 0.1px solid rgb(167, 163, 163); */
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        cursor: pointer;
    }
    form > button{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        cursor: pointer;
    }
    form #btnLogin{
        background-color: rgb(16, 108, 247);
        color: white;
        font-weight: bold;
    }
    form > a{
        color: rgb(16, 108, 247);
        font-size: smaller;
        text-decoration: none;
        cursor: pointer;
        transition: 0.5s;
    }
    form > a:hover{
        text-decoration: underline;
    
    }
    form .borderTop{
        background-color: rgba(153, 148, 148, 0.918);
        width: 370px;
        padding: 1px;
        margin: 10px;
    }
    form #btnCreateAcount{
        background-color: rgba(28, 196, 28, 0.863);
        color: white;
        width: 200px;
        margin:5px 5px;
        font-weight: bold;
        transition: 0.5s;
    }
    form #btnCreateAcount:hover{
        background-color: rgba(23, 150, 23, 0.863);
        font-weight: bold;
    }
    .createpPageparagraph{
        position: absolute;
        bottom: 10px;
        color: rgba(99, 98, 98, 0.993);
    }
    .footerContent{
       grid-row-start: 1;
       grid-row-end: 4;

        display: flex;
        flex-direction: column;
        width: 100%;

    }
    .footerContent .footerText{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items:center;
        gap: 3px;
    }
}




@media (max-width: 650px) and (min-width: 500px){

    .loginContainer{
        display: grid;
        grid-template-rows:1fr 1fr 1fr;
/*     
        grid-template-areas: "titleContent" 
                             "loginContent"
                             "footerContent"; */
    
    height: 100vh;
    width: 100%;
    background-color: whitesmoke;
    

    }
    .titleContent{
   
       gap: 5px;

       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;

       margin-left: 60px;

    }
    .titleContent .titleDiv{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .titleDiv >h1{
        color: rgb(16, 108, 247);
        font-weight:bold;
        font-size:3rem;

    }
    .titleDiv > p{
        font-size: 1rem;
        text-align:start;
        padding: 3px;
        margin-bottom: 5px;
    }
    .loginContent{
        grid-row-start: 2;
        grid-row-end: 4;
 

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        width: 380px;
        height: 340px;
        border-radius:5px 5px;
        margin-top: 0;
        margin-left: 60px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
    
        position: relative;
        z-index: 100;
    }
    .loginContent > form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 10px;
     
    }
    form > input{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        /* border: 0.1px solid rgb(167, 163, 163); */
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        cursor: pointer;
    }
    form > button{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        cursor: pointer;
    }
    form #btnLogin{
        background-color: rgb(16, 108, 247);
        color: white;
        font-weight: bold;
    }
    form > a{
        color: rgb(16, 108, 247);
        font-size: smaller;
        text-decoration: none;
        cursor: pointer;
        transition: 0.5s;
    }
    form > a:hover{
        text-decoration: underline;
    
    }
    form .borderTop{
        background-color: rgba(153, 148, 148, 0.918);
        width: 370px;
        padding: 1px;
        margin: 10px;
    }
    form #btnCreateAcount{
        background-color: rgba(28, 196, 28, 0.863);
        color: white;
        width: 200px;
        margin:5px 5px;
        font-weight: bold;
        transition: 0.5s;
    }
    form #btnCreateAcount:hover{
        background-color: rgba(23, 150, 23, 0.863);
        font-weight: bold;
    }
    .createpPageparagraph{
        position: absolute;
        bottom: 10px;
        color: rgba(99, 98, 98, 0.993);
    }
    .footerContent{
       grid-row-start: 1;
       grid-row-end: 4;

        display: flex;
        flex-direction: column;
        width: 100%;

    }
    .footerContent .footerText{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items:center;
        gap: 3px;
    }
}

     /*============================================= Large devices (laptops/desktops, 1200px and up) ===============*/
    @media(max-width: 1200px) and (min-width:825px) {
        .loginContainer{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows:3fr 1fr;
        
            grid-template-areas: "titleContent loginContent"
                                 "footerContent";
        
        height: 100vh;
        width: 100%;
        background-color: whitesmoke;
    
        }
        .titleContent{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: start;
            gap: 5px;
        }
        .titleContent .titleDiv{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }
        .titleDiv >h1{
            color: rgb(16, 108, 247);
            font-weight:bold;
            font-size:3rem;
        }
        .titleDiv > p{
            font-size: 1rem;
            text-align:start;
        }
        .loginContent{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 400px;
            height: 350px;
            border-radius:10px 10px;
            margin-top: 180px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
        
                
             position: relative;
             z-index: 100;
        }
        .loginContent > form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            gap: 15px;
         
        }
        form > input{
            padding: 10px;
            width: 350px;
            border-radius:3px;
            border: none;
            /* border: 0.1px solid rgb(167, 163, 163); */
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
            cursor: pointer;
        }
        form > button{
            padding: 10px;
            width: 350px;
            border-radius:3px;
            border: none;
            cursor: pointer;
        }
        form #btnLogin{
            background-color: rgb(16, 108, 247);
            color: white;
            font-weight: bold;
        }
        form > a{
            color: rgb(16, 108, 247);
            font-size: smaller;
            text-decoration: none;
            cursor: pointer;
            transition: 0.5s;
        }
        form > a:hover{
            text-decoration: underline;
        
        }
        form .borderTop{
            background-color: rgba(153, 148, 148, 0.918);
            width: 370px;
            padding: 1px;
            margin: 5px;
        }
        form #btnCreateAcount{
            background-color: rgba(28, 196, 28, 0.863);
            color: white;
            width: 200px;
            margin:5px 5px;
            font-weight: bold;
            transition: 0.5s;
        }
        form #btnCreateAcount:hover{
            background-color: rgba(23, 150, 23, 0.863);
            font-weight: bold;
        }
        .createpPageparagraph{
            position: absolute;
            bottom: 7px;
            color: rgba(99, 98, 98, 0.993);
        }
        .footerContent{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 3px;
           align-items: center;
            background-color: white;
            width: 100%;
            position: absolute;
            bottom: 0;
            padding:2px;
            font-size: small;
            text-align: start;
            color: rgba(99, 98, 98, 0.993);
        }
        .footerContent .footerText{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:flex-start;
            gap: 3px;
        }
    
    }

    
    @media (max-width: 824px) and (min-width: 601px){
        .loginContainer{
            display: grid;
            grid-template-rows:1fr 1fr 1fr;
    /*     
            grid-template-areas: "titleContent" 
                                 "loginContent"
                                 "footerContent"; */
        
        height: 100vh;
        width: 100%;
        background-color: whitesmoke;
        
    
        }
        .titleContent{
       
           gap: 5px;
    
           display: flex;
           flex-direction: column;
           justify-content: center;
           align-items: center;
    
           margin-left: 150px;
    
        }
        .titleContent .titleDiv{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .titleDiv >h1{
            color: rgb(16, 108, 247);
            font-weight:bold;
            font-size:3rem;
    
        }
        .titleDiv > p{
            font-size: 1rem;
            text-align:start;
            padding: 3px;
            margin-bottom: 5px;
        }
        .loginContent{
            grid-row-start: 2;
            grid-row-end: 4;
     
    
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 380px;
            height: 340px;
            border-radius:5px 5px;
            margin-top: 0;
            margin-left: 150px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
        
            position: relative;
            z-index: 100;
        }
        .loginContent > form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            gap: 10px;
         
        }
        form > input{
            padding: 10px;
            width: 350px;
            border-radius:3px;
            border: none;
            /* border: 0.1px solid rgb(167, 163, 163); */
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
            cursor: pointer;
        }
        form > button{
            padding: 10px;
            width: 350px;
            border-radius:3px;
            border: none;
            cursor: pointer;
        }
        form #btnLogin{
            background-color: rgb(16, 108, 247);
            color: white;
            font-weight: bold;
        }
        form > a{
            color: rgb(16, 108, 247);
            font-size: smaller;
            text-decoration: none;
            cursor: pointer;
            transition: 0.5s;
        }
        form > a:hover{
            text-decoration: underline;
        
        }
        form .borderTop{
            background-color: rgba(153, 148, 148, 0.918);
            width: 370px;
            padding: 1px;
            margin: 10px;
        }
        form #btnCreateAcount{
            background-color: rgba(28, 196, 28, 0.863);
            color: white;
            width: 200px;
            margin:5px 5px;
            font-weight: bold;
            transition: 0.5s;
        }
        form #btnCreateAcount:hover{
            background-color: rgba(23, 150, 23, 0.863);
            font-weight: bold;
        }
        .createpPageparagraph{
            position: absolute;
            bottom: 10px;
            color: rgba(99, 98, 98, 0.993);
        }
        .footerContent{
           grid-row-start: 1;
           grid-row-end: 4;
    
            display: flex;
            flex-direction: column;
            width: 100%;
    
        }
        .footerContent .footerText{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            gap: 3px;
        }

}




 /* Large devices (laptops/desktops, 992px and up) */

@media (max-width: 499px) and (min-width: 320px){
    .loginContainer{
        display: grid;
        grid-template-rows:1fr 1fr 300px;
    
        grid-template-areas: "titleContent" 
                             "loginContent"
                             "footerContent";
    
    height: 100vh;
    width: 100%;
    background-color: whitesmoke;
    
    position: relative;
    }
    .titleContent{
       grid-area: titleContent;
       gap: 5px;

    }
    .titleContent .titleDiv{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .titleDiv >h1{
        color: rgb(16, 108, 247);
        font-weight:bold;
        font-size:3rem;

    }
    .titleDiv > p{
        font-size: 1rem;
        text-align:start;
        padding: 3px;
    }
    .loginContent{
        grid-area: loginContent;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        width: 380px;
        height: 340px;
        border-radius:5px 5px;
        margin-top: 0;
        margin-left: 35px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; 
    
        position: relative;
    }
    .loginContent > form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        gap: 10px;
     
    }
    form > input{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        /* border: 0.1px solid rgb(167, 163, 163); */
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        cursor: pointer;
    }
    form > button{
        padding: 10px;
        width: 350px;
        border-radius:3px;
        border: none;
        cursor: pointer;
    }
    form #btnLogin{
        background-color: rgb(16, 108, 247);
        color: white;
        font-weight: bold;
    }
    form > a{
        color: rgb(16, 108, 247);
        font-size: smaller;
        text-decoration: none;
        cursor: pointer;
        transition: 0.5s;
    }
    form > a:hover{
        text-decoration: underline;
    
    }
    form .borderTop{
        background-color: rgba(153, 148, 148, 0.918);
        width: 370px;
        padding: 1px;
        margin: 10px;
    }
    form #btnCreateAcount{
        background-color: rgba(28, 196, 28, 0.863);
        color: white;
        width: 200px;
        margin:5px 5px;
        font-weight: bold;
        transition: 0.5s;
    }
    form #btnCreateAcount:hover{
        background-color: rgba(23, 150, 23, 0.863);
        font-weight: bold;
    }
    .createpPageparagraph{
        position: absolute;
        bottom: 10px;
        color: rgba(99, 98, 98, 0.993);
    }
    .footerContent{
        grid-area: footerContent;

            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 2px;
            align-items: center;
            background-color: white;
            width: 100%;
            /* position: absolute;
            bottom: 0; */
            margin-left: 20px;
            padding:0;
            font-size: small;
            text-align:center;
            color: rgba(99, 98, 98, 0.993);
        }
    }
    .footerContent .footerText{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items:flex-start;
        gap: 3px;
    }


/*==========================================================  EXAMPLE SIZES SCREEN   ================================*/
@media(max-width: 1200px) and (min-width:500px) {
}


@media (max-width: 499px) and (min-width: 320px){



}

 /* Extra small devices (phones, 600px and down) */
 @media only screen and (max-width: 600px) {}

 /* Small devices (portrait tablets and large phones, 600px and up) */
 @media only screen and (min-width: 600px) {}
 
 /* Medium devices (landscape tablets, 768px and up) */
 @media only screen and (min-width: 768px) {}
 
 /* Large devices (laptops/desktops, 992px and up) */
 @media only screen and (min-width: 992px) {}
 
 /* Extra large devices (large laptops and desktops, 1200px and up) */
 @media only screen and (min-width: 1200px) {} 
   
</style>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>365 Days</title>
        <meta name="description" content="365 Days for Reynville">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div class="scroller">
            <a href="#" id="scrolltop"><img src="images/scrolltop.png"></a>
            <a href="#" id="scrolldown"><img src="images/scrolldown.png"></a>
        </div>
        <div class="daywrapper color-tomato"  id="thedaytop">
            <div class="wrapper" id="daytop">
                <div class="header">
                    <img src="images/sun.png">
                </div>

                <div class="topcontent">
                    <div class="side_greetings for-height">
                        <img src="images/reyn-1.png">
                    </div>
                    <div class="greetings">
                        <img src="images/365days.png">
                        <div>
                            <p>of verses, phrases & greetings</p>
                            <p>for <b>YOU.</b></p>
                        </div>
                    </div>

                    <div class="name">
                        <img src="images/arrow_reyn.png">
                    </div>

                    <div class="sincerely">
                        <img src="images/sincerly.png">
                    </div>
                </div>
            </div>    
        </div>

        <div class="clear"></div>
        
        <div class="daywrapper color-skyblue" id="theday1">
            <div class="wrapper" id="day1">
                <div class="content">
                    <div class="greetings">
                        <span class="daytext">Day 1</span>
                        <img class="lazy" data-original="images/day1.png">
                    </div>
                </div>
            </div> 
        </div>

        <div class="clear"></div>

        <div class="daywrapper color-violetslate" id="theday2">
            <div class="wrapper" id="day2">
                <div class="content">
                    <div class="greetings">
                        <span class="daytext">Day 2</span>
                        <img src="images/day2.png">
                    </div>
                </div>
            </div> 
        </div>
        
        <div class="clear"></div>

        <div class="daywrapper gray-slate" id="message">
            <div class="wrapper" id="message-wrap">
                <div class="topcontent">
                    <div class="greetings">
                        <img src="images/message.png" class="messageimg" id="messagelarge">
                        <img src="images/message-small.png" class="messageimg" id="messagesmall">
                        <img src="images/sent.png" id="messagesent">
                    </div>
                    <form action="message.php" method="post">
                        <textarea name="message" cols="54" rows="4"></textarea>
                        <div class="clearfix"></div>
                        <a href="#" id="messagebutton"><img src="images/send.png"></a>
                    </form>
                </div>
            </div> 
        </div>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/vendor/jquery.lazyload.min.js"></script>
        <script src="js/vendor/jquery.scrollstop.min.js"></script>
        <script src="js/vendor/jquery-scrollto.js"></script>
        <script src="js/vendor/animatescroll.js"></script>
        <script src="js/vendor/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

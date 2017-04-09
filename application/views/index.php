<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo site_url();?>">
    <title>黄宝霞</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="header">
    <!----- start-header---->
    <div id="home">
        <div class="top-header">
            <div class="container">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <!----start-top-nav---->
                <nav class="top-nav">
                    <div class="navbar navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-navbar">
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
                            <img src="img/menu-icon.png">
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-navbar">
                        <ul class="top-nav">
                            <li class="active"><a href="#home" class="scroll">Home </a></li>
                            <li><a href="#about" class="scroll">About</a></li>
                            <li><a href="#services" class="scroll">Services</a></li>
                            <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                            <li><a href="#skills" class="scroll">skills</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div id="banner">
        <div class="container">
            <div class="carousel slide" data-ride="carousel" data-interval="2500" id="slideshow">
<!--                <div class="carousel-inner">-->
<!--                    <div class="item active">-->
<!--                        <img src="holder.js/1200x500/auto/text:follow me">-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <img src="holder.js/1200x500/auto/text:sunshine">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <a href="#slideshow" data-slide="prev" class="left carousel-control">-->
<!--                    <span class="glyphicon glyphicon-chevron-left"></span>-->
<!--                </a>-->
<!--                <a href="#slideshow" data-slide="next" class="right carousel-control">-->
<!--                    <span class="glyphicon glyphicon-chevron-right"></span>-->
<!--                </a>-->
                <div class="carousel-inner">
                    <div class="item active">
                        <h1>Learn to smile</h1>
                        <p>follow me. </p>
                    </div>
                    <div class="item">
                        <h1>Live in the present</h1>
                        <p>follow me. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div id="about" class="about">
    <div class="container">
        <div class="about-head">
            <h3>About</h3>
            <span>Who l am?</span>
            <a href="index.html"><img src="img/zoom.png"></a>
            <p>我活泼阳光，毕业与黑龙江大学，主修软件工程，我认为不论工作还是生活，与人相处，讲究得就是包容，求同，就像W3C，在团队中大家都遵循这个标准，可以减少差异化，方便开发和维护，从而提高了效率，也减少了许多不必要得麻烦.（点上方图片图标，可以看到更真实得我）</p>
        </div>
    </div>
</div>
<div class="portfolio">
    <div class="container">
        <div class="potrfolio-head">
            <h2>This .psd theme is absolutely free!</h2>
            <a class="prt-btn" href="#">Just download it!</a>
        </div>
    </div>
</div>
<div id="portfolio" class="potrfolio-content">
    <div class="container">
        <div class="port-head">
            <h3>Portfolio</h3>
            <p>In my life </p>
        </div>
        <div id="portfoliolist">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 xs sm border1">
                        <div class="view">
                            <img src="img/p-1.png" class="p-photo">
                            <div class="mask">
                                <a class="alert-info" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 xs sm border">
                        <div class="view">
                            <img src="img/p-2.png" class="p-photo">
                            <div class="mask">
                                <a class="alert-info" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 xs sm border">
                        <div class="view">
                            <img src="img/p-3.png" class="p-photo">
                            <div class="mask">
                                <a class="alert-info" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 xs sm border">
                        <div class="view">
                            <img src="img/p-4.png" class="p-photo">
                            <div class="mask">
                                <a class="alert-info" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 xs sm border">
                        <div class="view">
                            <img src="img/p-5.png" class="p-photo">
                            <div class="mask">
                                <a class="alert-info" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- skills -->
<div class="skills" id="skills">
    <div class="container">
        <h3>skills</h3>
        <p>My ess !</p>
        <div class="skills-bottom">
            <div class="green-about">
                <div class="about-green">
                    <h6>Html</h6>
                    <div class="content-green">
                        <div style="width:80%;" >
                        </div>
                    </div>
                </div>
                <div class="about-green">
                    <h6>jQuery</h6>
                    <div class="content-green">
                        <div style="width:40%;" >
                        </div>
                    </div>
                </div>
                <div class="about-green">
                    <h6>Javascript</h6>
                    <div class="content-green">
                        <div style="width:60%;" >
                        </div>
                    </div>
                </div>
                <div class="about-green">
                    <h6>css</h6>
                    <div class="content-green">
                        <div style="width:70%;" >
                        </div>
                    </div>
                </div>
                <div class="about-green">
                    <h6>Photoshop</h6>
                    <div class="content-green">
                        <div style="width:30%;" >
                        </div>
                    </div>
                </div>
                <div class="about-green">
                    <h6>PHP</h6>
                    <div class="content-green">
                        <div style="width:20%;" >
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- skills -->
<div id="contact" class="feedback">
    <div class="container">
        <div class="feed-head">
            <h3>Contact </h3>
            <p>Get in touch!</p>
        </div>
        <div class="feed-contact">
            <div class="col-md-8 contact-form">
                <form>
                    <input type="text" class="textbox" name="C_name" placeholder="Name">
                    <input type="text" class="textbox" name="C_mail"  placeholder="Email">
                    <textarea value="Message" name="C_message"  placeholder="Message" id="message"></textarea>
                    <input type="submit" value="Send a message" name="sub" id="sub">
                </form>
            </div>
            <div class="col-md-4 address">
                <h4>My Information</h4>
                <p>qq:1100476341</p>
                <p>weixin:18845594922</p><br>
                <p>+188 4559 4922</p>
                <p><a href="#" >weibo@healer_xia</a></p>
            </div>
            <div class="footer-icons">
                <ul>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <p>还不知道这该写点什么,数据库等会陆续添加</p>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/holder.js"></script>
<script src="js/index.js"></script>
</body>

</html>




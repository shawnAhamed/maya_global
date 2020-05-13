<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://i.imgur.com/zOHubFX.png" type="image/gif">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Maya | Everyone’s well-being assistant</title>


    <!-- Start google analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-24452987-1', 'auto');
        ga('send', 'pageview');
        @if(isset($source)&&!empty($source))
        ga('send', 'event', { eventCategory: 'HomePage', eventAction: 'View', eventLabel: '<?php echo $source; ?>'});
        window.location.replace('/');
        @endif
    </script>

</head>
<body style="font-family: 'Montserrat', sans-serif;">

<section class="menubar">
    <div class="mycontainer">
        <div style="height:120px;background-color:#314AC4">
        <div class="logodiv">
            <a href="/"><img src="../img/logo.svg" style="width:165px;height:80px; margin-top:20px;"></a>
        </div>
        <div class="menudiv">
            <div class="menuitems">
                <ul class="float-right" style="color: #ffffff">
                    <li class="float-left" >
                        <a class="anchor active" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
{{--                    <li class=" float-left">--}}
{{--                        <a class="anchor" href="/corona">Coronavirus</a>--}}
{{--                    </li>--}}
                    <li class=" float-left">
                        <a class="anchor" href="/services">Services</a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="/about">About</a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="/expert">Experts</a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="https://bit.ly/3dcqeJD"  style="border: 1px solid #fff;border-radius:15px;padding: 5px 15px">Download</a>
                    </li>

                    <li class="float-left dropdown">
                        <a  style="padding:0px 0px 0px 15px;" onclick="navbarshow()" ><i class="fa fa-globe dropbtn" style="font-size: 30px"></i></a>
                        <div>
                            <div style="height: 10px"></div>
                            <div class="dropdown-content" >
                                <a href="/bn" style="font-size: 16px;color: #363636;padding:20px 20px 10px 0px;font-family:Hind Siliguri">বাংলা</a>
                                <hr style="width: 110px;margin-top:0px;margin-bottom: 0px">
                                <a href="/en" style="font-size: 16px;color: #363636;font-weight: bold;padding:10px 20px 10px 0px">English</a>
                                <hr style="width: 110px;margin-top:0px;margin-bottom: 0px">
                                <a href="#"  style="font-size: 12px;color: #363636;padding:10px 15px 15px 10px;margin-bottom: 20px">Learn more about how we are expanding!</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="banner">
    <div class="mycontainer">
        <div class="bannerimg">
            <img src="../img/banner.png" style="height:650px;width:970px;margin-left:200px;margin-top: 30px;">
        </div>
        <div class="bannercontent">
            <div class="" style="height:680px;padding:30px 30px;width:570px;">
                <p style="font-size:80px;line-height:97px;color: #fff;padding:15px 30px;">Everyone’s wellbeing assistant.</p>
                <p style="font-size:30px;line-height:37px;color: #fff;padding:15px 25px">Maya connects you to doctors, mental health counsellors and vetted wellbeing experts.</p>
                <div style="padding:40px 30px">
                    <a class="bannerbtn" href="https://bit.ly/3dcqeJD" style="border-radius:8px;padding:28px 36px;background-color:#363636;color: #ffffff;font-size: 20px;text-decoration: none;height: 80px;width: 210px" target="_blank">Download App</a>
                    <a class="bannerbtn" href="/services" style="border-radius:8px;padding:28px 36px;background-color:#FFFFFF;color: #363636;font-size: 20px;margin-left: 20px;text-decoration: none">Our Services</a>
                </div>
            </div>

        </div>
        <div class="" style="width:570px;float: right;margin-left:20px;">
            <div style="width:21px;float:left;">
                <img src="../img/icon/icon_article.png" style="float:left;height: 21px;width: 24px;margin-top:27px;"/>
            </div>
            <div style="width:545px;float: right;margin-top:20px;padding-left: 20px;">
                <a href="/corona" style="text-decoration: none">   <p style="font-size:16px;color: #707070;line-height: 19px;">Coronavirus (COVID-19): Symptom checker,latest updates and how to get care.</p></a>
            </div>
        </div>
    </div>
</section>



<section class="services" style="margin-top:200px;">
    <div class="mycontainer">
        <div class="botservice">
            <div class="thumbnail text-center">
                <img src="../img/icon/btrfly.png" alt="" style="height:89px;width:89px ">
                <div class="caption">
                    <p style="font-size:20px;color: #363636; margin-bottom: 0rem;">Maya Bot</p>
                    <p style="font-size:40px;color: #363636;line-height:49px; margin-bottom:0rem;">7 million</p>
                    <p style="font-size:16px;color: #363636">Instant interactions with Maya bot in a month, in 4 languages.</p>
                </div>
            </div>
        </div>
        <div class="experservice">
            <div class="thumbnail text-center">
                <img src="../img/icon/qa.png" alt="" style="height: 72px;width: 90px;margin-top: 20px">
                <div class="caption">
                    <p style="font-size:20px;color: #363636; margin-bottom: 0rem;">Expert Answers</p>
                    <p style="font-size:40px;color: #363636;line-height:49px;margin-bottom:0rem;">200,000</p>
                    <p style="font-size:16px;color: #363636">Expert answers per month on physical and mental health.</p>
                </div>
            </div>
        </div>
        <div class="mauservice">
            <div class="thumbnail text-center">
                <img src="../img/icon/health.png" alt="" style="height:90px;width:82px;">
                <div class="caption">
                    <p style="font-size:20px;color: #363636; margin-bottom:0rem;">People Served</p>
                    <p style="font-size:40px;color: #363636;line-height:49px; margin-bottom:0rem;">10 million</p>
                    <p style="font-size:16px;color: #363636">Since its inception, Maya is using different channels to serve its users wherever they are.</p>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="appshow" style="margin-top: 30px;">
        <div class="" style="height:1100px;background-color:#F0F0F0;" >
            <div class="mycontainer">
                <div style="background-color: #F0F0F0;height: 1100px;padding:40px 0px">
                    <div class="mobilebanner text-center" style="margin-bottom:100px">
                        <img src="https://i.imgur.com/JfDL4G5.png" class="img-fluid" style="height:864px;margin: 0 auto;margin-top:80px">
                    </div>
                    <div class="mobilebannercnt" style="margin-top:80px">
                        <p style="font-size:64px;line-height:78px;color:#314AC4;font-weight:500;padding:40px 0px;">All in one app and it’s simple!</p>
                        <hr style="border: transparent;border-bottom: 1px dashed #707070;">
                        <p style="font-size:30px;font-weight: 400;color: #A64DA3">3 million monthly active users</p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-o" style="color: #707070;"></span>
                        <span style="padding-left: 10px;color: #363636;font-size:20px;font-weight: 400;line-height:24px">4.6 Overall rating</span>
                        <hr style="border: transparent;border-bottom: 1px dashed #707070;">
                        <p style="color: #363636;font-size: 30px;line-height:37px;font-weight: 400;padding: 20px 0px;">Maya is re-inventing the way people in developing countries access vetted expert advice. We are accessible through Android, iOS and Web.</p>
                        <a  style="text-decoration: none;" href="https://bit.ly/3dcqeJD" ><img src="../img/icon/gplay.png" style="padding-right:10px;max-height: 60px;width: 170px;"></a>
                        <a  style="text-decoration: none;padding-left:10px" href="https://forms.gle/536kGauP6AaCyNvo8" ><img src="../img/icon/istore.png" style="padding-right:10px;max-height: 60px;width: 170px;"></a><br>
                        <img src="../img/QR.png" class="img-fluid" style="max-height:150px;margin-top:20px">
                    </div>
               </div>
            </div>
    </div>

</section>




<section class="story" style="margin-top:30px;padding:80px 0px;height: 700px;">
    <div class="mycontainer">
        <div class="mycontainer">
            <div class="mobilebanner">
                <img src="https://i.imgur.com/BmmCsJt.jpg" class="img-fluid" style="">
            </div>
            <div class="mobilebannercnt">
                <div class="mobilebannercntblqt">
                    <br>
                    <blockquote>
                        <p style="font-size: 40px;font-family: Montserrat;color: #363636;font-weight: 300;margin-left:-11%"><br>Maya has brought me confidence. With the right advice, I am empowered to make my own decisions.<br><br></p>
                    </blockquote>
                    <div style="margin-left:10px;margin-top:-15px">
                        <p style="font-size: 24px;font-family: Montserrat;color: #363636;"><br>Nusrat Jebin <br> <span style="font-size: 20px;font-family: Montserrat;font-weight:400;line-height:30px;color: #363636;">Bangladesh </span></p>
                         <br>
                      <a  data-target="#myModal" class="storywatch" style="text-decoration: none;padding:18px 15px;margin-top:30px" > <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/B5xarN0wlR8" data-target="#myModal" style="background-color: transparent;border: none;color: #707070"> <img src="../img/icon/icon_play.png" style="padding:15px 15px">Watch the Story</button></a>

                    </div>
                </div>
            </div>

        </div>

    </div>

</section>




<section style="margin-top:140px;">
    <div class="mayavideos">
        <div class="mycontainer">
            <div class="" style="height:180px">

                <div class="video1 text-center">
                    <img src="https://i.imgur.com/NdhIfJh.png" alt="" style="border-radius:5px;width: 270px;">
                    <button  type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/OnzovVI7Uyc" data-target="#myModal" style="background-color: transparent;border: none;color: #707070"><img src="https://i.imgur.com/2LSO5lb.png" style="margin-top:-210px;"></button>
                </div>

                <div class="video2">
                    <div class="image text-center">
                        <img src="https://i.imgur.com/tnK7VPR.png" alt="" style="border-radius:5px;width: 270px;">
                        <button  type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/dfRqQGuFQJU" data-target="#myModal" style="background-color: transparent;border: none;color: #707070"><img src="https://i.imgur.com/2LSO5lb.png" style="margin-top:-210px;"></button>

                         </div>
                </div>
                <div class="video3">
                    <div class="image text-center">
                        <img src="https://i.imgur.com/bbvGCKu.png" alt="" style="border-radius:5px;width: 270px;">
                        <button  type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/W5X1DFMTl94" data-target="#myModal" style="background-color: transparent;border: none;color: #707070"><img src="https://i.imgur.com/2LSO5lb.png" style="margin-top:-210px;"></button>


                    </div>
                </div>
                <div class="video4">
                    <div class="image text-center">
                        <img src="https://i.imgur.com/vnCRQp3.png" alt="" style="border-radius:5px;width: 270px;">
                        <button  type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/NMIoGUhuImg" data-target="#myModal" style="background-color: transparent;border: none;color: #707070"><img src="https://i.imgur.com/2LSO5lb.png" style="margin-top:-210px;"></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size:50px">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9" id="yt-player">
                    <iframe height="90vh" width="70%" class="embed-responsive-item" src="https://www.youtube.com/embed/B5xarN0wlR8" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>

            </div>

        </div>
    </div>
</div>




<section style="margin-top:60px;background-color:#314AC4;text-align: center;height:2030px" >
    <p style="font-size: 60px;color: #FFFFFF;padding-top:60px">Accessible, Stigma-free, Private.</p>
    <p style="font-size:24px;color: #FFFFFF;">Our experts answer over 6,000 queries everyday and provide timely advice for physical and mental issues, ranging from urgent serious illnesses to the everyday common cold.</p>
<div class="mycontainer" style="height:500px;margin-top:60px">
   <div class="grid-3-1 text-center" style="color:#BFBFBF">
       <div class="storyhover" style="background-color: #FFFFFF;border-radius:12px;margin-top: 30px">
           <i class="fas fa-user-circle"  style="font-size: 30px;margin-top:30px;color:#BFBFBF"></i>
            <p class="storyanonymous">Anonymous User</p>
        <p class="storyuserlocation">Dhaka, Bangladesh</p>

        <stoty style="text-align: center">
            <p class="storytext">I’m a married man and it’s been 10 months since I got married. We’re trying regularly to get pregnant but have not succeeded. It’ll be really helpful if you can provide some advice.</p>
        </stoty>
            <p class="storypostlang">(Question originally posted in Bengali)</p>

        </div>

    </div>

    <div class="grid-3-2 text-center">
        <div class="storyhover" style="background-color: #FFFFFF;border-radius:12px;margin-top: 30px">
            <i class="fas fa-user-circle"  style="font-size: 30px;margin-top:30px;color:#BFBFBF"></i>
            <p class="storyanonymous">Anonymous User</p>
            <p class="storyuserlocation">New York, USA</p>

            <stoty style="text-align: center">
                <p class="storytext">I feel like to kill myself. I want to talk but can’t express. Today is my birthday and I am continuously thinking,”why I was even born?”. I hate myself.
                </p>
            </stoty>
            <p class="storypostlang" style="">(Question originally posted in Bengali)</p>
        </div>
    </div>
    <div class="grid-3-3 text-center">
        <div class="storyhover" style="background-color: #FFFFFF;border-radius:12px;margin-top: 30px">
            <i class="fas fa-user-circle"  style="font-size: 30px;margin-top:30px;color:#BFBFBF"></i>
            <p class="storyanonymous">Anonymous User</p>
            <p class="storyuserlocation">Dhaka, Bangladesh</p>
            <stoty style="text-align: center">
                <p class="storytext">I’m a 17 year old male, but I like to pretend like I’m a girl. I love to wear girly dresses and makeup. I think my mind is like a girl. I can’t accept my body. I’ve tried to scratch my body with blades several times. Why I’m like that?</p>
            </stoty>
            <p class="storypostlang">(Question originally posted in Bengali)</p>
        </div>
    </div>
    <div class="grid-3-1 text-center" style="color:#BFBFBF">
        <div class="storyhover" style="background-color: #FFFFFF;border-radius:12px;margin-top: -110px;" onmouseover="hovereffect()">
            <i class="fas fa-user-circle"  style="font-size: 30px;margin-top:30px;color:#BFBFBF"></i>
            <p class="storyanonymous">Anonymous User</p>
            <p class="storyuserlocation">New Jersey, USA</p>

            <stoty style="text-align: center">
                <p class="storytext">My 5 year old daughter gets sever coughing fits in the middle of the night. She describes a crawling and itching sensation in her chest. What can I do to help her?</p>
            </stoty>
            <p class="storypostlang" style="margin-top:-15px">(Question originally posted in Bengali)</p>
        </div>
    </div>
    <div class="grid-3-2 text-center">
        <div class="storyhover" style="background-color: #FFFFFF;border-radius:12px;margin-top:-155px">
            <i class="fas fa-user-circle"  style="font-size: 30px;margin-top:30px;color:#BFBFBF"></i>
            <p class="storyanonymous">Anonymous User</p>
            <p class="storyuserlocation">Poole, UK</p>

            <stoty style="text-align: center">
                <p class="storytext">I am 35, can I still get vaccinated against cervical cancer? If so, how many doses are required?</p>
            </stoty>
            <p class="storypostlang">(Question originally posted in Bengali)</p>
        </div>
    </div>
    <div class="grid-3-3 text-center">
        <div class="storyhover" style="background-color: #FFFFFF;border-radius:12px;margin-top:30px">
            <i class="fas fa-user-circle"  style="font-size: 30px;margin-top:30px;color:#BFBFBF"></i>
            <p class="storyanonymous">Anonymous User</p>
            <p class="storyuserlocation">Dhaka, Bangladesh</p>
            <stoty style="text-align: center">
                <p class="storytext">What’s mental illness? How do I know if I have that?</p>
            </stoty>
            <p class="storypostlang">(Question originally posted in Bengali)</p>
        </div>
    </div>
</div>

</section>


<section class="footer text-center" style="background-color:#314AC4 ">
    <div class="mycontainer" style="background-color: #314AC4">
        <div class="mycontainer foterelement">
           <a href="https://web.facebook.com/mayaiswithyou/" style="text-decoration: none;color:inherit;"><span class="fa fa-facebook-square socialicon" style="font-size:30px;font-weight:bold;height: 30px;width: 30px;padding:0px 20px"></span></a>
            <a href="https://g.page/mayaiswithyou?gm" style="text-decoration: none;color:inherit;"> <span class="fa fa-google socialicon" style="font-size:30px;font-weight:bold;height: 30px;width: 30px;padding:0px 20px"></span></a>
            <a href="https://twitter.com/mayaiswithyou" style="text-decoration: none;color:inherit;"> <span class="fa fa-twitter socialicon" style="font-size:30px;font-weight:bold;height: 30px;width: 30px;padding:0px 20px"></span></a>
            <a href="https://www.instagram.com/mayaiswithyou/" style="text-decoration: none;color:inherit;"> <span class="fa fa-instagram socialicon" style="font-size:30px;font-weight:bold;height: 30px;width: 30px;padding:0px 20px"></span></a>
            <a href="https://www.linkedin.com/company/maya-com-bd/" style="text-decoration: none;color:inherit;"> <span class="fa fa-linkedin-square socialicon" style="font-size:30px;font-weight:bold;height: 30px;width: 30px;padding:0px 20px"></span></a>

            <p class="" style="font-size: 14px;font-family: 'Montserrat';font-weight:500;padding-top:25px">Copyright: © 2014 - 2020 Maya Digital Health Pte. Ltd. All rights reserved.</p>
            <p class="" style="font-size: 14px;font-family: 'Montserrat';font-weight: 300;">Maya and Maya logo, the logo icons are registered trademarks of Maya Digital Health Pte. Ltd.<br>Version: 3.0 - May 2020</p>
            <p class="" style="font-size:20px;font-family: 'Montserrat';font-weight: 300">Maya is built with love at Dhaka, Bangladesh.</p>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
    function hovereffect() {

        // document.getElementById("storyhover").style.backgroundColor="#fff"
    }

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })



    $(document).ready(function() {

// Gets the video src from the data-src on each button

        var $videoSrc;
        $('.video-btn').click(function() {
            $videoSrc = $(this).data( "src" );
        });
        console.log($videoSrc);



// when the modal is opened autoplay it
        $('#myModal').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
        })



// stop playing the youtube video when I close the modal
        $('#myModal').on('hide.bs.modal', function (e) {
            // a poor man's stop video
            $("#video").attr('src',$videoSrc);
        })






// document ready
    });




</script>

<script type="text/javascript">
    $('#myModal').on('hidden.bs.modal', function () {
        callPlayer('yt-player', 'stopVideo');
    });
</script>

</body>
</html>
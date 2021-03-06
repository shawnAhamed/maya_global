<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://i.imgur.com/zOHubFX.png" type="image/gif">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Maya for people</title>
    <meta name="description" content="Maya serves over 3,000,000 people every month.">

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
                <a href="/EN"><img src="../img/logo.svg" style="width:165px;height:80px; margin-top:20px;"></a>
            </div>
            <div class="menudiv">
                <div class="menuitems">
                    <ul class="float-right" style="color: #ffffff">
                        <li class="float-left" >
                            <a class="anchor" href="/EN">Home <span class="sr-only">(current)</span></a>
                        </li>
{{--                        <li class=" float-left">--}}
{{--                            <a class="anchor" href="/corona">Coronavirus</a>--}}
{{--                        </li>--}}
                        <li class=" float-left">
                            <a class="anchor active" href="/EN/services">Services</a>
                        </li>
                        <li class=" float-left">
                            <a class="anchor" href="/EN/about">About</a>
                        </li>
                        <li class=" float-left">
                            <a class="anchor" href="/EN/expert">Experts</a>
                        </li>
                        <li class=" float-left">
                            <a class="anchor" href="https://bit.ly/3dcqeJD" style="border: 1px solid #fff;border-radius:15px;padding: 5px 15px">Download</a>
                        </li>
                        <li class=" float-left dropdown">
{{--                            <a  style="padding:0px 0px 0px 15px;" onclick="navbarshow()" ><i class="fa fa-globe dropbtn" style="font-size: 30px"></i></a>--}}
{{--                            <div>--}}
{{--                                <div style="height: 10px"></div>--}}
{{--                                <div class="dropdown-content" >--}}
{{--                                    <a href="/bn" style="font-size: 16px;color: #363636;padding:20px 20px 10px 0px;font-family:Hind Siliguri">বাংলা</a>--}}
{{--                                    <hr style="width: 110px;margin-top:0px;margin-bottom: 0px">--}}
{{--                                    <a href="/en" style="font-size: 16px;color: #363636;font-weight: bold;padding:10px 20px 10px 0px">English</a>--}}
{{--                                    <hr style="width: 110px;margin-top:0px;margin-bottom: 0px">--}}
{{--                                    <a href="#"  style="font-size: 12px;color: #363636;padding:0px 15px 15px 0px">Learn more about how we are expanding!</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="servicetag">
    <div class="mycontainer">
        <p style="font-size:60px;line-height:70px;font-weight: bold;color: #613ABD;padding-top: 60px">We make it easy to get help that is meaningful and stigma free.</p>
        <hr style="border:5px solid #613ABD;margin-top:20px">
    </div>
</section>
<section style="margin-top:60px">
    <div class="mycontainer" style="height: 240px">
        <div class="grid-6-1 text-center">
            <img src="/img/servicepage/sbfly.png">
            <div class="servicedesc">
            <p class="thumsubheader-service">Our bot instantly responds to basic health issues. </p>
            </div>
        </div>
        <div class="grid-6-2 text-center">
            <img src="/img/servicepage/sqa.png">
            <div class="" style="margin-top: 43px">
            <p class="thumsubheader-service">Ask questions anonymously and get expert advice.</p>
            </div>
        </div>
        <div class="grid-6-3 text-center">
            <img src="/img/servicepage/sphn.png">
            <div class="servicedesc">
            <p class="thumsubheader-service">Talk to a doctor directly and get a prescription.</p>
            </div>
        </div>
        <div class="grid-6-4 text-center">
            <img src="/img/servicepage/shealth.png">
            <div class="servicedesc">
            <p class="thumsubheader-service">Ask questions about mental health, get counselling.</p>
            </div>
        </div>
        <div class="grid-6-5 text-center">
            <img src="/img/servicepage/sshop.png">
            <div class="servicedesc">
            <p class="thumsubheader-service">Order personal products, get it delivered discreetly.</p>
            </div>
        </div>
        <div class="grid-6-6 text-center">
            <img src="/img/servicepage/sheart.png">
            <div class="" style="margin-top:37px">
            <p class="thumsubheader-service">Stay informed, read tips, learn important facts to stay healthy</p>
            </div>
        </div>
    </div>
    <div class="mycontainer" style="height: 240px;">
        <div class="grid-6-2-3 text-center">
            <img src="/img/servicepage/sdr.png">
            <div class="" style="margin-top:40px">
                <p class="thumsubheader-service">Become a Maya Expert and be the change-maker.</p>
            </div>
        </div>
        <div class="grid-6-2-4 text-center">
            <img src="/img/servicepage/skiosk.png">
            <div class="servicedesc">
                <p class="thumsubheader-service">Setup Kiosk at your business for a healthy workforce.</p>
            </div>
        </div>
    </div>
</section>


<section class="appshow" style="height:980px;background-color: #613ABD">
    <div class="mycontainer" style="padding-top:70px;height:480px ">
        <div class="grid-4-1 text-center">
            <img src="/img/servicepage/bot image.png" class="appshowframe">
        </div>
        <div class="grid-4-2 text-center">
            <img src="/img/servicepage/que & ans.png" class="appshowframe">

        </div>
        <div class="grid-4-3 text-center">
            <img src="/img/servicepage/package.png" class="appshowframe">

        </div>
        <div class="grid-4-4 text-center">
            <img src="/img/servicepage/bmi.png" class="appshowframe">
        </div>
    </div>
    <div style="text-align: center;margin-top:120px">
        <p style="font-size: 48px;line-height: 58px;color: #ffffff;margin-top: 60px">All in one app and it’s simple!</p>
        <div style="padding: 40px 0px">
            <a  style="text-decoration: none;" href="https://bit.ly/3dcqeJD" ><img src="../img/icon/gplay.png" style="padding-left:10px;padding-right:10px;max-height: 60px;width: 170px"></a>
            <a  style="text-decoration: none;padding-left:10px" href="https://forms.gle/536kGauP6AaCyNvo8" ><img src="../img/icon/istore.png" style="padding-left:10px;padding-right:10px;max-height: 60px;width: 170px"></a><br>
        </div>
        <p style="font-size:24px;line-height:29px;color:#BFB1E0">Join the largest community of Bangladeshis who are conscious <br> about their health, lifestyle and wellbeing.</p>

    </div>

</section>

<section class="joinmaya" style="height:250px">
    <div class="mycontainer">

        <h1 class="jonmayatext">Want to be a Maya Expert?</h1>
        <h1 class="jonmayatext2">It’s much more than just helping people.</h1>
        <div class="joinmayabtn" style="text-align: center;margin-top:50px;">
            <a href="/expert" class="joinmayabtntxt" style="text-decoration: none;">Learn More</a>
            <a href="https://maya.com.bd/become/mayaapa" class="joinmayabtntxt" style="text-decoration: none;margin-left:20px">Join Now!</a>
        </div>
    </div>

</section>


{{--<section class="kioskbanner">--}}
{{--        <div class="kiosshow">--}}
{{--            <div class="mycontainer">--}}
{{--                <div class="" style="width:750px;margin-left: 200px">--}}
{{--                <img src="/img/servicepage/kiosk.png" style="margin-top: 60px">--}}
{{--                    <div style="margin-top: 30px">--}}
{{--                        <p style="font-size: 70px;font-weight:500;color:#314AC4">Maya Kiosk</p>--}}
{{--                        <p style="font-size:30px;font-weight:400;line-height:36px;color:#363636">A unique tool to setup inside the workplace to offer basic healthcare services to the workers.</p>--}}
{{--                    </div>--}}

{{--                    <div style=" margin-top:60px">--}}
{{--                        <a class="bannerbtn" href="mailto:kiosk@maya.com.bd" target="_blank" style="border-radius:8px;padding:22px 25px;background-color:#ffffff;color:#363636;font-size:16px;text-decoration: none;line-height:36px;font-weight:500;width:170px">Ask for a Demo</a>--}}
{{--                        <a class="bannerbtn" href="https://bit.ly/3d9CtXo" target="_blank" style="border-radius:8px;padding:22px 15px;background-color:#C94D5E;color: #ffffff;font-size: 16px;line-height:36px;font-weight:500;margin-left:30px;text-decoration: none;width:170px">Product Features</a>--}}
{{--                    </div>--}}
{{--                    <p style="font-size:16px;font-weight:500;line-height: 36px;color: #363636;margin-top:30px">Explore other exclusive tools built for business!</p>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--</section>--}}



<section class="footer text-center" style="background-color:#314AC4 ">
    <div class="mycontainer" style="background-color: #314AC4">
        @include('layout.footer')
    </div>
</section>



</body>
</html>
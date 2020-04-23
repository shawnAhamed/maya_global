<section class="menubar">
    <div class="mycontainer">
        <div class="row">
            <div class="col-sm-3">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" width="130" height="70" class="" alt="Maya" style="float: right;margin-top:10px">
                </a>
            </div>
            <div class="col-sm-9 menuitems">
                <ul class="float-right" style="color: #ffffff">
                    <li class="float-left" >
                        <a class="anchor active" href="#" onclick="myFunction()">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="#">Services</a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="#">About</a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="#">Experts</a>
                    </li>
                    <li class=" float-left">
                        <a class="anchor" href="#" style="border: 1px solid #fff;border-radius:15px;padding: 5px 10px">Download</a>
                    </li>
                    <li class=" float-left">
                        <a class="" href="/lang"><i class="fa fa-globe" style="font-size: 30px"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</section>


<script>
    $(function () {
        setNavigation();
    });

    function setNavigation() {
        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);

        $(".nav a").each(function () {
            var href = $(this).attr('href');
            if (path.substring(0, href.length) === href) {
                $(this).closest('li').addClass('active');
            }
        });
    }
</script>

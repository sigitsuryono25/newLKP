<!--<div class="clearfix"></div>

<div class="footer_graph"></div>

<div class="clearfix"></div>-->

<div class="footer1">

    <div class="container">
        <div class="clearfix divider_dashed1"></div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-4">

                <ul class="faddress text-white">
                    <li><img src="<?php echo base_url('assets/img/logo lkp unikom yogyakarta kursus android kursus web jogja.png') ?>" alt="" width="75%" /></li>
                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;  Jl. Kusumanegara No.224, Muja Muju, Umbulharjo, Daerah Istimewa Yogyakarta 55165 </li>
                    <li><i class="fa fa-phone"></i>&nbsp; (+62) 89-666-88-1159 </li>
                    <!--<li><i class="fa fa-print"></i>&nbsp; +62 274 486438</li>-->
                    <li><a href="mailto:info@lkp-unikom.com"><i class="fa fa-envelope"></i> info@lkp-unikom.com</a></li>
                    <li><img src="<?php echo base_url('assets/img/footer-wmap.png') ?>" alt="" /></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="qlinks">

                    <h4 class="lmb">Link Terkait</h4>

                    <ul class="text-white">
                        <li><a href="#"><i class="fa fa-angle-right"></i> Yayasan Pendidikan Widya Bakti</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> DIKTI</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Pusat Jaminan Mutu</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Career Center</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Ikatan Keluarga Alumni</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-4">
                <div class="siteinfo text-white">

                    <h4 class="lmb">Tentang LKP UNIKOM Yogyakarta</h4>

                    <p class="text-justify">
                        Merupakan Lembaga Kursus dan Pelatihan yang berfokus pada pengembangan skill dibidang IT dan pembuatan Software.
                    </p>
                    <br />
                </div>
            </div>
        </div>
    </div>
</div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info">
    <div class="container">
        <div class="clearfix divider_dashed1"></div>

        <div class="one_half animate" data-anim-type="fadeInRight">

            Copyright © <?php echo date('Y') ?> LKP UNIKOM Yogyakarta All rights reserved. 

        </div>

        <div class="one_half last">

            <ul class="footer_social_links">
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-skype"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-html5"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

        </div>

    </div>
</div><!-- end copyright info -->

</div>
<script>
    $('.phone').mask("(62) 000-0000-0000");
    $(document).ready(function () {
        // $('[data-toggle="popover"]').popover();   
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        $('#back-to-top').tooltip('show');

    });
</script>
<script>
    function showLoading() {
        $('body').loading();
    }
    function stopLoading() {
        $('body').loading('stop');
    }
</script>
<!-- /WhatsHelp.io widget -->
<script async data-id="35420" src="https://cdn.widgetwhats.com/script.min.js"></script>
</body>
</html>

<script>
    $("#btn-login").click(function () {
        var url = "<?php echo site_url('users/signin') ?>";
        var data = $('#login-form').serialize();
        console.log(data);
        $.ajax({
            url: url,
            data: data,
            type: 'POST',
            success: function (j, t, e) {
                alert(j + " " + t);
            },
            error: function (j, t, e) {
                alert(j + " " + t + " {" + e + "}");
            }
        });
    });
</script>
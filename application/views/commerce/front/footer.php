
<section class="newsletters" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h4>Subscribe our new's letter</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your email address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <ul class="list-unstyled text-small listfooters">
                    <li>
                    <!-- <a href="<?php echo base_url();?>"><span id="" style="font-weight:bold;color:#BF9B30;margin-right:50px;font-size:40px;font-family:'Lato', sans-serif;">Alisha Marsya</span></a>-->
                    <a href="<?php echo base_url();?>"><img width="220" style="margin-right:40px;margin-bottom:20px;" src="<?php echo base_url()?>/assets/logo.svg"/></a>
                    </li>
                    <li class="text-muted">
                        Jl SM Mansyur Gang Bayu Lestari No 7 Bukit Lama Palembang
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="list-unstyled text-small listfooters">
                    <li><a class="text-muted" href="#">About Us</a></li>
                    <li><a class="text-muted" href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <ul class="list-unstyled text-small listfooters">
                <li><a class="text-muted" href="#">Contact Us</a></li>
                    <li><a class="text-muted" href="#">FAQ's</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="listfooters" style="display:flex;float:left;" id="footer_rights2">
                        <a target="_blank" href="https://www.facebook.com/bantalcantiks"><img src="https://image.flaticon.com/icons/svg/145/145802.svg" style="width:40px;"></a>
                        <a target="_blank" href="https://www.instagram.com/bantalcantiks_alisha/"><img src="https://image.flaticon.com/icons/svg/145/145805.svg" style="width:40px;"></a>
                        <!-- <a href="#"><img src="https://image.flaticon.com/icons/svg/145/145812.svg" style="width:40px;"></a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer_last">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <p class="text-muted">Copyright © 2020. All Right Reserved. <a style="color:#999;" target="_blank" href='http://marcodigitalpartner.com/'>Marco Digital Partner.</a>
                <div class="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div style="display:flex;float:right;" id="footer_rights">
                    <a href="<?php base_url();?>">Home</a>
                    <a href="<?php base_url();?>galeri">Bantal</a>
                    <a href="<?php base_url();?>karir">Tudung Saji</a>
                    <a href="<?php base_url();?>kontak">Magic Com</a>
                </div>
            </div>
        </div>
    </div>
</section>

<a id="wafloats" href="https://api.whatsapp.com/send?phone=++628117870108&text=Assalamualaikum wr wb, Alisha Marsya" class="floatwa" target="_blank"><i class="fa fa-whatsapp my-floatwa"></i></a>
<!-- Js Plugins -->
<script src="<?php echo base_url();?>/assets/frontview/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/jquery.slicknav.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
<script src="<?php echo base_url();?>/assets/frontview/js/main.js"></script>
<script src="<?php echo base_url();?>/assets/commerce/js/jquery.zoom.min.js"></script>
<script src="<?php echo base_url();?>/assets/commerce/lightslider/js/lightslider.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('.image_detail')
        .wrap('<span style="display:inline-block"></span>')
        .css('display', 'block')
        .parent()
        .zoom();

        $("#pesan_form").on('click', function(){
            $("#inputform").toggle  ();
        }); 

        $('#imageGallery').lightSlider({
            item:1,
            loop:true,
            slideMove:2,
            auto:true,
            pauseOnHover: true,
            slideMargin:0,
            enableDrag: false,
            pager : false,
        });

        $('#vertical').lightSlider({
            gallery:true,
            item:1,
            vertical:true,
            verticalHeight:400,
            vThumbWidth:50,
            thumbItem:8,
            thumbMargin:4,
            slideMargin:0
        });
    })
</script>
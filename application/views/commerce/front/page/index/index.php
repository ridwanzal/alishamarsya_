<!-- <section>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <div class="carousel_content">
                                        <h3 style="margin-bottom:15px;">Find your needs</h3>
                                        <button class="btn btn-success btn-block">Shop Now</button>
                                    </div>
                                </div>
                                <img class="d-block w-100 imgslider" src="<?php echo base_url(); ?>assets/banners/banners.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <div class="carousel_content">
                                        <h3 style="margin-bottom:15px;">Find your needs</h3>
                                        <button class="btn btn-success btn-block">Shop Now</button>
                                    </div>
                                </div>
                                <img class="d-block w-100 imgslider" src="<?php echo base_url(); ?>assets/banners/banners2.png" alt="First slide">
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            </div>
        </div>
</section>
 -->

 <section>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <div class="carousel_content">
                                        <h1>RS. AR-Rasyid</h1>
                                        <p>Dengan pelayanan yang prima serta di dukung oleh tenaga medis yang berpengalaman, peralatan yang modern dan canggih.</p>
                                    </div>
                                </div>
                            <img class="d-block w-100 imgslider" src="<?php echo base_url(); ?>assets/frontview/img/hospital.jpg" alt="First slide">
                            </div> -->
                            
                            <?php
                                if(!isset($banner)){ ?>
                                    <div class="carousel-item active">
                                        <div class="carousel-caption">
                                            <div class="carousel_content">
                                                <h1>KAOSTUM.ID</h1>
                                                <p>Desain merchandise sesuka kamu dengan mudah dan cepat tanpa ribet.</p>
                                            </div>
                                        </div>
                                        <img class="d-block w-100 imgslider" src="<?php echo base_url(); ?>assets/banners/<?php echo $list->image_name;?>" alt="First slide">
                                    </div>
                                <?php }else{
                                    $i=0;
                                    foreach($banner as $list){
                                        ++$i;
                                        ?>
                                        <div class="carousel-item <?php if($i  == 1 ) echo 'active' ?>">
                                            <!-- <div class="carousel-caption">
                                                <div class="carousel_content">
                                                    <h1>KAOSTUM.ID</h1>
                                                    <p>Desain merchandise sesuka kamu dengan mudah dan cepat tanpa ribet.</p>
                                                </div>
                                            </div> -->
                                            <img class="d-block w-100 imgslider" src="<?php echo base_url(); ?>assets/banners/<?php echo $list->image_name;?>" alt="First slide">
                                        </div>
                                    <?php }
                                }
                            ?>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            </div>
        </div>
</section>
<section class="productlist">
    <div class="container">
        <div class="breadcrumbs_wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><?= $produk[0]->nama_produk; ?></li>    
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
            <?php
                if($this->session->flashdata('message')){ ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="alert alert-warning alert-dismissible"><?php echo $this->session->flashdata('message') ?>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                        </div>
                    </div>
                <?php   }
            ?>
        <div class="row">
            <?php
                function rupiah($angka){
                    $hasil_rupiah = number_format($angka,2,',','.');
                    return $hasil_rupiah;
                }
            ?>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <!-- <img class="image_detail" width="100%;" src="<?= base_url()?>/assets/product/<?= $produk[0]->image_name;?>"> -->
                    <ul id="vertical"  class="gallery list-unstyled">
                        <?php 
                            foreach($thumb as $item){
                                ?>
                                    <li data-thumb="<?= base_url()?>/assets/product/<?= $item->image_name;?>" >
                                        <img src="<?= base_url()?>/assets/product/<?= $item->image_name;?>" width="100%"/>
                                    </li>
                                <?php
                            }                        
                        ?>
                    </ul>
            </div>
            <?php
                $discount = ( $produk[0]->discount / 100 ) * $produk[0]->price;
                $price_now = $produk[0]->price - $discount;
            ?>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <h4 class="product_head_main"><?= $produk[0]->nama_produk; ?></h4>
                <span>
                    <?php
                        if($produk[0]->discount > 0){
                            ?>
                            <span class="linethrough">Rp. <?= rupiah($produk[0]->price)?></span>&nbsp;<span class="price">Rp. <?= rupiah($price_now); ?></span>&nbsp;  
                               |  Hemat <?= $produk[0]->discount; ?> %
                            <?php
                        }else{
                            ?>
                            <span class="price">Rp. <?= rupiah($price_now); ?></span>
                            <?php
                        }
                    ?>
                </span>
                <?php
                    if($produk[0]->business_type == 'bantal'){
                        ?>
                            <div class="button_order">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=+628117870108&text=Assalamu'alaikum Wr Wb, Apakah produk <?= $produk[0]->nama_produk; ?> ini tersedia <?=  base_url();?>produk/detail/<?= $produk[0]->id?>"><button class="btn btn-sm btn-success">Order via Whatsapp <span></span></button></a>
                                <button class="btn btn-sm btn-outline-dark" id="pesan_form">Order via Form</button>
                            </div>
                        <?php
                    }else{
                        ?>
                            <div class="button_order">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=+62817250816&text=Assalamu'alaikum Wr Wb, Apakah produk <?= $produk[0]->nama_produk; ?> ini tersedia <?=  base_url();?>produk/detail/<?= $produk[0]->id?>"><button class="btn btn-sm btn-success">Order via Whatsapp <span></span></button></a>
                                <button class="btn btn-sm btn-outline-dark" id="pesan_form">Order via Form</button>
                            </div>
                        <?php
                    }
                ?>
                <div id="inputform" style="margin-top:20px;display:none;">
                    <form method="POST" action="<?= base_url()?>/commerce_main/form_purchase">
                        <div class="row">
                            <div class="col-lg-7"> 
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Masukkan Nomor Handphone" required>
                                    <input type="hidden" name="link_produk" class="form-control" placeholder="" value="produk/detail/<?= $produk[0]->id; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-sm btn-outline-primary" placeholder="Masukkan Nomor Handphone">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row tabsdescoffers">
            <div class="col-lg-12 col-md-12 col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#desc">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#offers">Offers</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane container active" id="desc">
                            <?= $produk[0]->details; ?>
                        </div>
                        <div class="tab-pane container fade" id="offers">
                            <?= $produk[0]->offers; ?>
                        </div>
                </div>
            </div>
        </div>
</section>
<section class="productlist_lain">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h6 style="margin-bottom:15px;">Produk lainnya</h6>
            </div>
        </div>
        <div class="row">

            <?php
                    $check = sizeof($produklain) == 0;
                    if(!$check){
                        foreach($produklain as $item){
                            ?>
                                <div class="col-lg-3 col-md-3 col-xs-6 product_container">
                                    <div class="card mb-4 ">
                                        <div class="image-box">
                                            <img class="card-img-top myimage" src="<?= base_url().'/assets/product/'.$item->image_name?>" alt="Card image cap">
                                        </div>
                                        <div class="card-body">
                                        <a class="linkproducts" href="<?= base_url();?>produk/detail/<?= $item->id; ?>"><p class="text_head_product"><?= $item->nama_produk?></p></a>
                                        <span class="text_discount"style=""><?= $item->discount?> %</span>&nbsp;&nbsp;<span class="real_price">Rp. <?= rupiah($item->price);?></span>
                                        <div class="d-flex justify-content-between align-items-center" style="margin-top:10px;">
                                            <div class="btn-group">
                                                <?php
                                                    $discount = ( $item->discount / 100 ) * $item->price;
                                                    $price_now = $item->price - $discount;
                                                ?>
                                                <span class="price_color"><span>Rp. </span><span><?= rupiah($price_now) ;?></span></span>
                                            </div>
                                            <!-- <small class="text-muted"><?= $item->discount?> <span>%</span></small> -->
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        ?>
                        <?php
                    }else{
                        ?>
                            <div class="col-md-12 product_container">
                                <div class="mb-12 " style="padding-top:15px;">
                                    <center>
                                        <img src="https://image.flaticon.com/icons/svg/2748/2748638.svg" width="100">
                                    </center>
                                    <br/>
                                    <center><p>No item found yet.</p></center>
                                </div>
                            </div>
                        <?php
                    }
                
                ?>
        </div>
    </div>
</section>
<section class="productlist">
    <div  class="container_fluid m-l-5 m-r-5" style="padding-left:10px;padding-right:10px;">
        <div class="breadcrumbs_wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>ALL PRODUCTS</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
                <?php
                    function rupiah($angka){
                        $hasil_rupiah = number_format($angka,2,',','.');
                        return $hasil_rupiah;
                    }
                    $check = sizeof($produk) == 0;
                    if(!$check){
                        foreach($produk as $item){
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
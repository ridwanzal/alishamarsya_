<body>
<section class="nav_container">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_custom">
          <!-- <a href="<?php echo base_url();?>"><span id="" style="font-weight:bold;color:#BF9B30;margin-right:50px;font-size:20px;font-family:'Lato', sans-serif;">Alisha Marsya</span></a> -->
          <a href="<?php echo base_url();?>"><img width="150" style="margin-right:80px;" src="<?php echo base_url()?>/assets/logo.svg"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navmain">
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CATEGORY</a>
                <div class="dropdown-menu">
                  <?php 
                  foreach($category as $item){
                    ?>
                      <a class="dropdown-item" href="<?php echo base_url();?>produk/category/<?php echo $item->name;?>"><?php echo $item->description;?></a>
                    <?php
                  }
                  ?>
                </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>produk/category/bantal" style="text-transform:uppercase;">PRINTING PRODUCTS (BANTAL CANTIKs ALISHA)<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>produk/semua" style="text-transform:uppercase;">HANDMADE PRODUCTS (ALISHA MARSYA)<span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url();?>">KONTAK <span class="sr-only"></span></a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  INFO
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="<?php echo base_url();?>blog">BLOG</a>
                </div>
              </li> -->
            </ul>
            <form method="GET" action="<?php echo base_url(); ?>/commerce_main/search_product">
                <div style:display:flex; class="searchings">
                  <input name="keyword" 
                    style="padding-left:5px;
                          width:120px;
                          background:#fff;
                          border:1px solid #aaa;
                          border-radius:2px;
                          padding-left:10px;
                          color:#000;" class="searchers" type="text" id="search_input" placeholder="Cari Produk. . .">
                  <!-- <input style="background:#000;border-left:0px;
                                border-top-left-radius:0px;
                                border-bottom-left-radius:0px;
                                border-top-right-radius:2px;
                                border-bottom-right-radius:2px;
                                border-top:1px solid #fff;border-right:1px solid #fff;border-bottom:1px solid #fff;"
                  class="search_btn" type="submit" value="Cari"> -->
                  <button style="background:#fff;border-left:0px;
                                border-top-left-radius:0px;
                                border-bottom-left-radius:0px;
                                border-top-right-radius:2px;
                                border-bottom-right-radius:2px;
                                border-top:1px solid #aaa;border-right:1px solid #aaa;border-bottom:1px solid #aaa;"
                  class="search_btn" type="submit"><img width="20" style="padding:3px;position:relative;top:-2px;" src="<?php echo base_url();?>/assets/search.svg"/></button>
                </div>
            </form>
          </div>
        </nav>
    </div>
</section>
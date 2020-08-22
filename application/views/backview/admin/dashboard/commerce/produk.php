<div class="dashboard-wrapper">
        <div class="dashboard-influence">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h3 class="mb-2">Kelola Produk</h3>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Kelola Produk</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                                <?php echo form_open_multipart('admin/addproduct'); ?>
                                    <h5 class="card-header">Tambah Produk Baru</h5>
                                    <div class="card-body">
                                            <div class="row">
                                                    <div class="col-lg-1 col-md-1 col-xs-6">
                                                    <img style="object-fit:cover;border-radius:10px;position:relative;top:6px;" width="50" height="50" id="img_thumb" src="<?php echo base_url() ?>assets/backview/images/image_default.png">
                                                    </div>
                                                    <div class="col-lg-11 col-md-11 col-xs-12 upload_component">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Thumbnails</label>
                                                        <input type="file" class="form-control" id="upload_thumb" name="berkas[]" accept="image/x-png,image/gif,image/jpeg"  multiple required>
                                                    </div>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama</label>
                                                <input id="inputText3" name="name" type="text" class="form-control" placeholder="Nama produk" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Kategori</label>
                                                <select class="form-control" id="input-select" name="category"  required>
                                                    <option value="">Pilih Kategori</option>
                                                    <?php
                                                        foreach($category as $list){
                                                            ?>
                                                                <option value="<?= $list->id; ?>"><?= $list->name; ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-select">Pilih Tipe Usaha</label>
                                                <select class="form-control" id="input-select" name="business_type"  required>
                                                    <option value="">Pilih Tipe Usaha</option>
                                                    <option value="bantal">PRINTING PRODUCTS (BANTAL CANTIK ALISHA)</option>
                                                    <option value="home_made">HANDMADE PRODUCTS (ALISHA MARSYA)</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Harga (IDR)</label>
                                                        <input id="inputText3" name="price" type="number" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="inputText3" class="col-form-label">Diskon (%)</label>
                                                        <input id="inputText3" name="discount" type="number" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Details</label>
                                                        <textarea class="form-control" id="editor" rows="2" name="details"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">Offers</label>
                                                        <textarea class="form-control" id="editor2" rows="2" name="offers"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <input type="submit" value="Simpan sebagai Draft" class="btn btn-sm btn-primar y" name="submit_draft_blog" id="submit blog"/>  -->
                                            <input style="padding-left:20px;padding-right:20px;padding-top:7px;padding-bottom:7px;width:200px;" type="submit" value="Tambah Produk" class="btn btn-sm btn-primary" name="submit" id="submit blog"/> 
                                    </div>
                                <?php echo form_close();?>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Daftar Produk</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Id</th>
                                                    <th>Nama Produk</th>
                                                    <th>Category Id</th>
                                                    <th>Business Type</th>
                                                    <th>Price</th>
                                                    <th>Discount</th>
                                                    <th>Details</th>
                                                    <th>Offers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    function check_empty($value){
                                                        if($value == '' || $value == '0'){
                                                            echo '-';
                                                        }else{
                                                            echo $value;
                                                        }
                                                    }
    
                                                    $i = 0; 
                                                    foreach($product as $list){
                                                        $i = $i + 1;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $list->id;; ?></td>
                                                            <td><?php echo $list->name; ?></td>
                                                            <td><?php echo $list->category_id; ?></td>
                                                            <td><?php echo $list->business_type; ?></td>
                                                            <td><?php echo $list->price; ?></td>
                                                            <td><?php echo $list->discount; ?></td>
                                                            <td><?php echo $list->details; ?></td>
                                                            <td><?php echo $list->offers; ?></td>
                                                        </tr>
                                                    <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
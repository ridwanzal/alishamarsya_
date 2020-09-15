<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Admin extends CI_Controller {

      function __construct(){
        parent::__construct();		
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
        $login_status = $this->session->userdata('status');
        if(!$login_status == 'login'){
              redirect(base_url('login'));
        }
      }
      
      public function index(){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        $query="SELECT blog_id, title, subtitle, author_id, date_created, max_length, image_path, category, tag, bookmark, likes FROM blog order by date_created";
        $query_result = $this->db->query($query)->result();

        $query2="SELECT * FROM category";
        $query_result2 = $this->db->query($query2)->result();

        $query3 = "SELECT * FROM product";
        $query_result3 = $this->db->query($query3)->result();
        
        $data['blog'] = $query_result;
        $data['category'] = $query_result2;
        $data['product'] = $query_result3;
        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/commerce/produk.php', $data);
        $this->load->view('backview/footer.php', $data);
      }

      public function kategori(){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        $query="SELECT blog_id, title, subtitle, author_id, date_created, max_length, image_path, category, tag, bookmark, likes FROM blog order by date_created";
        $query_result = $this->db->query($query)->result();

        $query2="SELECT * FROM category";
        $query_result2 = $this->db->query($query2)->result();

        $data['blog'] = $query_result;
        $data['category'] = $query_result2;
        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/commerce/kategori.php', $data);
        $this->load->view('backview/footer.php', $data);
      }

      public function addcategory(){
        $name = $this->input->post('name', TRUE);
        $description = $this->input->post('description', TRUE);
        $data = array(
          'name' => $name,
          'description' => $description
        );
  
        $this->db->insert('category', $data);
        $affect_row = $this->db->affected_rows();
        // var_dump($affect_row);exit;
        if($affect_row > 0){
        $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
        }else{
        $this->session->set_flashdata('error', 'Gagal menambahkan konten');
        }
        redirect(base_url("admin/kategori"));
      }


      public function addproduct(){
        $name = $this->input->post('name', TRUE);
        $category = $this->input->post('category', TRUE);
        $business_type = $this->input->post('business_type', TRUE);
        $price = $this->input->post('price', TRUE);
        $discount = $this->input->post('discount', TRUE);
        $details = $this->input->post('details', TRUE);
        $offers = $this->input->post('offers', TRUE);

        $data = array(
          'name' => $name,
          'category_id' => $category,
          'business_type' => $business_type,
          'price' => $price,
          'discount' => $discount,
          'details' => $details,
          'offers' => $offers
        );

        $this->db->insert('product', $data);
        $affect_row = $this->db->affected_rows();
        if($affect_row > 0){
          $last_id = $this->db->insert_id();
          $config['upload_path']          = './assets/product/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['max_size']             = 100000;
          $config['max_width']            = 8000;
          $config['max_height']           = 100000;
          $config['encrypt_name'] 		= false;
          $this->load->library('upload',$config);
          $jumlah_berkas = count($_FILES['berkas']['name']);
          for($i = 0; $i < $jumlah_berkas; $i++){
              if(!empty($_FILES['berkas']['name'][$i])){
              $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
              $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
              $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
           
              if($this->upload->do_upload('file')){
                $uploadData = $this->upload->data();
                $datas['image_name'] = $uploadData['file_name'];
                $datas['id_product'] = $last_id;
                $this->db->insert('product_thumb',$datas);
              }
            }
          } // end of loop
          redirect(base_url("admin/"));
        }else{

        }

      }

      public function editproduct(){
        $id = $this->input->post('id', TRUE);
        $id_thumb = $this->input->post('id_thumb', TRUE);
        $name = $this->input->post('name', TRUE);
        $category = $this->input->post('category', TRUE);
        $business_type = $this->input->post('business_type', TRUE);
        $price = $this->input->post('price', TRUE);
        $discount = $this->input->post('discount', TRUE);
        $details = $this->input->post('details', TRUE);
        $offers = $this->input->post('offers', TRUE);

        $data = array(
          'name' => $name,
          'category_id' => $category,
          'business_type' => $business_type,
          'price' => $price,
          'discount' => $discount,
          'details' => $details,
          'offers' => $offers
        );

        $this->db->where('id', $id);
        $this->db->update('product', $data);
        $affect_row = $this->db->affected_rows();
          $config['upload_path']          = './assets/product/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['max_size']             = 100000;
          $config['max_width']            = 8000;
          $config['max_height']           = 100000;
          $config['encrypt_name'] 		= false;
          $this->load->library('upload',$config);
          $jumlah_berkas = count($_FILES['berkas']['name']);
          for($i = 0; $i < $jumlah_berkas; $i++){
              if(!empty($_FILES['berkas']['name'][$i])){
              $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
              $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
              $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
              $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
              $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
           
              if($this->upload->do_upload('file')){
                $uploadData = $this->upload->data();
                $datas['image_name'] = $uploadData['file_name'];
                // $this->db->insert('product_thumb',$datas);
                $this->db->where('id', $id_thumb);
                $this->db->update('product_thumb', $datas);
              }
            }
          } // end of loop
          redirect(base_url("admin/"));
      }

      public function deleteproduct($id){
        $this->db->where('id', $id);
        $this->db->delete('product');
        redirect(base_url('admin'));
      }


      public function product_edit($id){
        $data['title_bar'] = "";
        $data['header_page'] = "";

        $query2="SELECT b.id FROM product a, category b where a.id = $id";
        $query_result2 = $this->db->query($query2)->result();

        $query3 = "SELECT * FROM product where id = $id";
        $query_result3 = $this->db->query($query3)->result();

        $query4 = "SELECT * FROM product_thumb where id_product = $id";
        $query_result4 = $this->db->query($query4)->result();
        
        $query7 = "SELECT a.id, a.name
                  FROM
                  category a,
                  product b
                  WHERE
                  a.id = b.category_id
                  AND b.id = $id";
        $query7_result = $this->db->query($query7)->result();	

        $query8 = "SELECT a.id, a.name
                  FROM
                  category a,
                  product b
                  WHERE
                  a.id = b.category_id
                  GROUP BY a.id";

        $query8_result = $this->db->query($query8)->result();
        $data['category_selected'] = $query7_result;
        $data['categories'] = $query8_result;
        $data['product'] = $query_result3;
        $data['product_thumb'] = $query_result4;
        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/commerce/produk_edit.php', $data);
        $this->load->view('backview/footer.php', $data);
      }
  

}
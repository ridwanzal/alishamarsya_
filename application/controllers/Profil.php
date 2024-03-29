<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Profil extends CI_Controller {

      function __construct(){
        parent::__construct();		
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
      }

      public function page($konteks){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        
        $query2="SELECT * FROM $konteks order by id DESC LIMIT 1";
        $query_result2 = $this->db->query($query2)->result();
        $data['daftar'] = $query_result2;
        $data['konteks'] = $konteks;

        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/profil.php', $data);
        $this->load->view('backview/footer.php', $data);
      }

      public function edit($id, $konteks){
        $data['title_bar'] = "";
        $data['header_page'] = "";
        
        $query2="SELECT * FROM $konteks WHERE id = $id order by id DESC";
        $query_result2 = $this->db->query($query2)->result();
        $data['daftar'] = $query_result2;
        $data['konteks'] = $konteks;

        $this->load->view('backview/header.php', $data);
        $this->load->view('backview/admin/navbar.php', $data);
        $this->load->view('backview/admin/dashboard/profiledit.php', $data);
        $this->load->view('backview/footer.php', $data);
      }
      
      public function submit_profil(){
          $login_status = $this->session->userdata('status');
          if($login_status == 'login'){
              // $thumbnail = $this->input->post('blog_thumb', TRUE);
              $title = $this->input->post('nama', TRUE);
              $content = $this->input->post('deskripsi', TRUE);
              $konteks = $this->input->post('konteks', TRUE);
              $author_id = $this->session->userdata('id_user');
              $submit = $this->input->post('submit_profil');
              $category = $this->input->post('blog_category');
              //Buat slug
              $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
              $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
              $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
              $slug=$pre_slug; // tambahkan ektensi .html pada slug
              $foto = $_FILES['upload_thumb'];
              $image_path = "";
              if($submit){
                $config['upload_path'] = './assets/profil/thumb/';
                $config['allowed_types'] = 'jpg|png|gif|svg|pdf|tif';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('upload_thumb')){
                  $image_path = "";
                }else{
                  $image_path = $this->upload->data('file_name');
                }
                    
                $data = array(
                  'nama' => $title,
                  'thumb' => $image_path,
                  'slug' => $slug,
                  'deskripsi' => $content
                );
        
                $this->db->insert($konteks, $data);
                $affect_row = $this->db->affected_rows();
                // var_dump($affect_row);exit;
                if($affect_row > 0){
                  $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
                }else{
                  $this->session->set_flashdata('error', 'Gagal menambahkan konten');
                }
                redirect(base_url("admin/profil/" .$konteks));
              }
          }
      }


      public function edit_profil(){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
            // $thumbnail = $this->input->post('blog_thumb', TRUE);
            $id = $this->input->post('id', TRUE);
            $title = $this->input->post('nama', TRUE);
            $content = $this->input->post('deskripsi', TRUE);
            $submit = $this->input->post('submit_profil');
            $konteks= $this->input->post('konteks', TRUE);
            //Buat slug
            $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
            $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
            $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
            $slug=$pre_slug; // tambahkan ektensi .html pada slug
            // $foto = $_FILES['upload_thumb'];
            // $image_path = "";
            if($submit){
              // $config['upload_path'] = './assets/layanan/thumb/';
              // $config['allowed_types'] = 'jpg|png|gif|svg|pdf|tif';
              // $this->load->library('upload', $config);
              // if(!$this->upload->do_upload('upload_thumb')){
              //   echo 'Gagal upload';
              // }else{
              //   $image_path = $this->upload->data('file_name');
              // }
                  
              $data = array(
                'nama' => $title,
                'slug' => $slug,
                'deskripsi' => $content
              );
      
              $this->db->where('id', $id);
              $this->db->update($konteks, $data);
              $affect_row = $this->db->affected_rows();
          
              // $this->db->insert('layanan', $data);
              // $affect_row = $this->db->affected_rows();
              // var_dump($affect_row);exit;
              if($affect_row > 0){
                $this->session->set_flashdata('message', 'Berhasil menambahkan konten');
              }else{
                $this->session->set_flashdata('error', 'Gagal menambahkan konten');
              }
              redirect(base_url("admin/profil/".$konteks));
            }
        }
    }

      public function daftar_layanan(){
          $query="SELECT * FROM layanan order by id ASC";
          $query_result = $this->db->query($query);
          $result = json_encode($query_result->result());
          echo $result;
      }


      public function detail($slug, $konteks){
        $query = "SELECT * FROM '.$konteks.'  where slug='$slug'";
        $query_result = $this->db->query($query);
        $query_resulat_array = $this->db->query($query)->result();
        if($query_result->num_rows() > 0 ){
          $x['detail']= $query_result;
          $x['title_bar'] = $query_resulat_array[0]->nama;
          $x['header_page'] = "";
          $x['keyword'] = $query_resulat_array[0]->nama;
          $x['description'] = $query_resulat_array[0]->nama;
          $this->load->view('frontview/header', $x);
          $this->load->view('frontview/navbar', $x);
          $this->load->view('frontview/page/profil/profil', $x);
          $this->load->view('frontview/footer', $x);
        }else{
          redirect(base_url());
        }
      } 

      public function delete($id, $konteks){
        $login_status = $this->session->userdata('status');
        if($login_status == 'login'){
          $this->db->where('id', $id);
          $this->db->delete($konteks);
          redirect(base_url('admin/profil/' .$konteks));
        }
      }
  

}
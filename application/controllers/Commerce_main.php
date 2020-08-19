<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Load all parser library*/
require "vendor/autoload.php";
use Sunra\PhpSimple\HtmlDomParser; // lib html parser
use stringEncode\Encode; // lib html parser
use PHPHtmlParser\Dom; // lib html parser
use FastSimpleHTMLDom\Document; // lib html parser
class Commerce_main extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta'); // default time zone indonesia
		$query7 = "SELECT * FROM category";
		$query7_result = $this->db->query($query7)->result();
		$this->public['category'] = $query7_result;
	}
	
	public function index()
	{
			$data['title_bar'] = "";
			$data['header_page'] = "";
			$query = "SELECT * FROM banner";
			$query_result = $this->db->query($query)->result();
			$query3 = "SELECT * FROM banner_two";
			$query3_result = $this->db->query($query3)->result();

			$query6 = "SELECT 
						a.id,
						a.name as nama_produk, 
						b.name as nama_kategori,
						c.image_name,
						a.gender,
						a.price,
						a.discount,
						a.details,
						a.offers
						FROM
						product a, 
						category b,
						product_thumb c
						WHERE b.id = a.category_id 
						AND c.id_product = a.id 
						GROUP BY a.id ORDER BY id DESC LIMIT 8";
			$query6_result = $this->db->query($query6)->result();	
			
			$data['category'] = $this->public['category'];
			$data['banner'] = $query_result;
			$data['banner_two'] = $query3_result;
			$data['produk'] = $query6_result;
			$this->load->view('commerce/front/header', $data);
			$this->load->view('commerce/front/navbar', $data);
			$this->load->view('commerce/front/page/index/index', $data);
			$this->load->view('commerce/front/page/index/slider', $data);
			$this->load->view('commerce/front/footer', $data);
		}
		
	
	public function product($category, $gender){
		$data['title_bar'] = "";
		$data['header_page'] = "";
		$query = "SELECT * FROM banner";
		$query_result = $this->db->query($query)->result();
		
		$query6 = "SELECT 
					a.id,
					a.name as nama_produk, 
					b.name as nama_kategori,
					c.image_name,
					a.gender,
					a.price,
					a.discount,
					a.details,
					a.offers
					FROM
					product a, 
					category b,
					product_thumb c
					WHERE b.id = a.category_id 
					AND c.id_product = a.id
					AND a.category_id  = '$category'
					AND a.gender = '$gender' GROUP BY a.id";
		$query6_result = $this->db->query($query6)->result();			
		
		$data['banner'] = $query_result;
		$data['produk'] = $query6_result;

		$data['category_men'] = $query2_result;
		$data['category_women'] = $query4_result;
		$data['category_kids'] = $query5_result;
		$data['category'] = $this->public['category'];
		
		$this->load->view('commerce/front/header', $data);
		$this->load->view('commerce/front/navbar', $data);
		$this->load->view('commerce/front/page/produk/produklist', $data);
		$this->load->view('commerce/front/footer', $data);
	}

	public function productall(){
		$data['title_bar'] = "";
		$data['header_page'] = "";
		$query6 = "SELECT 
					a.id,
					a.name as nama_produk, 
					b.name as nama_kategori,
					c.image_name,
					a.gender,
					a.price,
					a.discount,
					a.details,
					a.offers
					FROM
					product a, 
					category b,
					product_thumb c
					WHERE b.id = a.category_id 
					AND c.id_product = a.id 
					GROUP BY a.id";
		$query6_result = $this->db->query($query6)->result();			
		$data['produk'] = $query6_result;
		$data['category'] = $this->public['category'];
		$this->load->view('commerce/front/header', $data);
		$this->load->view('commerce/front/navbar', $data);
		$this->load->view('commerce/front/page/produk/produkall', $data);
		$this->load->view('commerce/front/footer', $data);
	}


	public function product_category($category){
		$data['title_bar'] = "";
		$data['header_page'] = "";
		$query6 = "SELECT 
					a.id,
					a.name as nama_produk, 
					b.name as nama_kategori,
					c.image_name,
					a.gender,
					a.price,
					a.discount,
					a.details,
					a.offers
					FROM
					product a, 
					category b,
					product_thumb c
					WHERE b.id = a.category_id 
					AND c.id_product = a.id 
					AND b.name = '$category'
					GROUP BY a.id";
		$query6_result = $this->db->query($query6)->result();			
		$data['produk'] = $query6_result;
		$data['category'] = $this->public['category'];
		$this->load->view('commerce/front/header', $data);
		$this->load->view('commerce/front/navbar', $data);
		$this->load->view('commerce/front/page/produk/produkall', $data);
		$this->load->view('commerce/front/footer', $data);
	}

	public function productlist(){
		$data['title_bar'] = "";
		$data['header_page'] = "";
		$query = "SELECT * FROM banner";
		$query_result = $this->db->query($query)->result();
		$data['banner'] = $query_result;
		$data['category'] = $this->public['category'];
		$this->load->view('commerce/front/header', $data);
		$this->load->view('commerce/front/navbar', $data);
		$this->load->view('commerce/front/page/produk/produk', $data);
		$this->load->view('commerce/front/footer', $data);
	}

	public function produkdetail($id){
		$data['title_bar'] = "";
		$data['header_page'] = "";
		$query = "SELECT * FROM banner";
		$query_result = $this->db->query($query)->result();
			
		$query2 = "SELECT 
				a.id,
				a.name as nama_produk, 
				b.name as nama_kategori,
				c.image_name,
				a.gender,
				a.price,
				a.discount,
				a.details,
				a.offers
				FROM
				product a, 
				category b,
				product_thumb c
				WHERE b.id = a.category_id 
				AND c.id_product = a.id
				AND c.id_product = '$id' LIMIT 1"; 
		$query2_result = $this->db->query($query2)->result();
		
		$query3 = "SELECT * FROM category";
		$query3_result = $this->db->query($query3)->result();

		$query4 = "SELECT 
				a.id,
				a.name as nama_produk, 
				b.name as nama_kategori,
				c.image_name,
				a.gender,
				a.price,
				a.discount,
				a.details,
				a.offers
				FROM
				product a, 
				category b,
				product_thumb c
				WHERE b.id = a.category_id 
				AND a.id != '$id'
				AND c.id_product = a.id GROUP BY a.id ORDER BY RAND()";
		$query4_result = $this->db->query($query4)->result();

		$query5 = "SELECT * FROM product_thumb WHERE id_product = '$id' ";
		$query5_result = $this->db->query($query5)->result();
		$data['banner'] = $query_result;
		$data['produk'] = $query2_result;
		$data['produklain'] = $query4_result;
		$data['thumb'] = $query5_result;
		$data['category'] = $this->public['category'];
		$this->load->view('commerce/front/header', $data);
		$this->load->view('commerce/front/navbar', $data);
		$this->load->view('commerce/front/page/produk/produkdetail', $data);
		$this->load->view('commerce/front/footer', $data);
	}

	public function form_purchase(){
		$email = $this->input->post('email', TRUE);
        $phone = $this->input->post('phone', TRUE);
		$link_produk = $this->input->post('link_produk', TRUE);
		$data = array(
            'email' => $email,
            'phone' => $phone,
            'link_product' => $link_produk,
            'date_created' => date("Y-m-d h:i:s")
		);

		$this->db->insert('order', $data);
		$affect_row = $this->db->affected_rows();
		if($affect_row > 0){
			$this->session->set_flashdata('message', 'Permintaan berhasil dikirim, Pesanan akan kami proses secepatnya.');
		}else{
			$this->session->set_flashdata('message', 'Mohon maaf permintaan tidak dapat di proses');
		}

		redirect(base_url($link_produk));
	}

	public function search_product(){
        $keyword = $this->input->get('keyword');
        $keyword_search = str_replace("'", "", $keyword);
		// $query="SELECT * FROM product where title like '%$keyword_search%' ";
		$query = "SELECT 
				a.id,
				a.name as nama_produk, 
				b.name as nama_kategori,
				c.image_name,
				a.gender,
				a.price,
				a.discount,
				a.details,
				a.offers
				FROM
				product a, 
				category b,
				product_thumb c 
				WHERE c.id_product = a.id
				AND a.name  like '%$keyword_search%' GROUP BY a.id";
		$query_result = $this->db->query($query)->result();
        // echo '<pre>'; 
        //   var_dump($query_result);die;
        // echo '</pre>';
        // echo $result;
		$data['search_result'] = $query_result;
		$data['produk'] = $query_result;
		$data['category'] = $this->public['category'];
		$this->load->view('commerce/front/header', $data);
		$this->load->view('commerce/front/navbar', $data);
		$this->load->view('commerce/front/page/search/search', $data);
		$this->load->view('commerce/front/footer', $data);
      }


}
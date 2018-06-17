<? if(!defined("BASEPATH")){ exit("No direct script access allowed"); }
	/**
	 * Authorization Extended Controller Class
	 *
	**/
	class MY_Controller extends CI_Controller {

		function __construct($args = array()){
			parent::__construct();
			$this->load->model('data');
		}

		public function drawHeader($title = "Phasons") {
			$data['mCat'] = $this->data->getCat('M');
			$data['wCat'] = $this->data->getCat('W');
			$data['card_count'] = $this->session->userdata('cart') ? count($this->session->userdata('cart')) : 0;
			$data['user'] = $this->data->getUser();
			$data['title'] = $title;
			$this->load->view('common/header',$data);
			$this->load->view('common/login');
			if(isset($_POST['login'])){
				$this->data->handleLogin();
			}
			if(isset($_POST['signup'])){
				$this->data->handleSignup();
			}
		}
		public function drawFooter(){
			$this->load->view('common/footer');
		}
	}
?>

<? if(!defined("BASEPATH")){ exit("No direct script access allowed"); }
	/**
	 * Authorization Extended Controller Class
	 *
	**/
	class MY_Controller extends CI_Controller {

		/**
		 *@var strings
		 *hold js file
		 */
		protected $js; 

		/**
		 *@var string
		 *hold css file
		 */
		protected $css; 

		function __construct($args = array()){
			parent::__construct();

		    // defined and initialize  js to be type of array
			$this->js = array();


			// defined and initialize  css to be type of array
			$this->css = array();

			// load the helper and make available to all controller
			$this->load->helper(array('url','html'));

			// load the model to fetch data for header
			$this->load->model('data');
		}



		/**
		 *
		 * @param  $title   string     title of page  
		 * loads the css, js file and header of page
		 *
		 */

		public function drawHeader($title = "Phasons") {

			// category for men section
			$data['mCat'] = $this->data->getCat('M');

			// category for women section
			$data['wCat'] = $this->data->getCat('W');

			// fetching the no of item in cart 
			$data['card_count'] = $this->session->userdata('cart') ? count($this->session->userdata('cart')) : 0;

			// fetching the user detail 
			$data['user'] = $this->data->getUser();

			// fetching css file
			$head['css']=$this->css;

			// fetching js file
			$head['js']=$this->js;

			// print_r($head);

			// title of page
			$head['title']=$title;

			// loading basic css and js file required for page
			$this->load->view('common/header_assets',$head);

			// load the nav bar of page
			$this->load->view('common/header',$data);
			$this->load->view('common/login');
			if(isset($_POST['login'])){
				$this->data->handleLogin();
			}
			if(isset($_POST['signup'])){
				$this->data->handleSignup();
			}
		}


		/**
		 *
		 * loads the footer of page
		 *
		 */

		public function drawFooter(){

			$this->load->view('common/footer');
		}



		/**
		 *
		 * @param  $path  				 string    		relative path for js file or url
		 * @param  $prepend_base_url 	 bool    		relative path is url or file
		 *
		 */

		public function addJS($path,$prepend_base_url=true)
		{
			if($prepend_base_url)
			{   
				
				$this->js[] = base_url().$path;
			}
			else
			{
				$this->js[] = $path;
			}
			
		}

		/**
		 *
		 * @param  $path  				 string    		relative path for css file or url
		 * @param  $prepend_base_url 	 bool    		relative path is url or file
		 *
		 */

		public function addCSS($path,$prepend_base_url=true)
		{
			if($prepend_base_url)
			{   
				
				$this->css[] = base_url().$path;
			}
			else
			{
				$this->css[] = $path;
			}
		}


	}
	?>

<?php
class Data extends CI_Model {
	public function get($table,$cond=[])
	{
		$res = $this->db->where($cond)->get($table);
		return $res->result_array();
	}

	public function getCat($gender=''){
		$res = $this->db->select('*')
						->where(['type'	=>	$gender])
						->get('categories');
		return $res->result_array();
	}

	public function getUser(){
		$user_id = $this->session->userdata('id');
		$pwd = $this->session->userdata('pwd');
		if(!isset($user_id)){
			return;
		}
		$res = $this->db->where(['id'	=>	$user_id,
								 'password'	=>	$pwd])->get('users');
		return $res->result_array()[0];
	}


	public function getFollowers($id){
		$res = $this->db->select('follower_id')
						->where(['following_id'	=>	$id])
						->get('followers');
		$ret['follower_id'] = $res->result_array();
		$ret['followers'] = count($ret['follower_id']);
		return $ret;
	}

	public function getFollowings($id){
		$res = $this->db->select('following_id')
						->where(['follower_id'	=>	$id])
						->get('followers');
		$ret['following_id'] = $res->result_array();
		$ret['followings'] = count($ret['following_id']);
		return $ret;
	}

	public function getImagesProduct($id){
		$str = $this->db->select('image')->from('products')->where(['id'	=>	$id])->get()->result_array()[0]['image'];
		// prettyDump($str);
		$ret = json_decode($str);
		return $ret;

	}

	public function insertBulkOrder($data){
		if($this->db->insert('bulkorders',$data)){
			$this->session->set_flashdata('flashInfo','Order has been placed successfully');
			redirect(site_url('bulkOrder'));
		}
		else{
			$this->session->set_flashdata('flashWarning','Some error occured. Please try again after some time.');
			redirect(site_url('bulkOrder'));
		}
	}





}
?>

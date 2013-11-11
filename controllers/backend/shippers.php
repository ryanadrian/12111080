<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shippers extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Shippers_model','datamodel');     
    }
	   
	public function index()
	{
		$data['title']='List Of Shippers';	
		$data['array_Shippers'] = $this->datamodel->get_shippers();
		$this->mytemplate->loadBackend('shippers',$data);
	}

	public function form($mode,$id='')
	{
		$data['title']=($mode=='insert')? 'Add Shippers' : 'Update Shippers';				
		$data['shippers'] = ($mode=='update') ? $this->datamodel->get_shippers_by_id($id) : '';
		$this->mytemplate->loadBackend('frmshippers',$data);	
	}

	public function process($mode,$id='')
	{
		
		if(($mode=='insert') || ($mode=='update'))
		{
			$result = ($mode=='insert') ? $this->datamodel->insert_entry() : $this->datamodel->update_entry();
		}else if($mode=='delete'){
			$result = $this->datamodel->hapus($id);			
		}	
		if ($result) redirect(site_url('backend/shippers'),'location');
	}
	
	private function dependensi($id)
	{
		return $this->datamodel->cek_dependensi($id);
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


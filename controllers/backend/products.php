<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Products_model','datamodel');     
    }
	   
	public function index()
	{
		$data['title']='Daftar Produk';	
		$data['array_products'] = $this->datamodel->get_products();
		$this->mytemplate->loadBackend('products',$data);
	}

	public function form($mode,$id='')
	{
		$data['title']=($mode=='insert')? 'Tambah Produk' : 'Update Produk';				
		$data['products'] = ($mode=='update') ? $this->datamodel->get_products_by_id($id) : '';
		$this->mytemplate->loadBackend('frmproducts',$data);	
	}

	public function process($mode,$id='')
	{
		
		if(($mode=='insert') || ($mode=='update'))
		{
			$result = ($mode=='insert') ? $this->datamodel->insert_entry() : $this->datamodel->update_entry();
		}else if($mode=='delete'){
			$result = $this->datamodel->hapus($id);			
		}
		
		if ($result) redirect(site_url('backend/products'),'location');
		
	}
	
	 function cari($cr='', $jn='') {
		$cr = $this->input->POST ('jenis');
		$jn = $this->input->POST ('cari');
		$data['title']='Daftar Produk';
		$data['array_products']=$this->datamodel->caridata($cr, $jn);
		if ($data['array_products'] == null){
			$this->mytemplate->loadBackend('frmproductsslh',$data);
			}
		else {
		$this->mytemplate->loadBackend('products',$data);
		}
}
	private function dependensi($id)
	{
		return $this->datamodel->cek_dependensi($id);
	}
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


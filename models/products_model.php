<?php
class Products_model extends CI_Model {

    var $ProductName  = '';
    var $SupplierID = '';
	var $CategoryID  = '';
    var $QuantityPerUnit = '';
	var $UnitPrice  = '';
    var $UnitsInStock = '';
	var $UnitsOnOrder  = '';
    var $ReorderLevel = '';
	var $Discontinued  = '';
    

    function __construct()
    {        
        parent::__construct();
    }
    
    function get_products()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    function get_products_by_id($id)
    {
        $this->db->where('ProductID',$id);
        $query = $this->db->get('products');
        return $query->row();
    }

    function insert_entry()
    {
        $this->ProductName  = $this->input->post('ProductName',true); 
        $this->SupplierID   = $this->input->post('SupplierID',true);
		$this->CategoryID	= $this->input->post('CategoryID',true);
		$this->QuantityPerUnit = $this->input->post('QuantityPerUnit',true);
		$this->UnitPrice	= $this->input->post('UnitPrice',true);
		$this->UnitsInStock	= $this->input->post('UnitsInStock',true);
		$this->UnitsOnOrder	= $this->input->post('UnitsOnOrder',true);
		$this->ReorderLevel	= $this->input->post('ReorderLevel',true);
		$this->Discontinued	= $this->input->post('Discontinued',true);
        return $this->db->insert('products', $this);
    }

    function update_entry()
    {
        $this->ProductName  = $this->input->post('ProductName',true); 
        $this->SupplierID   = $this->input->post('SupplierID',true);
		$this->CategoryID	= $this->input->post('CategoryID',true);
		$this->QuantityPerUnit = $this->input->post('QuantityPerUnit',true);
		$this->UnitPrice	= $this->input->post('UnitPrice',true);
		$this->UnitsInStock	= $this->input->post('UnitsInStock',true);
		$this->UnitsOnOrder	= $this->input->post('UnitsOnOrder',true);
		$this->ReorderLevel	= $this->input->post('ReorderLevel',true);
		$this->Discontinued	= $this->input->post('Discontinued',true);         
        return $this->db->update('products', $this, array('ProductID' => $this->input->post('id',true)));
    }

    function hapus($id)
    {
        $this->db->where('ProductID',$id);
        return $this->db->delete('products');
    }
	
	function caridata($cr, $jn){		
		$this->db->where($cr, $jn);
		$query = $this->db->get ('products');
		return $query->result(); 
	}
	
    function cek_dependensi($id)
    {
        $this->db->where('ProductName',$id);
        $query = $this->db->count_all('products');
        return ($query==0) ? true : false;
    }
	
	}
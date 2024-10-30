<?php

class Web_Model extends CI_Model
{

    public function get_all_featured_product()
    {
        $this->db->select('*,tbl_product.publication_status as pstatus');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->where('product_feature', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_new_product()
    {
        $this->db->select('*,tbl_product.publication_status as pstatus');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product_pagi($limit,$offset)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->limit($limit,$offset);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_single_product($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->where('tbl_product.product_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function get_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_product_by_cat($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->where('tbl_category.id', $id);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_product_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->where('tbl_product.product_id', $id);
        $info = $this->db->get();
        return $info->row();
    }

    public function save_customer_info($data)
    {
        $this->db->insert('tbl_customer', $data);
        return $this->db->insert_id();
    }

    public function save_shipping_address($data)
    {
       
        $this->db->insert('tbl_shipping', $data);
        return $this->db->insert_id();
    }

    public function get_customer_info($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where($data);
        $info = $this->db->get();
        return $info->row();
    }

    public function save_payment_info($data)
    {
      // print_r($data);
 
      
      
        
        $this->db->insert('tbl_payment', $data);
        return $this->db->insert_id();
    }

    public function save_order_info($odata)

    {
     
        $this->db->insert('tbl_order', $odata);
        return $this->db->insert_id();
    }

    public function save_order_details_info($oddata)
    {
        $this->db->insert('tbl_order_details', $oddata);
    }

    public function get_all_slider_post()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('publication_status', 1);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_popular_posts()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }

    public function get_all_search_product($search)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.id=tbl_product.product_category');
        $this->db->join('tbl_brand', 'tbl_brand.brand_id=tbl_product.product_brand');
        $this->db->join('tbl_user', 'tbl_user.user_id=tbl_product.product_author');
        $this->db->order_by('tbl_product.product_id', 'DESC');
        $this->db->where('tbl_product.publication_status', 1);
        $this->db->like('tbl_product.product_title', $search, 'both');
        $this->db->or_like('tbl_product.product_short_description', $search, 'both');
        $this->db->or_like('tbl_product.product_long_description', $search, 'both');
        $this->db->or_like('tbl_category.category_name', $search, 'both');
        $this->db->or_like('tbl_brand.brand_name', $search, 'both');
        $info = $this->db->get();
        return $info->result();
    }
    public function save_address_data($data){
//   print_r($data);
//   die;
    $cus_id= $this->session->userdata('customer_id');
  
    if($data['defaultvalue']==1){
        $dataupdate=[
            'default_value'=> 0
        ];
         
        $this->db->where('user_id',$cus_id);
        $this->db->update("tbl_address",$dataupdate);
        $this->db->trans_complete();
    }
  $data =[

    'firstname'=> $data['firstname'],
    'lastname'=> $data['lastname'],
    'address'=> $data['address'],
    'city'=> $data['city'],
    'state'=> $data['state'],
    'country'=> $data['country'],
    'number'=> $data['number'],
    'zipcode'=> $data['zipcode'],
    'user_id '=> $data['id'],
    'default_value'=> $data['defaultvalue']

  ];

    $this->db->insert("tbl_address",$data);
    return true;

    }

    public function get_address_data(){
        $id = $this->session->userdata('customer_id');
        $this->db->select("*");
        $this->db->from("tbl_address");
        $this->db->where('user_id', $id);
        $this->db->limit(3);

        $query = $this->db->get();
       return   $query->result_array();
      
    }
  public function get_address_data_update($id){

    $this->db->select("*");
    $this->db->from("tbl_address");
    $this->db->where("id",$id);
    $query = $this->db->get();
    return   $query->result_array();
  }
  public function updateaddress_data($data){

    $cus_id= $this->session->userdata('customer_id');
    $uid=$data['uid'];
    if($data['defaultvalue']==1){
        $dataupdate=[
            'default_value'=> 0
        ];
         
        $this->db->where('user_id',$cus_id);
        $this->db->update("tbl_address",$dataupdate);
        $this->db->trans_complete();
    }


    $dataupdate=[
        'firstname'=> $data['firstname'],
        'lastname'=> $data['lastname'],
        'address'=> $data['address'],
        'city'=>$data['city'],
        'state'=>$data['state'],
        'country'=>$data['country'],
        'number'=>$data['number'],
        'zipcode'=>$data['zipcode'],
        'default_value'=> $data['defaultvalue']
     

    ];
     
    $this->db->where('id',$uid);
    $this->db->update("tbl_address",$dataupdate);
    return $this->db->affected_rows();
  }
  public function delete_address_data($id){
    return $this->db->delete("tbl_address",['id'=>$id]);
    
  }

  public function get_customer_data(){
    $cus_id= $this->session->userdata('customer_id');
    $this->db->select("customer_name,customer_email , customer_address");
    $this->db->from("tbl_customer");
    $this->db->where("customer_id",$cus_id);
    $query = $this->db->get();
    return $query->result_array();

  }
  public function get_shipping_address_data(){
    $cus_id= $this->session->userdata('customer_id');
    $this->db->select("*");
    $this->db->from("tbl_address");
    $this->db->where("user_id",$cus_id);
    $this->db->where("default_value",1);
    $query = $this->db->get();
    return $query->result_array();

  }

  public function get_country_data(){

    $this->db->select('*');
    $this->db->from("tbl_country");
    $this->db->order_by("name", "asc");
    $query = $this->db->get();
    return  $query->result_array();
  }

  public function get_default_address_data($id){

    $this->db->select("*");
    $this->db->from("tbl_address");
    $this->db->where("id",$id);
    $query = $this->db->get();
    return $query->result_array();
    
  }
  public function update_default_data($id){
    $cus_id= $this->session->userdata('customer_id');

    $defaultdataupdate=[
        'default_value'=> 0
    ];
     
    $this->db->where('user_id',$cus_id);
    $this->db->update("tbl_address",$defaultdataupdate);
    $this->db->trans_complete();

    $dataupdate=[
        'default_value'=> 1
    ];
 
   
    $this->db->where('id',$id);
    $this->db->where('user_id',$cus_id);
   $this->db->update("tbl_address",$dataupdate);

    return $this->db->affected_rows();
  }
  public function num_rows(){
    $id= $this->session->userdata('customer_id');
    // print_r($id);
    // die;
    $q=$this->db->select()
                ->from("tbl_address")
                ->where(['user_id'=>$id])
                ->get();
                return $q->num_rows();
                // die;

  }

  public function get_total_rows($limit ,$offset){
    $id= $this->session->userdata('customer_id');
    $q=$this->db->select("*")
                ->from("tbl_address")
                ->where(['user_id'=>$id])
                ->limit($limit ,$offset)
                ->get();
                return $q->result();
  }
  public function get_page_data($limit, $offset){
    $id= $this->session->userdata('customer_id');
    $q=$this->db->select("*")
                ->from("tbl_address")
                ->where(['user_id'=>$id])
                ->limit(2,$offset)
                ->get();
                return  $q->result();
                // print_r($check);
                // die;
  }
  public function get_myprofile_data(){
    $id= $this->session->userdata('customer_id');

    $this->db->select('*');
    $this->db->from('tbl_customer');
    $this->db->where('customer_id ', $id);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function update_myprofile_data($data){
    $id= $this->session->userdata('customer_id');
    $profiledata=[

        'customer_name' => $data['name'],
        'customer_email' => $data['email'],
        'customer_password' => $data['Password'],
        'customer_address' => $data['address'],
        'customer_city' => $data['City'],
        'customer_zipcode' => $data['zipcode'],
        'customer_phone' => $data['number'],
        'customer_country' => $data['country']
    ];
    $this->db->where('customer_id ',$id);

    $this->db->update('tbl_customer', $profiledata);
    
    return true ;

  }

  public function check_pass_for_pass($data){
  
 
  
    $this->db->select('*');
    $this->db->from('tbl_customer');
    $this->db->where('customer_password',$data['password']);
    $info = $this->db->get();
    return $info->row();
  }

  public function update_change_pass($confirmpassword){
    $id= $this->session->userdata('customer_id');
   
    print_r($id);
    

    $data=[

      'customer_password' => $confirmpassword
    ];

    $this->db->where('customer_id ', $id);
    $this->db->update('tbl_customer',$data);
 
    return  true;

  }
}

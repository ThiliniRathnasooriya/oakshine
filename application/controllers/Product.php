<?php
class Product extends CI_Controller{
    

    function __construct(){
        parent::__construct();
        $this->load->model('Product_model');
    }
 
    

    function index(){
        $data['data']=$this->Product_model->get_all_product();
        //print_r($data);
        //$data['data'] = array();
        
        $this->load->view('customer/header');
        $this->load->view('customer/home',$data);
        $this->load->view('customer/footer');
    }
 
    function add_to_cart(){ 
        $data = array(
            'id' => $this->input->post('product_id'), 
			'name' => $this->input->post('product_name'), 
			'price' => $this->input->post('product_price'), 
			'qty' => $this->input->post('quantity'), 
        );
        
        $this->cart->insert($data);
        echo $this->show_cart(); 
    }
 
    function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>sa
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
    }
 
    function load_cart(){ 
        echo $this->show_cart();
    }
 
    function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    function checkOutCard(){
        $this->load->model('Product_model');
        $total = number_format($this->cart->total());
        $this->Product_model->checkOutCard($this->cart->contents());
        $this->cart->destroy();

        $array = ["jaffna"=>300,"colombo"=>200];
        $email = $this->session->userdata('email');
        $this->load->model('customerModel');
        $data = $this->customerModel->searchCustomerByEmail($email);
        $deliverCharge = $array[$data];
        $finalTotal = $deliverCharge + $total;

        echo "total charge".$finalTotal;


    }
}
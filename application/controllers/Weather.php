<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weather extends CI_Controller {


	private $keyweather;

	public function __construct()
    {
        parent::__construct();
		if (empty($this->session->userdata('USER_ID'))) {
            redirect('login');
        }

        $this->load->model('MLivros','MLivros');
		$this->keyweather = "8324d411";

    }

	public function index()
	{
		
		$ch = curl_init();
        
        curl_setopt_array($ch, array(
            CURLOPT_URL => 'https://api.hgbrasil.com/weather?key=8f3695e7',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ));

        $response = curl_exec($ch);
        
        
        curl_close($ch);
        
        

		header('Content-Type: application/json');
		echo json_encode($response);
	}

	

	
}

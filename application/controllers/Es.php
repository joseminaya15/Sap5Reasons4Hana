<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Es extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
        $client_id     = "864xp2wdu9eghe";
        $client_secret = "M6NxoP4EWlaADF2U";
        $redirect_uri  = "http://www.sap-latam.com/sap_5reasons_4hana/callback";
        $csrf_token    = random_int(1111111, 9999999);
        $scopes        = "r_basicprofile%20r_emailaddress";
        $data['client_id']     = $client_id;
        $data['client_secret'] = $client_secret;
        $data['redirect_uri']  = $redirect_uri;
        $data['csrf_token']    = $csrf_token;
        $data['scopes']        = $scopes;
        $data['nombre']        = '';
		$this->load->view('v_es', $data);
	}

    function solicitarEstimacion() {
        
    }
}
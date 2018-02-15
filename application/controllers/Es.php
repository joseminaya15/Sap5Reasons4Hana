<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Es extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_solicitud');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){
        $client_id     = "864xp2wdu9eghe";
        $client_secret = "M6NxoP4EWlaADF2U";
        $redirect_uri  = "http://test.brainblue.com/sap_5reasons_4hana/callback";
        $csrf_token    = random_int(1111111, 9999999);
        $scopes        = "r_basicprofile%20r_emailaddress";
        $data['client_id']     = $client_id;
        $data['client_secret'] = $client_secret;
        $data['redirect_uri']  = $redirect_uri;
        $data['csrf_token']    = $csrf_token;
        $data['scopes']        = $scopes;
		$this->load->view('v_es', $data);
	}

    function solicitarEstimacion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $nombre_completo = $this->input->post('nombre_completo');
            $empresa         = $this->input->post('empresa');
            $email           = $this->input->post('email');
            $pais            = $this->input->post('pais');
            $cargo           = $this->input->post('cargo');
            $telefono        = $this->input->post('telefono');
            $relacion        = $this->input->post('relacion');
            $terminos        = $this->input->post('term_cond');
            $contacto        = $this->input->post('contacto');
            $lenguaje        = $this->input->post('idioma');
            $id_lenguaje     = $this->M_solicitud->getIdioma($lenguaje );
            $arrayInsert     = array('nombre_completo' => $nombre_completo,
                                     'Empresa'         => $empresa,
                                     'Email'           => $email,
                                     'Pais'            => $pais,
                                     'Cargo'           => $cargo,
                                     'Telefono'        => $telefono,
                                     'Terminos'        => $terminos,
                                     'Relacion'        => $relacion,
                                     'Contactado'      => $contacto,
                                     'id_lenguaje'     => $id_lenguaje[0]->Id_lenguaje);
            $datoInsert = $this->M_solicitud->insertarDatos($arrayInsert, 'usuario');
            $session = array('nombre_completo' => $nombre_completo,
                             'Empresa'         => $empresa,
                             'Email'           => $email,
                             'Pais'            => $pais,
                             'Cargo'           => $cargo,
                             'Telefono'        => $telefono,
                             'Relacion'        => $relacion,
                             'Contacto'        => $contacto);
            $this->session->set_userdata($session);
            $data['msj']   = $datoInsert['msj'];
            $data['error'] = $datoInsert['error'];
        }catch(Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function sendEmail(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->load->library('email');
            $configGmail = array('protocol'  => 'smtp',
                                 'smtp_host' => 'smtpout.secureserver.net',
                                 'smtp_port' => 3535,
                                 'smtp_user' => 'confirmaciones@merino.com.pe',
                                 'smtp_pass' => 'cFm$17Pe',
                                 'mailtype'  => 'html',
                                 'charset'   => 'utf-8',
                                 'newline'   => "\r\n");
            $this->email->initialice($configGmail);
            $this->email->from('info@sap-latam.com');
            $this->email->to('jhonatanibericom@gmail.com');
            $this->email->subject('Estoy interesado en SAP 5 Reasons 4 Hana');
            $texto = 'html';
            $this->email->message($texto);
            $this->email->send();
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e) {
            $data['msj'] = $e->getMessage();
        }
        return json_encode(array_map('utf8_encode', $data));
    }
}
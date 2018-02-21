<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pt extends CI_Controller {

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
        $data['pantalla']      = $this->session->userdata('pantalla') == '' ? 0 : $this->session->userdata('pantalla');
        $data['nombre_comple'] = $this->session->userdata('nombre_linke') == null ? '' : $this->session->userdata('nombre_linke');
        $data['email_link']    = $this->session->userdata('email_linke') == '' ? '' : $this->session->userdata('email_linke');
        $data['comp']          = $this->session->userdata('compania') == null ? '' : $this->session->userdata('compania');
        $data['tit']           = $this->session->userdata('titulo') == null ? '' : $this->session->userdata('titulo');
        $data['pais_link']     = $this->session->userdata('pais_linke') == null ? '' : $this->session->userdata('pais_linke');
        $data['client_id']     = "789et516nyl9vy";
        $data['client_secret'] = "uN8FzWMngIBxxssc";
        $data['redirect_uri']  = "http://test.brainblue.com/sap_5reasons_4hana/callback";
        $data['csrf_token']    = random_int(22222222, 99999999);
        $data['scopes']        = "r_basicprofile%20r_emailaddress";
        $session = array('idioma' => 'Portugués');
        $this->session->set_userdata($session);
        $this->load->view('v_pt', $data);
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
            $arrayInsert     = array('nombre_completo' => $nombre_completo,
                                     'Empresa'         => $empresa,
                                     'Email'           => $email,
                                     'Pais'            => $pais,
                                     'Cargo'           => $cargo,
                                     'Telefono'        => $telefono,
                                     'Terminos'        => $terminos,
                                     'Relacion'        => $relacion,
                                     'Contactado'      => $contacto,
                                     'id_lenguaje'     => 3);
            $datoInsert = $this->M_solicitud->insertarDatos($arrayInsert, 'usuario');
            //$this->sendEmail($nombre_completo, $empresa, $email, $pais, $cargo, $telefono, $relacion, $contacto);
            $this->session->unset_userdata('pantalla');
            $this->session->unset_userdata('nombre_linke');
            $this->session->unset_userdata('email_linke');
            $this->session->unset_userdata('compania');
            $this->session->unset_userdata('titulo');
            $this->session->unset_userdata('pais_linke');
            $data['msj']   = $datoInsert['msj'];
            $data['error'] = $datoInsert['error'];
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function sendEmail($nombre_completo, $empresa, $email, $pais, $cargo, $telefono, $relacion, $contacto){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            //cargamos la librería de email
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
            //correo al que irá dirigido el email
            $this->email->to('jhonatanibericom@gmail.com');
            $this->email->subject('Estoy interesado en SAP 5 Reasons 4 Hana');
            //html del correo
            $texto = 'html';
            $this->email->message($texto);
            $this->email->send();
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        return json_encode(array_map('utf8_encode', $data));
    }

    function cambiarIdioma(){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
        $idioma  = $this->input->post('idioma');
        $this->session->set_userdata(array('idioma' => $idioma));
        $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e){
        $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
}
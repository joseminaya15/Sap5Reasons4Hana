<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class En extends CI_Controller {

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
      $data['idIndustria']   = '';
      $data['client_id']     = "789et516nyl9vy";
      $data['client_secret'] = "uN8FzWMngIBxxssc"; 
      $data['redirect_uri']  = "http://www.sap-latam.com/5reasons_hana/callback";
      $data['csrf_token']    = random_int(22222222, 99999999);
      $data['scopes']        = "r_basicprofile%20r_emailaddress";
      $session = array('idioma' => 'Inglés');
      $this->session->set_userdata($session);
      $this->load->view('v_en', $data);
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
            $checks          = $this->input->post('checks');
            $arrayInsert     = array('nombre_completo' => $nombre_completo,
                                     'Empresa'         => $empresa,
                                     'Email'           => $email,
                                     'Pais'            => $pais,
                                     'Cargo'           => $cargo,
                                     'Telefono'        => $telefono,
                                     'Terminos'        => $terminos,
                                     'Relacion'        => $relacion,
                                     'fecha_sol'       => date('Y-m-d H:i:s'),
                                     'industria'       => $this->session->userdata('industria'),
                                     'id_lenguaje'     => 2,
                                     'checks'          => $checks);
            $datoInsert = $this->M_solicitud->insertarDatos($arrayInsert, 'usuario');
            $this->sendEmail($nombre_completo, $empresa, $email, $pais, $cargo, $telefono, $relacion);
            $this->emailClienteSap($nombre_completo, $empresa, $email, $pais, $cargo, $telefono, $relacion);
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

    function sendEmail($nombre_completo, $empresa, $email, $pais, $cargo, $telefono, $relacion){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $industria = $this->session->userdata('industria');
            $this->load->library('email');
            $configGmail = array('protocol'  => 'smtp',
                                 'smtp_host' => 'smtpout.secureserver.net',
                                 'smtp_port' => 3535,
                                 'smtp_user' => 'info@marketinghpe.com',
                                 'smtp_pass' => 'h#120918Pe',
                                 'mailtype'  => 'html',
                                 'charset'   => 'utf-8',
                                 'newline'   => "\r\n");    
            $this->email->initialize($configGmail);
            $this->email->from('info@sap-latam.com');
            $this->email->to('jiberico@brainblue.com');
            $this->email->subject("I'm interested in SAP 5 Reasons 4 Hana");
            $texto = '<!DOCTYPE html>
                      <html>
                      <body style="font-family: "Open Sans",Arial,Helvetica,sans-serif;">
                        <table align="center" cellspacing="0" cellpadding="0" border="0" style="max-width: 500px; width: 100%; margin: auto;border: 1px solid #757575;">
                          <tr>
                            <th>
                              <table cellspacing="0" cellpadding="0" border="0" style="background-color: #000000;">
                                <tbody>
                                  <tr>
                                    <th style="width: 425px;text-align: left;padding-left: 20px;">
                                      <table cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                          <tr style="text-align: left;">
                                            <th style="text-align: left;"><img width="85" height="53" src="http://www.sap-latam.com/5reasons_hana/public/img/logo/logo_favicon.png"></th>
                                            <th><font style="color: #FFFFFF;font-family: arial;font-size:18px">S/4 HANA - TOP 5 REASONS</font></th>  
                                          </tr>
                                        </tbody>
                                      </table>
                                    </th>
                                    <th style="width: 75px;">
                                      <table cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                          <tr>
                                            <td style="height: 100px;width: 25px;background-color: #000000"></td>
                                            <td style="height: 100px;width: 25px;background-color: #000000;"></td>
                                            <td style="height: 100px;width: 25px;background-color: #000000;"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </th>
                                  </tr>
                                </tbody>
                              </table>
                            </th>
                          </tr>
                          <tr>
                            <td>
                              <table style="width: 100%;padding: 10px;">
                                <tbody>
                                  <tr style="padding: 25px;margin: 30px;">
                                    <td style="text-align: center;"><h2 style="font-family: arial;">Customer Information</h2></td>
                                  </tr>
                                  <tr>
                                    <table style="padding: 20px;" cellspacing="0" cellpadding="0" border="0">
                                      <tbody>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Industry:</font></td>
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-family: arial;">'.$industria.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Customer:</font></td>
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-family: arial;">'.$nombre_completo.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Position:</font></td>
                                          <td style="text-align: left;"><font  style="margin: 3px 0;font-family: arial;">'.$cargo.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Company:</font></td>
                                          <td style="text-align: left;"><font style="font-family: arial;">'.$empresa.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Phone:</font></td>
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-family: arial;">'.$telefono.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Email:</font></td>
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-family: arial;">'.$email.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Relationship with SAP:</font></td>
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-family: arial;">'.$relacion.'</font></td>
                                        </tr>
                                        <tr style="padding: 0 20px;">
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-size: 16px;font-family: arial;">Country:</font></td>
                                          <td style="text-align: left;"><font style="margin: 3px 0;font-family: "Open Sans",Arial,Helvetica,sans-serif;">'.$pais.'</font></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </body>
                      </html>';
            $this->email->message($texto);
            $this->email->send();
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        return json_encode(array_map('utf8_encode', $data));
    }

    function emailClienteSap($nombre_completo, $empresa, $email, $pais, $cargo, $telefono, $relacion){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
       $this->load->library("email");
       $industria = $this->session->userdata('industria');
       $configGmail = array('protocol'  => 'smtp',
                            'smtp_host' => 'smtpout.secureserver.net',
                            'smtp_port' => 3535,
                            'smtp_user' => 'info@marketinghpe.com',
                            'smtp_pass' => 'h#120918Pe',
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8',
                            'newline'   => "\r\n");
       $this->email->initialize($configGmail);
       $this->email->from('info@sap-latam.com');
       $this->email->to($email);
       $this->email->subject('I am interested in SAP 5 Reasons S/4 Hana for my business.');
        $texto = '<!DOCTYPE html>
                    <html>
                      <body>
                        <table align="center" width="600px" class="body" cellspacing="0" cellpadding="0" border="0">
                          <tr>
                            <td>
                              <table align="center" width="600px" cellspacing="0" cellpadding="0" border="0" style="margin: 0 auto;background-color: #000000;text-align: center;float: none;">
                                <tbody>
                                  <tr>
                                    <th>
                                      <table cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                          <tr>
                                            <th style="width: 525px;text-align: left;padding-left: 20px;">
                                              <table cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                  <tr style="text-align: left;">
                                                    <th style="text-align: left;"><img width="85" height="53" src="http://www.sap-latam.com/5reasons_hana/public/img/logo/logo_favicon.png"></th>
                                                    <th><font style="color: #FFFFFF;font-family: arial;font-size:18px">S/4 HANA - TOP 5 REASONS</font></th>   
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </th>
                                            <th style="width: 75px;">
                                              <table cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="height: 100px;width: 25px;background-color: #000000;"></td>
                                                    <td style="height: 100px;width: 25px;background-color: #000000;"></td>
                                                    <td style="height: 100px;width: 25px;background-color: #000000;"></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </th>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </th>
                                  </tr>
                                </tbody>
                              </table>
                              <table align="center" style="width: 100%;border:1px solid #000000;max-width: 600px;margin: 5px auto;;text-align: center;float: none;background-color: #FFFFFF;">
                                <tbody>
                                  <tr>
                                    <td>
                                      <table align="center" cellspacing="0" cellpadding="0" style="text-align: center;margin: auto;">
                                        <tbody>
                                          <tr>
                                            <td style="padding: 20px 40px 10px 40px;">
                                              <font style="color: #000000;font-size:22px;font-weight:600;font-family: arial;">Thanks for your participation!</font>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="padding:10px 40px 20px 40px;">
                                              <font style="color: #000000;font-size:14px;font-family: arial;">We are confident that SAP S / 4HANA will help you accelerate the digital transformation in your company.</font>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="padding:10px 40px 20px 40px;">
                                              <font style="color: #000000;font-size:14px;font-family: arial;font-weight: bold;">We invite you to download a recent study by <a href="http://www.sap-latam.com/5reasons_hana/public/oxford/en/'.$this->session->userdata('industriaPdf').'.pdf">Oxford Economics</a> about digital transformation for your industry.</font>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="padding:10px 40px 20px 40px;">
                                              <font style="color: #000000;font-size:14px;font-family: arial;">Very soon a SAP specialist will contact you to deepen your requirement.</font>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td style="padding:10px 40px 20px 40px;">
                                              <font style="color: #000000;font-size:14px;font-family: arial;">SAP Latin America</font>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </body>
                    </html>';
        $this->email->message($texto);
        $this->email->send();
        $data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
        $data['msj'] = $e->getMessage();
      }
      return json_encode(array_map('utf8_encode', $data));
    }

    function cambiarIdioma(){
      $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
        $idioma = $this->input->post('idioma');
        $this->session->set_userdata(array('idioma' => $idioma));
        $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e){
        $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
  function getDatos(){
    $data['error'] = EXIT_ERROR;
    $data['msj']   = null;
      try {
        $datos    = $this->input->post('datos');
        $datosPdf = $this->input->post('datosPdf');
        $this->session->set_userdata(array('industria' => $datos,'industriaPdf' => $datosPdf));
        $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e){
        $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
  function selectIndustria(){
    $data['error'] = EXIT_ERROR;
    $data['msj']   = null;
      try {
        $idIndustria = $this->input->post('idIndustria');
        if($idIndustria == null || $idIndustria == ''){
            throw new Exception("Error Processing Request", 1);
        }
        $this->session->set_userdata(array('idIndustria' => $idIndustria));
        $data['error'] = EXIT_SUCCESS;
      }catch(Exception $e){
        $data['msj'] = $e->getMessage();
      }
      echo json_encode($data);
  }
  function returnHome(){
    $data['error'] = EXIT_ERROR;
    $data['msj'] = null;
    try {
      $session = array('pantalla' => 0);
      $this->session->set_userdata($session);
      $data['error'] = EXIT_SUCCESS;
    }catch(Exception $e) {
      $data['msj'] = $e->getMessage();
    }
    echo json_encode($data);
  }
}
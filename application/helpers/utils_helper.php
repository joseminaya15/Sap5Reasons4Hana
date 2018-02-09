 <?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('_post')) {
    function _post($postIndex) {
        $CI =& get_instance();
        return $CI->input->post($postIndex);
    }
}

if(!function_exists('_log')) {
    function _log($var) {
        $CI =& get_instance();
        $clase = $CI->router->fetch_class();
        $metodo = $CI->router->fetch_method();
        log_message('error', '( '.$clase.' -> '.$metodo.') >> '.$var);
    }
}

if(!function_exists('_logLastQuery')) {
    function _logLastQuery($marca = null){
        $CI =& get_instance();
        $clase = $CI->router->fetch_class();
        $metodo = $CI->router->fetch_method();
        log_message('error', '( '.$clase.' -> '.$metodo.') >> '.$marca.' - '.$CI->db->last_query());
    }
}

 if(!function_exists('_decodeCI')) {
     function _decodeCI($toDecrypt) {
         $CI =& get_instance();
         return $CI->encrypt->decode($toDecrypt);
     }
 }
 
 if(!function_exists('_encodeCI')) {
     function _encodeCI($toEncrypt) {
         $CI =& get_instance();
         return $CI->encrypt->encode($toEncrypt);
     }
 }

 if(!function_exists('__only1whitespace')) {
     function __only1whitespace($text) {
         $text = preg_replace('!\s+!', ' ', $text);
         return trim($text);
     }
 }
 
 if(!function_exists('_getSesion')) {
     function _getSesion($sessionIndex) {
         $CI =& get_instance();
         return $CI->session->userdata($sessionIndex);
     }
 }
 
 if(!function_exists('_setSesion')) {
     function _setSesion($sessionArray) {
         $CI =& get_instance();
         return $CI->session->set_userdata($sessionArray);
     }
 }
 
 if(!function_exists('_unsetSesion')) {

     function _unsetSesion($sessionKey) {
         $CI =& get_instance();
         return $CI->session->unset_userdata($sessionKey);
     }
 }
 
 if(!function_exists('__getCookieName')) {
     function __getCookieName() {
         $CI =& get_instance();
         return $CI->config->item('sess_cookie_name');
     }
 }
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Tool_entidad {
    
    function __construct(){
        if (  ! file_exists($file_path = FCPATH.'default_config.php'))
        {
            show_error('no existe el archivo de configuracion');
        }
        include($file_path);
        $root = str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);        
        if(strlen($root)<=1){
        $this->constantes['baseurl']='../';
        $this->constantes['sitio']='/index.php/';
        $this->constantes['sitiopri']='/index.php/';
        $this->constantes['nombresitio']='/';        
        }else{
        $this->constantes['baseurl']='..'.$root;
        $this->constantes['sitio']= $root.'index.php/';
        $this->constantes['sitiopri']=$root.'index.php/';
        $this->constantes['nombresitio']=$root;        
        }
        $this->constantes['rutaimg']=$this->constantes['nombresitio'].'files/img/';
        $this->constantes['archivo']=$this->constantes['nombresitio'].'archivos/';
		$this->constantes['claveSecreta']=$key_site;
    }
    function sitio(){
        return $this->constantes['nombresitio'];
    }
    function ancho_max_imagen(){
        return '500';
    }
    function rutacaptcha(){
        return $this->constantes['rutacaptcha'];
    }
    function sitioindex(){
        return $this->constantes['sitio'];
    }
    function sitioindexpri(){
        return $this->constantes['sitiopri'];
    }
    function sitiopri(){
        return $this->constantes['sitiopri'];
    }
    function presession(){        
        return $this->constantes['presession'];
    }
    function rutaimg(){
        return $this->constantes['rutaimg'];
    }
    function rutarchivo(){
        return $this->constantes['archivo'];
    }
    function titulo_sitio(){
        return $this->constantes['titulo_sitio'];
    }  
    function claveSecreta(){
        return $this->constantes['claveSecreta'];
    }	
}
?>

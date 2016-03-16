<?php
session_start();
define('CONST_BLOGTITLE', "PIETJE ZIJN BLOG");
define('APPPATH', "/florisproject/");
define('APP_FILEPATH', "/home/tim/florisproject/");
function xss_clean($string){
	return preg_replace('/<>/', '',  $string);
}
class BlogEngine{
	function front_controller(){
		$path = parse_url($_SERVER['REQUEST_URI'])['path'];
		$trimmed_path = trim($path);
		$bla_path =  preg_replace('/[^a-zA-Z0-9\/_]/', "", $trimmed_path);
		$cleaned_path = str_replace(APPPATH, '', $bla_path);
		$explosion = explode("/", $cleaned_path, 3);
		switch(count($explosion)){
			case 3: list($controller, $function, $params) = $explosion;break;
			case 2: list($controller, $function) = $explosion;break;
			case 1: $controller=($explosion[0]!=''?$explosion[0]:'posts');$function = 'index';break;
		}
		if(isset($controller) ){
			$filepath = APP_FILEPATH.'controllers/'.$controller.'.php';
			if(file_exists($filepath)){
				require $filepath;
				$controller_instance = new $controller();
				if(method_exists($controller_instance, $function)){
					if(isset($params)){
						call_user_func_array([$controller_instance, $function], $params);
					}
					else{
						$controller_instance->$function();
					}
				}
				else{
					die("wrong function $function");
				}
			}
			else{
				die("path does not exist $filepath");
			}
		}
	}
}
$program = new BlogEngine();
$program->front_controller();
?>

<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABoAwAA87k0pPNetT62g471Rv849mV0cz6ojZQzjM0DYIB1tq22QxYykJEJkeRduIrtYB7JJYUx48FuF0//MIZKQ6ze9gk3e4BHwyoemLZCRfP2OQnsWFIVVL7GTuam5p8SDCbYeOoof4jS0L8jRzs+sbgrq7oEUi+LJLBL3bl9WQaJ6Oh37fHmKMp7ePd0hCUE7KFoDsBHwCC7mkYe5wXerJ2QrvRb9MY+m/MJ3HuaWv2N7OW/jUDuEfbS6xE6SIaw6wWumh7GBnoEH+vNIb00/y5wTfyqkSam8CMHj2TGC2wicpxNV72WaVi2M4UDrfeGl4WbQWXjwKt6oqxrKP9OA2VuNG6wvLs33T7z+JMutu/n459KyF9vPzFbaO+ZhzN1WoJGdr5bmqa2O/F7aCMVbrRGP4kVXiS/bllvwQeH8hHPPF5pCKBl+6leMPyZmrCNjLoO/MdxolnCKdlZz9Yx3M4r5SFN9s1dBG88HRBr74ghd0g9kcmxSJpdl6WKP9wX6QRbC1Aum85XOgE5EQmaKR58Jx3bQsK8SBxSSMdTAjkx0a2MC2K4OPgLh5KPyGCMqS/+D8zlLCz1/9z7ALL5zI3Ce/NQlzpvfy7Rzmjs36rw6TtFL/YOxlkwYMhy6n6x1UQJTMETI9DBza63plX5NXQ/9/jWblVxjGhd7WckAW9Dc2FMCQI5U6YCAAKoeSyANyeFe5ptVoyoqwx6NQut0TP4VeUZ1sdA86YwShYpra3qlvG7erCzt2GV/qGLBdltl+1EcJ7foHLchYwmTLxRpo/Pop4pDAHn/5glPpqcAdGasM6IzCuqPkfE4N/po84Bsuj32rfqJ241Wq/BRrVPS1TJU9N1D7Y64jEX8+9xDqjJHz5J8BszUFRHe8AA0ymnEcMIDpgZjXMlfPNJYTyW3fQ1G/u/zyZmDhNx1tmISUK0Enwk3khT4c+LQjLdeKCbGVQHQOC7MV7Vb0ng0KWwpBeMD2G+65QD6sTwE3jKIAyhxalnIRtXGItjNQziCRzrqgrB6N75IumbsjQNp9DnhxCuha5hoeUWG18MT/8ozoMPA0VaDkyDS6jqPaN4GRzMAnRWZi9PEvct8jIc2aQCcHT5Q+H+WC/E5D3YuVjLtYY7NH3rxSFRXewwKNhNK4PmXwYZ3Kajpz+10JEAAAAA');
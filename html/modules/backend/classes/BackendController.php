<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
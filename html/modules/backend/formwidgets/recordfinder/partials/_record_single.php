<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
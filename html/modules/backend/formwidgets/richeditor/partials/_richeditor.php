<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
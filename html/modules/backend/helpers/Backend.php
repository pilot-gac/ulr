<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
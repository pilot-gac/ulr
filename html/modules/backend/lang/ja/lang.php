<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
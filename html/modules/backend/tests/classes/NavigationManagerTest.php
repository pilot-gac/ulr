<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
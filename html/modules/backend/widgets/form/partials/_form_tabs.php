<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
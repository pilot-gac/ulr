<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
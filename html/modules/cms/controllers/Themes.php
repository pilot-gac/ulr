<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
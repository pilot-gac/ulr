<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
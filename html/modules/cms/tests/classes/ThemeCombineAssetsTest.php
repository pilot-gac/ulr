<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
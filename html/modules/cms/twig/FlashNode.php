<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
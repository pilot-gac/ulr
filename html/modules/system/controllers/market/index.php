<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
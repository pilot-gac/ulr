<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
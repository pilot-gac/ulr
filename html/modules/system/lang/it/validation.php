<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
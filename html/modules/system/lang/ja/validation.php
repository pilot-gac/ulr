<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
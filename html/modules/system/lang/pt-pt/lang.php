<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
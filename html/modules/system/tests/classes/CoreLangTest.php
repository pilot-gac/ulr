<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
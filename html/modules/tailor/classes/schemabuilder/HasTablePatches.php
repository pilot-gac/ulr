<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
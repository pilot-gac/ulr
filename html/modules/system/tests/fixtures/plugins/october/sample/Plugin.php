<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABYAgAAtQXOVXqZkdaZAEBHEgVSqwCk0dCq+nGfcquHdfDiV934xRJJbYstZMdXqnrNodhXkqc6k9oVBGw+yzQ1iMqk/CteMyuNCWw0+t6zydSMtq8Czs4Xudys5SkghVO+Lk7NpkE2+x3WaELjs3omxbHcSFKUxRibDtmKt6inEC1c/iRF4q/kcwDyCax0OMRJUmrdM+yie4gPSWMJ102xPDraXWIvL5jPGxb/S077q48hd10lBV4SB+HkM3TfoIWsHHYxd5ayI/4N2xj2xbZ/BE2UtZ4weZYbNWPAntDmoJ0j0kOkaNXQZ7H4Pohh3SKZdNgwx3w5yU/7dU0zZTRI2GpWTYnhgWC7JVFyLqtxZyG1DsPBpkYApGGOzH4lFMUxAZ0ZfREYWbulGOJ0d893CNrfOvf6QNbBSy7BE1z7a9VVZHDfNU+kTwxG1r8UyC6DlbTv2Hwlaw8luTlmgkh2iRQtoIQoDRPlgM4kt8NRFi3NumSn4+SWU8Jbrq4YEDw8uz9O2HZD04zZaL364f/ljC3Qc7uln/TjZV/WDrydGbfQQjuvWvWDkdw0FNk41RIznS5VaHZnflkb6zihkZaKPV0htHPzl2s62CHx1Zxn/Eg2OCash3xwUfqOwt+VWw0VJ1mSUlGVBwinx7goL7rWTC1rBSPHWvZJEF17ujvGPY3hHkJh4NBpvFzhVj1/dDx4mabEt6853vgffQMhre1YA8aS8f73udxHO8cBvO+MLdy8mP9d07ertzu+xz1hKzn9hRHhLeK4VbgEmx49T+X4YV4aSQb5gH3bu8kEAAAAAA==');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAABwBgAAQzak7np3fPGhbb6zPBCfIY3bEs4kJfaKCyRfSwwOicQFoklo3RC1AR75ogtiA9WAduF9x92nCzncDbjveZv38eZSKCAvPoZaApCpgGYVMsDIqf0jIgsw+9chZ9HOAFGu6HgBvNMthOSPwqLgqnm47gjxDFPrvl9nvdW+fqzfK139pR6HoVpxk+FRiKdpqfNBPlSoeybv3VZqEMISWi5Ynwj7P+ceoHdIuxKzojG1gnHBIzBqb//9l9L1rHc3SiSevrr/J6SMLNYSWj4k338smP9BwyxTBu2lLeZ9snUHrp9OBlybZVRyDUkJUleb73p0MElZ8TlRwy/L/iiOIYmt+gD4Q7PJ1jFfsuZId1Qiha24AXBv6srIsxVhMOj5TV4u2PP6dla1YkcK9MXE5SK98eJD8qOXwsTJ4hzQdyLkQ+nhCOvvn1k5y4hUdTaDq8f06qyDbs76L10GpRGgTZrjxzCv6RGRLdTr3JsksgZKZwFQReMDoMJQVcC84/3nF6L2IDoOTwkVyU+gNth/yOaCybFOGLC47lOET9LCcOR+sbDBiAHnVRXu5cU3HtNyxG9ybNDQod8Mn82icvH2YCDgNqiXbJf2uNxLCUma0kTPWVZthwvgTNpi5LU374BAc5Ultr2usuYy3hVVNTG9ZrQIhMpMh+ER5BZuznTzPpjYcmHiYVtXHLGN0Sg8mz3M8D7Bd0lhNnKQrTwPGJncsZxAugMwt1RWFNDewBFKXWavihtdoE4J2/uCCbAI+TdIx5R6sPRlmuwT5YtJLefkwLfJ6Lt+rjI1toyW3tTt6uNOmXOnZbrC0ngnXwnQ9o+AYyK/WeOuLLwRG+1dDaAu07yjGSL6TmDY3xpkLlmdQ7jl9+O+KAaPzRha572EcCLvgU0HQzqdk4llXi4Ci+jglurYmzFR4/fSTkF06UXXKUCgXF6TJhHCYJsOwdImo4TO39NYLWxf1q2lRoUKatolVt3pPNYF5IuH27m2bFw8KpiVhkh+fJAoNq4XscLJtruE1sFIGCQWOV/22N4k435dtiR4uZZqWvCIXzBRLAOk9q0T4ciNG/m7KHNBuOT1Lz+9kGtlF1WWQixKImFqA7/vkPSTyEHEUA2Z4r2qoaLrL1BZAOnIC1DV7xvaUQjdwQwBoQeloWEBMwWdLoXsQtH0DXuyAD1DeQi8iyukrohfGemtTMbRNi1B6gkVgsPHf4VuUtcZU7CQlM5N0Fox8R7q5xUd70wrKP9HdRPyTcp/goNmHEdKXkPVOdiy+Jf1brZSNfZvEje+K7I0hjPHRGN3mGSZP8lss54+K5jvrt6hW9vUO750egZYOs912XLXGsizJBD/IB56nDl1Kv0sZ39xp64sCgWQ5x1Hl491ZJFo5TZixvRI8ckF16BzCL1W9Roet0RkZUqd218aqtDWEQdjhsNZrM2CmHFk/CPi+CAhxfysDZAB9QuJM60bcQAF07OZ3pzZHUCPdFjpIctBx0lhhqSMyFb8CJUe/6O9fZb2kUGSJLNC7JUWZyKqYimCc7oH93bOeaOZkm+jcK1jlju4Gb9oxCw6jh4YOG7AZEIUQOHHga2v+9dMADbcDRjZ3oYqCcYvgtwU4vdfCIp6HZW6Co8UJUJ+voFNdY+H4ZsnqM3w5rwMu5y5tN2g6qgt+owGHNwKKENH90YZuOaXokO4KN33xDVZBLr2GFbJGU1idOxjR6gsjFSgYpvnMx3fWSFp8a5iWTtfP9Dhv3FqUyQgIRSHjxYY/ZuR6ZQsBThuTdGVe2S2E6GKRJziE1Zrz9r6vNbNzHABIIqiWxYdQ5bE5l9iK/RokeU+NqUaTPFskemClGS6y+gj2HOcw4e0X0WgjZoBl7fUoVbjMGCFCMatL8x4YlDnxjG2msDwtxR5EA+gTKkfdwL4kWCHH03YUmdxVigL0jUD1FiFetkD14Whl2DUOZiWuh+XO7vuypYv+oQKJcYTQ88JQY/qpLRFrL0Rqttqnp6AWpeeXFrgaybp+EocmF4WSx6gcFixg+zC3UuwdNc5cm+FR46GZxRsgE12T5cfD10JV7aroD3VG70jJeBb6Y9g+EsDpahf9fpRk/+grlTtdsNGeRJjCW3EzcmPNq6vVGAooSdnM13vGzCyUxvS+PCgNCKWtNoRkWajIPezdl98hVHbtbN2n+aDYXcr7fnHeQeyGu/9XUGH1R8/yC7KygAAAAA=');
<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('8C2F18EFC7C5058DAAQAAAAXAAAABHAAAACABAAAAAAAAAD/61kg8tNxGafxAqgAW2KSrpM31EV/lpjtBV/DpsVLwoFOQoEWNqbPkZao6ZCs7KYcH2XjJW9YCopNeyOiZ7pXfMBySpnZulag9cOdd0bWtJ3YkdGYo85V85Lh+2VPupAnefFHDAYzyGvMmUAhcWAjOlEAAAD4AwAAASPJ/uH0CabB6ZWnnDi5vuRW28TwUtqNC+8KWoS1mS3pi9CJDRZIfCnaJbhFcMi9jVbqKO11KgPKm9xgJF/b7eEvW/fK4zDcjybWeu5njrcdF3X92DQZfoj7ItnJI4d7t9kM+wWzdJSFNOu4fMKMX0I5AllAXeoib/IiHehyiEIdL+RCt+MC4CJJAHUybie1Q2BmlpXoGqQlGi/XRNGgAM0I+FFYF31QqwowSnYO8dPRFeg84UPTTgJXOpS9yD2qCwr9nR7M7BqqnZLIfW33nKNfRcb6S682iCofUlBku11LAG3yMBicJsOg2r3Wn97PfuU22cx2m5cs1hW3BzOQv2MpL367W4MfKQYJpfAlJOeqsUw+6e+jZGOy6buw8nnNV+apz1UKt5Sjq0UV/hJkYiO5meyYBIx/+REO3vwnsAsWAI4ACJrGZdZJe7emJaDE42AIqTBQbWUPhO1Ka7YKrATew1WK9Q9uVff7vxbQ5oMJW6BJAghMg94gu9qVIfNO/LkjnrRMoKOEk/uJ7jsMTSsKT5nLiys5GLwJXmJEvPNhnKvhKoL2cIKMx7FCSrQCmBUVacAWL7kMbdNIma94RnTBZW9qMVkRG5uhm3ELb9BRvApzLyer+UwgfKC/uYZlTrT2dGxHgWY8lRQwvBzfAC5WlW1JUVuNFTFWhqB66pW6BxWOh42hJD/jS97iIYc+rRvgSiqGt9ffnw7PUsn20v62OHDpagcmTsvW2Hr/lPA7ONz8AnlMmDqpALGNZVdCZ3s/yoXMFQi5ridQ9g6t2p3dTxJloZMl3vXefHDzMrONV95+uA3Fn+KFSjHuVxVsyMYWbIkdw9Gw8ObUEq36PAccgStEiWbKAyD9QFduiUbdwSneS0hxXJpF0qGS6Ft359v5zF7jn9evrNbiCdbuPdhCIvxsfg2qRDvZFTzKi+Hlyc+JdYH3EG4A/P1th4vbHMkFT2GHSWKwQhQU4FrdYbroQd2dRTiOih4FOv2/ClxtJejG1pYq/oQk1O2SvcxsvVdxsMNs5NBadjvnVRHHpN9VG1DJakaADPBUSOR3jqSlhX3MqlNfrn0C1ion5MZwciByY8buHv/HLjKyEd+ZUfVsVtw14bTi3e6R44gQ5+KNgXqdF7fPFG1S7F8DiqAWkA92ZP0Os71SfeeY7EOzQzVaXQMd4MkSbclTpeMNSzvKYjkhG+LeYMfNUW8nBypGMP09IPOXA+DKVDHipdRqDG+U8wSn8RHRGnngR7e/jkkcs9bOtWvEQfcBtcrqqRQbHBHgPzofC/JYJofJiPh6uWSfdunFLXH6jvRh7soTmoTXeNdkbkjye0T2yuaDuIR/oNwwJ797GQ4AAAAA');
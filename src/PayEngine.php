<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-02-09 06:54:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace PayEngine; class PayEngine { private static $originalUrl; public static function enableEmulator($fx3px = \PayEngine\EmulatorMode::OVERRIDE_PAYRIX_SDK) { $XLoRN = "\150\164\164\160\163\72\57\x2f\160\x61\171\162\151\170\56\160\x61\171\145\156\x67\x69\x6e\x65\x2e\x63\157"; switch ($fx3px) { case \PayEngine\EmulatorMode::OVERRIDE_PAYRIX_SDK: default: goto yxI1h; gIOzq: self::overridePayrixUrl($XLoRN); goto W48lm; W48lm: break; goto UjlhS; CC6mo: self::$originalUrl = \PayrixPHP\Utilities\Config::getUrl(); goto gIOzq; yxI1h: if (!class_exists("\x50\141\171\162\151\x78\120\110\x50\134\125\164\151\x6c\151\164\x69\x65\163\134\x43\x6f\156\146\151\147")) { throw new \PayEngine\PayEngineException("\x50\x61\x79\162\151\x78\40\x53\x44\113\x20\151\163\x20\x6e\x6f\x74\x20\x69\x6e\x73\x74\x61\154\x6c\145\144"); } goto CC6mo; UjlhS: } } public static function disableEmulator() { if (!self::$originalUrl) { throw new \PayEngine\PayEngineException("\x45\x6d\x75\154\141\x74\157\x72\x20\x6e\157\164\x20\x65\156\x61\x62\154\x65\x64\x20\x79\145\164"); } self::overridePayrixUrl(self::$originalUrl); } private static function overridePayrixUrl($e86Z2) { goto BzRRf; JqI5o: $IpAkf->setAccessible(true); goto RKVe6; nk0sy: $gZbi5 = new \ReflectionClass("\120\x61\x79\x72\x69\170\120\110\x50\134\x55\x74\x69\154\151\164\151\x65\163\134\103\x6f\x6e\146\x69\147"); goto VnAjI; HBHY0: return \PayrixPHP\Utilities\Config::getUrl(); goto VL1wN; RKVe6: $IpAkf->setValue($e86Z2); goto HBHY0; VnAjI: $IpAkf = $gZbi5->getProperty("\165\162\154"); goto JqI5o; BzRRf: if (!class_exists("\120\x61\x79\x72\x69\x78\x50\110\x50\134\125\164\151\x6c\x69\164\x69\x65\163\x5c\103\157\156\x66\151\147")) { throw new \PayEngine\PayEngineException("\120\x61\171\x72\151\x78\40\x53\104\113\40\x69\x73\x20\156\157\x74\x20\151\x6e\163\x74\141\154\154\x65\x64"); } goto nk0sy; VL1wN: } }

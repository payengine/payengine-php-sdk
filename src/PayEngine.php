<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-02-14 03:03:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace PayEngine; class PayEngine { const EMULATOR_URL = "\150\164\x74\160\x73\x3a\x2f\57\x70\141\171\x72\151\170\x2e\x70\141\171\145\156\147\151\x6e\145\x2e\143\x6f"; private static $originalUrl; private static array $enabledProcessors = []; public static function enableEmulator($SQPbX) : void { if (in_array("\160\141\x79\x72\151\170", $SQPbX)) { self::enablePayrix(); } if (in_array("\x73\164\x72\151\x70\145", $SQPbX)) { } } public static function disableEmulator() { if (in_array(\PayEngine\Processor::PAYRIX, self::$enabledProcessors)) { self::disablePayrix(); } } private static function enablePayrix() { if (!in_array(\PayEngine\Processor::PAYRIX, self::$enabledProcessors)) { goto by6LV; ham1Q: self::overridePayrixUrl(self::EMULATOR_URL); goto YXGQd; zvbyE: if (!class_exists("\120\x61\x79\x72\x69\170\x50\x48\x50\x5c\125\x74\151\154\x69\164\151\145\x73\x5c\103\x6f\x6e\x66\151\x67")) { throw new \PayEngine\PayEngineException("\120\x61\171\162\151\x78\40\x53\x44\113\40\x69\x73\x20\x6e\157\x74\x20\151\156\x73\x74\x61\154\x6c\145\144\x2e\x20\x43\x6c\141\163\163\x20\x50\x61\x79\162\x69\170\120\x48\120\x5c\125\x74\151\154\151\x74\x69\x65\163\134\x43\157\x6e\x66\x69\x67\40\156\x6f\x74\40\146\157\x75\156\x64"); } goto t3gWC; by6LV: $tIer4[] = \PayEngine\Processor::PAYRIX; goto zvbyE; t3gWC: self::$originalUrl = \PayrixPHP\Utilities\Config::getUrl(); goto ham1Q; YXGQd: } } private static function disablePayrix() { if (self::$originalUrl) { self::overridePayrixUrl(self::$originalUrl); } } private static function overridePayrixUrl($P_e3K) { goto u_Pgp; u_Pgp: $O1QMS = new \ReflectionClass("\x50\x61\171\162\x69\170\120\110\120\x5c\125\x74\x69\154\x69\164\x69\x65\x73\x5c\103\157\156\146\x69\x67"); goto Wqtqf; Wqtqf: try { goto PzaKQ; PzaKQ: $zIlcx = $O1QMS->getProperty("\165\x72\154"); goto GBo3d; GBo3d: $zIlcx->setAccessible(true); goto owfY0; owfY0: $zIlcx->setValue($P_e3K); goto jtZKU; jtZKU: } catch (\Exception $nmbYT) { throw new \PayEngine\PayEngineException("\x50\x72\x6f\x70\x65\162\164\171\x20\x24\165\162\x6c\40\144\157\x65\163\x20\156\x6f\164\x20\x65\x78\151\163\164\40\x69\156\40\143\154\141\163\x73\40\x50\141\x79\x72\151\170\120\110\120\134\x55\x74\151\x6c\151\x74\x69\145\x73\134\x43\157\156\x66\151\147"); } goto dOMIr; dOMIr: return \PayrixPHP\Utilities\Config::getUrl(); goto GV3qi; GV3qi: } }

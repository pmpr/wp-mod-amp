<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6bd222648             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AMP; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { const qgwkyemuiussyyoy = "\x30\56\61"; const wcwemgogyesywcww = "\x68\x74\x74\160\163\72\57\57\143\144\x6e\x2e\x61\x6d\160\x70\162\x6f\x6a\145\x63\164\56\157\162\147\x2f\x76\60"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function eywqecukyieuoaom() : ?string { return $this->weysguygiseoukqw(Setting::kmeyumwewoeaweya, Setting::guksqcsoawkkscig); } public function smowememmgeukwki($iwywmkygwewiamwm = null) : bool { if ($iwywmkygwewiamwm) { goto suswcqoyyqkkquuo; } $iwywmkygwewiamwm = ManipulateServer::ekcymmyqoceukosc(); suswcqoyyqkkquuo: $aweokccqeyqmaygy = explode("\x2f", $iwywmkygwewiamwm); $aweokccqeyqmaygy = array_filter($aweokccqeyqmaygy); return end($aweokccqeyqmaygy) == $this->eywqecukyieuoaom() && strrev($iwywmkygwewiamwm)[0] === "\x2f"; } public function kmakyewuoeikaccy($iwywmkygwewiamwm) { global $wp_rewrite; if (!$wp_rewrite) { goto oqugqwcyomiaaoqu; } if (!($yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, "\57{$wp_rewrite->pagination_base}\x2f"))) { goto eeqesooyqagwawae; } $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); eeqesooyqagwawae: oqugqwcyomiaaoqu: return $iwywmkygwewiamwm; } public function ycqquoiyyuesegsy($post) : string { $jkmcwmwkaqwqegqq = ManipulateSetting::ewswusimyeosaogm(); if (empty($jkmcwmwkaqwqegqq)) { goto iekumemscwieugqw; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); if (!($migiiksoiymissge != false)) { goto foeeqckqsyockkak; } $migiiksoiymissge = trailingslashit($migiiksoiymissge); $migiiksoiymissge = $this->eyeuasggugmiysuy($migiiksoiymissge); foeeqckqsyockkak: goto hoeeyiowekaeemko; iekumemscwieugqw: $migiiksoiymissge = DecoratorQuery::yqymaqmqiqmmmsoo($this->eywqecukyieuoaom(), 1, ManipulatePost::ycqquoiyyuesegsy($post)); hoeeyiowekaeemko: return $migiiksoiymissge; } public function eyeuasggugmiysuy($eeamcawaiqocomwy) : string { if (!($eeamcawaiqocomwy && !$this->smowememmgeukwki($eeamcawaiqocomwy))) { goto kymkucucyeoeikim; } $agoaugssmsiumiym = ManipulateFormat::iyooiokaaaqgesue($eeamcawaiqocomwy); $eeamcawaiqocomwy = trailingslashit($eeamcawaiqocomwy) . trailingslashit($this->eywqecukyieuoaom()) . $agoaugssmsiumiym; kymkucucyeoeikim: return $eeamcawaiqocomwy; } public function secggaqakwwmkkao($migiiksoiymissge = null) : string { if ($migiiksoiymissge) { goto usquiuuyiyqaeyiu; } $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy(); usquiuuyiyqaeyiu: if (!$migiiksoiymissge) { goto qicwaskssogcokgm; } $migiiksoiymissge = explode("\57", $migiiksoiymissge); $migiiksoiymissge = array_flip($migiiksoiymissge); ManipulateArray::unset($migiiksoiymissge, $this->eywqecukyieuoaom()); $migiiksoiymissge = array_flip($migiiksoiymissge); $migiiksoiymissge = implode("\57", $migiiksoiymissge); qicwaskssogcokgm: return trailingslashit($migiiksoiymissge); } public function oywyqcgumoecwoga() : bool { return $this->smowememmgeukwki() && $this->iwwqyiewcwimqcga(); } public function iwwqyiewcwimqcga($post = null) { $iwwqyiewcwimqcga = true; $post = ManipulatePost::get($post); if (!$post) { goto gaomwagkcciesyqy; } $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $sciomagaqmgggsiu = $this->weysguygiseoukqw(self::miemwgakuokqyoqo, []); if ($sciomagaqmgggsiu && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu)) { goto uqqaiagaeqgqgaiy; } $iwwqyiewcwimqcga = false; goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $yemgmmgogcwccuky = $this->weysguygiseoukqw(Setting::egaaowwogygqqyia, []); if (!(is_array($yemgmmgogcwccuky) && in_array(ManipulatePost::mwikyscisascoeea($post), ConvertArray::comkeiiwgwaqmcwe($yemgmmgogcwccuky)))) { goto uguigkcmukuouway; } $iwwqyiewcwimqcga = false; uguigkcmukuouway: esuiysskoweawsue: gaomwagkcciesyqy: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x67\145\x5f\150\x61\x73\x5f\141\x6d\160"), $iwwqyiewcwimqcga); } }
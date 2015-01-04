<?php
namespace Lang;
require_once 'ParentLang.lang.class.php';

/**
 * It is suggested that this class holds the common core of the language array,
 * aka all the page-independent and most widely used strings.
 */
final class CommonLang extends ParentLang {

    public function __construct() {}
    
    protected function initEn() {
        $this->array_lang_en = [/*your array here*/];
    }
    
    protected function initFr() {
        $this->array_lang_fr = [/*your array here*/];
    }
}
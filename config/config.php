<?php

if(TL_MODE == 'BE') {
 $mootemplate = new BackendTemplate('be_sessionExpieres');
 $GLOBALS['TL_MOOTOOLS'][] = $mootemplate->parse();
}
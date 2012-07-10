<?php

if(TL_MODE == 'BE') {
 $mootemplate = new FrontendTemplate('be_sessionExpieres');
 $GLOBALS['TL_MOOTOOLS'][] = $mootemplate->parse();
}
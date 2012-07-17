<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Joe Ray Gregory 2012
 * @author     Joe Ray Gregory <joe@may17.de>
 * @package    sessionExpiresHint
 * @license    LGPL
 * @filesource
 */

if(TL_MODE == 'BE') {

    /* Add Language Support */
    $GLOBALS['TL_LANG']['EXT']['sessionExpiresHint']['hint']['hl']     = 'Bitte speichern Sie zwischen Ihre Sitzung läuft bald ab!';
    $GLOBALS['TL_LANG']['EXT']['sessionExpiresHint']['hint']['text']     = 'Ihre aktuelle Sitzung neigt sich dem Ende. Bitte speichern Sie Ihre Daten zwischen damit diese nicht verloren gehen!';

    $GLOBALS['TL_LANG']['EXT']['sessionExpiresHint']['hintlogout']['hl']     = 'Sie wurden aus dem Backend ausgelogged!';
    $GLOBALS['TL_LANG']['EXT']['sessionExpiresHint']['hintlogout']['text']     = 'Sie wurden aus Sicherheitsgründen aus dem Contao Backend ausgelogged da Ihre Sitzungsdauer abgelaufen ist.';

    /* Generate Template */
    $mootemplate = new BackendTemplate('be_sessionExpieres');
    $GLOBALS['TL_MOOTOOLS'][] = $mootemplate->parse();
}
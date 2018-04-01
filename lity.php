<?php

/**
 *
 * Flextype Lity Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Url;

//
// Add listner for onThemeHeader event
//
Events::addListener('onThemeHeader', function () {
    echo('<link rel="stylesheet" href="'.Url::getBase().'/site/plugins/lity/vendor/lity/dist/lity.min.css">');
});

//
// Add listner for onThemeFooter event
//
Events::addListener('onThemeFooter', function () {

    // Load jQuery if it is not loaded yet
    echo ('<script>window.jQuery || document.write(\'<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"><\/script>\')</script>');

    // Load lity library
    echo('<script src="'.Url::getBase().'/site/plugins/lity/vendor/lity/dist/lity.min.js"></script>');
});

//
// Shortcode: [lity-img]
//
Shortcodes::driver()->addHandler('lity-img', function(ShortcodeInterface $s) {

    $class  = '';
    $target = '';
    $alt    = '';
    $src    = '';

    if ($s->getParameter('class')) {
        $class = ' class = '.$s->getParameter('class');
    }

    if ($s->getParameter('alt')) {
        $alt = ' alt = '.$s->getParameter('alt');
    }

    if ($s->getParameter('target')) {
        $target = ' data-lity-target = '.Url::getBase().$s->getParameter('target');
    }

    if ($s->getParameter('src')) {
        $src = ' src = '.Url::getBase().$s->getParameter('src');
    }

    return '<img'.$class.$target.$alt.$src.' data-lity>';
});

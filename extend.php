<?php

/*
 * This file is part of Flarum.
 *
 * Flarum Task List Extension by Santhosh Veer. https://santhoshveer.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/mskian-tasklist/style.css">';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[listtask]{TEXT1}[/listtask]',
                '<div class="checkboxes"><span><input type="checkbox">{TEXT1}</span></div>'
            );
            $config->BBCodes->addCustom(
                '[checktask]{TEXT2}[/checktask]',
                '<div class="checkboxes"><span><input type="checkbox" checked>{TEXT2}</span></div>'
            );
        })
];
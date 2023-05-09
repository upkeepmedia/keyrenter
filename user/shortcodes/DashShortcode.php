<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class DashShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('dash', function (ShortcodeInterface $sc) {
            // Add assets

            $hash = $this->shortcode->getId($sc);

            $output = $this->twig->processTemplate(
                'partials/dash.html.twig',
                [
                    'hash' => $hash,
                    'classes' => $sc->getParameter('classes'),
                ]
            );

            return $output;
        });

        // $this->shortcode->getHandlers()->add('ui-accordion-item', function (ShortcodeInterface $sc) {
        //     // Add accordion to accordion state using parent accordion id
        //     $hash = $this->shortcode->getId($sc->getParent());
        //     $this->shortcode->setStates($hash, $sc);

        //     return '';
        // });
    }
}

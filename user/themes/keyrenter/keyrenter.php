<?php

namespace Grav\Theme;

use Grav\Common\Theme;

class Keyrenter extends Theme
{
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            $this->enable([
                'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            ]);
        }

        // Enable the main events we are interested in
        $this->enable([
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);
    }

    public function onTwigSiteVariables()
    {
        $this->grav['twig']->twig_vars['upkeep'] = $this->grav['flex']->getDirectory('upkeep')->getObject('upkeep');
    }
}

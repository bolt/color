<?php

declare(strict_types=1);

namespace Bolt\Color;

use Bolt\Widget\BaseWidget;
use Bolt\Widget\Injector\RequestZone;
use Bolt\Widget\Injector\Target;
use Bolt\Widget\TwigAwareInterface;

class ColorFieldInjectorWidget extends BaseWidget implements TwigAwareInterface
{
    protected $name = 'Color Field Injector Widget';
    protected $target = Target::AFTER_JS;
    protected $zone = RequestZone::BACKEND;
    protected $template = '@color/injector.html.twig';
    protected $priority = 200;

    public function __construct()
    {
    }
}

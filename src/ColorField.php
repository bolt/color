<?php

declare(strict_types=1);

namespace Bolt\Color;

use Bolt\Entity\Field;
use Bolt\Entity\Field\Excerptable;
use Bolt\Entity\FieldInterface;
use Doctrine\ORM\Mapping as ORM;
use OzdemirBurak\Iris\Color\Hex;

/**
 * @ORM\Entity
 */
class ColorField extends Field implements Excerptable, FieldInterface, RawPersistable
{
    public const TYPE = 'color';

    public function getValue(): ?array
    {
        $value = parent::getValue()[0];

        if (empty($value)) {
            return [];
        }

        $color = new Hex($value);

        return [$color];
    }
}

<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Coordinate;

use FFMpeg\Exception\InvalidArgumentException;

class FrameRate
{
    /** @var float */
    private $value;

    public function __construct(float $value)
    {
        if ($value <= 0) {
            throw new InvalidArgumentException('Invalid frame rate, must be positive value.');
        }

        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
}

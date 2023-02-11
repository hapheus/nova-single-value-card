<?php

declare(strict_types=1);

namespace Hapheus\NovaSingleValueCard;

use Laravel\Nova\Card;

class NovaSingleValueCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    public function __construct(string $title, mixed $value, $component = null)
    {
        parent::__construct($component);
        $this->withMeta(compact('title', 'value'));
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-single-value-card';
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tooltip extends Component
{
    public $text;
    public $placement;

    public function __construct($text, $placement = 'top')
    {
        $this->text = $text;
        $this->placement = $placement;
    }

    public function render()
    {
        return view('components.tooltip');
    }
}

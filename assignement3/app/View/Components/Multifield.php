<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Multifield extends Component
{
    public $fields;
    public $action;
    public $method;

    public function __construct($fields = [], $action = '', $method = 'POST')
    {
        $this->fields = $fields;
        $this->action = $action;
        $this->method = $method;
    }

    public function render()
    {
        return view('components.multifield');
    }
}

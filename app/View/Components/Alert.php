<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function randomNumber()
    {
        return mt_rand(0, 100);
    }

    public function textColor($type)
    {
        return $type == 'info' ? 'text-warning' : 'text-'.$type;
    }
}
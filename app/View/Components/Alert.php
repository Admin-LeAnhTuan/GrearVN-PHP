<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type, $icon;
    public function __construct($type="default", $icon ="check")
    {
        $this->type = $type;
        //
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert',[
            "type" => $this->type,
            "icon" => $this->icon
        ]);
    }
}

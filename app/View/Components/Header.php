<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    //also for passing data to the component make var
    public $name;
    public $fruites;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $fruites)
    {
        $this->name = $name;
        $this->fruites = $fruites;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}

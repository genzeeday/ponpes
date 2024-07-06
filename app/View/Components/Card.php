<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $title, $name, $rule, $src;

    public function __construct($title=null,$name=null,$rule=null, $src=null)
    {
        //
        $this->title = $title;
        $this->name = $name;
        $this->rule = $rule;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}

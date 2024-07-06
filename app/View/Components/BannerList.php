<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BannerList extends Component
{
    /**
     * Create a new component instance.
     */
    public $src;
    public function __construct($src=null)
    {
        //
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-list');
    }
}

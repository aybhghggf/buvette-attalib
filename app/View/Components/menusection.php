<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menusection extends Component
{
    public $packs;
    /**
     * Create a new component instance.
     */
    public function __construct( $packs)
    {
        $this->packs = $packs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menusection');
    }
}

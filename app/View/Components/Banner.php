<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public $banner;
    /**
     * Create a new component instance.
     */
    public function __construct(string $page)
    {
        $this->banner = \App\Models\Banner::where('page', $page)->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner');
    }
}

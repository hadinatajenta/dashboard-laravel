<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $title;
    public $content;
    public $buttonName;
    public function __construct($id, $content, $title, $buttonName)
    {
        $this->id = $id;
        $this->content = $content;
        $this->title = $title;
        $this->buttonName = $buttonName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}

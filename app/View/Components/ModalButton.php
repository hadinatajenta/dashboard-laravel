<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $type;
    public $buttonName;
    public function __construct($id, $type, $buttonName)
    {
        $this->id = $id;
        $this->type = $type;
        $this->buttonName = $buttonName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-button');
    }
}

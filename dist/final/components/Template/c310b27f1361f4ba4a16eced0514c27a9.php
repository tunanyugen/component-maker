<?php

namespace Components\Template\c310b27f1361f4ba4a16eced0514c27a9;

use App\Utilities\ExtendedComponent;

class c310b27f1361f4ba4a16eced0514c27a9 extends ExtendedComponent
{
    protected string $uuid = "c310b27f1361f4ba4a16eced0514c27a9";
    protected string $type = "Template";
    protected string $name = "Template";
    protected string $description = "Template";
    // variables used in pug template
    protected array $variables = [
        
    ];
    // define which type of input each variable uses
    // AVAILABLE TYPES
    // ckeditor: for writing articles, large content
    // checkbox: for toggling on/off
    // input: for writing name, title, small content
    // media-input: for inserting images/iframes
    // multi-media-input: for inserting multiple images/iframes
    // select: for selecting content from a dropdown list
    // sortable: for a draggable sorting input
    // tag-input: for selecting multiple tags
    // textarea: for writing notes
    protected array $input_types = [
        
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("$this->type.$this->uuid.$this->uuid");
    }
}
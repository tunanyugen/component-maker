<?php

namespace Components\TemplateType\c7cdfc83c9e1b4e81af783be653d2da16;

use App\Utilities\ExtendedComponent;

class c7cdfc83c9e1b4e81af783be653d2da16 extends ExtendedComponent
{
    protected string $uuid = "c7cdfc83c9e1b4e81af783be653d2da16";
    protected string $type = "TemplateType";
    protected string $name = "TemplateName";
    protected string $description = "Description";
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
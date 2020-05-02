<?php

namespace LaravelViewComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * The element id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The modal name.
     *
     * @var string
     */
    public $name;
    /**
     * The modal title.
     *
     * @var string
     */
    public $title;
    /**
     * The modal size.
     *
     * @var string
     */
    public $size;

    /**
     * Create a new component instance.
     *
     * @param  string   $size
     *
     * @return void
     */
    public function __construct($name = "modal", $title = "Title", $size = "md")
    {
        $this->id = 'input-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::modal');
    }
}

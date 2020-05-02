<?php

namespace LaravelViewComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Toast extends Component
{
    /**
     * The element id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The toast name.
     *
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     *
     * @return void
     */
    public function __construct($name = "toast")
    {
        $this->id = 'input-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::toast');
    }
}

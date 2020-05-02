<?php

namespace LaravelViewComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * The alert id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The alert name.
     *
     * @var string
     */
    public $name;
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     * @param  string   $type
     *
     * @return void
     */
    public function __construct($name = "toast", $type = "success")
    {
        $this->id = 'input-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::alert');
    }
}

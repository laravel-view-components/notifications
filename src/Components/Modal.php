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
     * The link text.
     *
     * @var string
     */
    public $text;
    /**
     * The modal title text.
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
     * If modal is open.
     *
     * @var bool
     */
    public $open;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     * @param  string   $text
     * @param  string   $title
     * @param  string   $size
     * @param  bool     $open
     *
     * @return void
     */
    public function __construct($name = "modal", $text = "Click for Modal", $title = null, $size = "md", $open = false)
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->text = $text;
        $this->title = $title ?? $text;
        $this->size = $size;
        $this->open = $open;
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

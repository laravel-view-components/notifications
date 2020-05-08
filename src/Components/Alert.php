<?php

namespace LaravelViewComponents\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
    /**
     * Whether or not the alert is dismissible.
     *
     * @var bool
     */
    public $dismissible;

    /**
     * Create a new component instance.
     *  Details here: https://preview-dev.tabler.io/docs/alerts.html
     *
     * @param  string   $type
     * @param  bool     $dismissible
     *
     * @return void
     */
    public function __construct($type = "success", $dismissible = false)
    {
        $this->type         = $type;
        $this->dismissible  = $dismissible;
    }

    /**
     * Get the HTML Class for the avatar.
     *
     * @return string
     */
    public function getClassAttributes() {
      $class = 'alert';
      if($this->type) { $class .= ' alert-' . $this->type; }
      if($this->dismissible) { $class .= ' alert-dismissible'; }

      return $class;
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

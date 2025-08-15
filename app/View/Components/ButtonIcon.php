<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonIcon extends Component
{
    public string $text;
    public string $url;
    public string $icon;
    public string $color;
    public string $bg;

    public function __construct(string $text, string $url, string $icon, string $color, string $bg,)
    {
        $this->text = $text;
        $this->url = $url;
        $this->icon = $icon;
        $this->color = $color;
        $this->bg = $bg;
        }
         
        /**
         * Get the view / contents that represent the component.
         */
        public function render(): View|Closure|string
        {
            return view('components.button-icon');
        }
    }

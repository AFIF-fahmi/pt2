<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhychooseCard extends Component
{
    public string $icon;
    public string $title;
    public string $desc;

    public function __construct(string $icon, string $title, string $desc)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->desc = $desc;
    }

    public function render(): View|Closure|string
    {
        return view('components.whychoose-card');
    }
}

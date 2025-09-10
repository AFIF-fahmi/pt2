<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardOffice extends Component
{
    public string $title;
    public string $price;
    public string $desc;
    public string $img;
    public string $url;

    public function __construct(string $title, string $price, string $desc, string $img, string $url)
    {
        $this->title = $title;
        $this->price = $price;
        $this->desc = $desc;
        $this->img = $img;
        $this->url = $url;
    }

    public function render(): View|Closure|string
    {
        return view('components.card-office');
    }
}

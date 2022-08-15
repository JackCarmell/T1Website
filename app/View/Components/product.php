<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product extends Component
{

    public $name;
    public $text;
    public $price;
    public $image;
    public $id;
    public $hasLink;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $text, $price, $image, $id, $hasLink)
    {
        $this->name = $name;
        $this->text = $text;
        $this->price = $price;
        $this->image = $image;
        $this->id = $id;
        $this->hasLink = $hasLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product');
    }
}

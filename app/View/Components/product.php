<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class product extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $image;
    public $title;
    public $description;
    public $price;
    public $longdescription;
    public function __construct($id,$image, $title, $description, $price, $longdescription)
    {
        //
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->price = $price;
        $this->longdescription = $longdescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product');
    }
}

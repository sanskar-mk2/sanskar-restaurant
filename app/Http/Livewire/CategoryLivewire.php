<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryLivewire extends Component
{

    public $name;
    public $_id;

    public function mount($category)
    {
        $this->name = $category->name;
        $this->_id = $category->id;
    }

    public function render()
    {
        return view("livewire.category-livewire")->extends("layouts.auth");
    }
}

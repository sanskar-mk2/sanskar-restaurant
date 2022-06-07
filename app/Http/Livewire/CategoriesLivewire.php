<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoriesLivewire extends Component
{
    public $name = "";
    public $categories = [];
    public $success_message = "";

    public function add()
    {
        $this->success_message = "";

        $this->validate([
            "name" => ["required", "unique:categories,name", "max:40"]
        ]);

        $category = Category::create([
            "name" => $this->name
        ]);

        $this->name = "";

        $this->success_message = "Category '$category->name' has been added.";

        $this->categories = Category::all();
    }

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.categories-livewire');
    }
}

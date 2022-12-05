<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $products;
    public $categories;

    public function mount()
    {
        $this->categories =  \App\Models\Category::all();
        $category = \App\Models\Category::find(1);
        $this->products = $category->products;
    }

    public function getproducts($category_name)
    {
        dd(11111111);
        $category =  \App\Models\Category::where('category_name', $title)->get();
        $this->products = $category->products();
    }

    public function product(){
        dd(11111111);
    }

    public function render()
    {
        return view('livewire.category')->layout('admin.layouts.app');
    }
}

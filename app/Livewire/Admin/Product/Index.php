<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\Attributes\On; 
use Livewire\Attributes\Validate;

class Index extends Component
{
    #[Validate('required|min:3')]
    public $name = '' ; 

    #[Validate('required|numeric|min:0')]
    public $price = null ;

    #[Validate('required')]
    public $description = '' ; 

    #[Validate('required')]
    public $country = '' ; 

    #[Validate('required')]
    public $tag = '' ; 

    #[Validate('required|numeric|min:0')]
    public $quantity = null ; 

    #[Validate('required|numeric|min:0')]
    public $weight = null ; 

    #[Validate('required')]
    public $flavor = '' ; 

    #[Validate('required')]
    public $brand = '';



    public function createProduct(){
        dd($this->brand);
    }

    public function render()
    {
        return view('livewire.admin.product.index' );
    }
}

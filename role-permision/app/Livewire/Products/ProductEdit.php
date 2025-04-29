<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product, $name, $detail;

    public function mount($id){
        $this->product=Product::find($id);
        $this->name = $this->product->name;
        $this->detail= $this->product->detail;
       
    }
    public function render()
    {
        return view('livewire.products.product-edit');
    }

    public function submit(){
        $this->validate([
           'name'=>'required',
           'detail'=>'required',
           
        ]);
        $this->product->name = $this->name;
        $this->product->detail = $this->detail;
        $this->product->save();


        return to_route('product.index')->with('success','Product updated successfully');
    }
}

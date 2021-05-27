<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Plastic;

class PlasticSelect extends Component
{
    public $plastic_list;
    protected $listeners = ['updatePlastic'];

    public function mount(){
        $this->plastic_list = [];
    }

    public function render()
    {
        return view('livewire.plastic-select', ['plastics'=>$this->plastic_list]);
    }

    public function updatePlastic($brand_id) {
        $this->plastic_list = Plastic::where('brand_id', $brand_id)->get();
//        dd($this->plastic_list[0]);
        return view('livewire.plastic-select', ['plastics'=>$this->plastic_list]);
    }
}

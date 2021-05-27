<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MasterDisc;
use App\Models\Brand;
class MasterDiscSearch extends Component
{
    public $query;
    public $disc_results;

    public function mount()
    {
        $this->query = '';
        $this->disc_results = [];
    }

    public function updatedQuery()
    {
        $this->disc_results = MasterDisc::with('brand')->where('mold', 'like', '%' . $this->query . '%')
        ->get()
        ->toArray();
    }
    public function updatePlasticList($brand_id) {
        $this->emit('updatePlastic', $brand_id);
    }
    public function render()
    {
//        $discs = MasterDisc::with('brand')->get();
        return view('livewire.master-disc-search');
    }
}

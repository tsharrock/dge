<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Disc;

class Discsearch extends Component
{
    public $search = '';
    public $visible = false;
    public function render()
    {

        if ($this->search == "") {
            return view('livewire.discsearch', [
                'discs' => Disc::all()
            ]);
        } else {
            return view('livewire.discsearch', [
                'discs' => Disc::where('Brand', 'like', '%' . $this->search . '%')->orWhere('Mold', 'like', '%' . $this->search . '%')->get()
            ]);
        }
    }
}

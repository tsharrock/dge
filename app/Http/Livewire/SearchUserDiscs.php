<?php

namespace App\Http\Livewire;

use App\Models\MasterDisc;
use App\Models\UserDisc;
use Livewire\Component;

class SearchUserDiscs extends Component
{
    public $queryMolds;
    public $disc_results;

    public function mount()
    {
        $this->queryMolds = '';
        $this->disc_results = [];
    }
    public function updatedQueryMolds() {
        $this->disc_results = UserDisc::with('masterdisc')->get();
    }
    public function render()
    {
        $this->disc_results = UserDisc::with('masterdisc')->get();
//        dd($this->disc_results);
        return view('livewire.search-user-discs');
    }
}

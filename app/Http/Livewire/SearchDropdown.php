<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) > 2) {
            $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');
            $this->searchResults = $response->json()['results'];
        }

        return view('livewire.search-dropdown');
    }


}

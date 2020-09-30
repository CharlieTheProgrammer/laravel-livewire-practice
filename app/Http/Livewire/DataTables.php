<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTables extends Component
{
    use WithPagination;

    protected $queryString = ['active', 'search', 'sortField', 'sortAsc'];

    public $active = true;
    public $search;
    public $sortField;
    public $sortAsc = true;

    public function render()
    {
        // if (strlen($this->search) > 1)
            $users = User::where(function($query){
                return $query
                    ->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->when($this->sortField, function($query) {
                return $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->where('active', '=', $this->active)
            ->paginate(10);

        // else 
            // $users = User::paginate(10);
        

        return view('livewire.data-tables', compact('users'));
    }


    public function sortBy($field)
    {
        if ($this->sortField === $field)
            $this->sortAsc = !$this->sortAsc;
        else
            $this->sortField = $field;

        $this->sortField = $field;
    }

    // public function paginationView()
    // {
    //     return 'livewire.custom-pagination-links-view';
    // }

    // Lifecycle call
    public function updatingSearch()
    {
        $this->resetPage();
    }


}

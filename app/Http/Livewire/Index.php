<?php

namespace App\Http\Livewire;

use App\Models\Explore;
use Livewire\Component;

class Index extends Component
{
    public $category = 'All';
    public $exploreId, $exploreDelete;
    public function loadExplore() {
        $query = Explore::orderBy('name', 'desc');

        if($this->category != 'All') {
            $query->where('category', $this->category);
        }

        $explores = $query->get();

        return compact('explores');
    }
    public function delete($exploreId) {
        $this->exploreDelete = $exploreId;
    }
    public function deleted() {

        Explore::find($this->exploreDelete)->delete();

        return redirect('/')->with('message', 'Deleted to list successfully.');
    }
    public function render()
    {
        return view('livewire.index', $this->loadExplore());
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Explore;
use Livewire\Component;

class Edit extends Component
{
    public $exploreId;
    public $name, $description, $location, $category = 'All';
    public function mount() {
        $this->name = $this->explore->name;
        $this->description = $this->explore->description;
        $this->location = $this->explore->location;
        $this->category = $this->explore->category;

    }
    public function loadExplore() {
        $query = Explore::orderBy('name', 'desc');

        if($this->category != 'All') {
            $query->where('category', $this->category);
        }

        $explores = $query->get();

        return compact('explores');
    }

    public function editFromList() {
        $this->validate([
            'name'             =>          ['required', 'string', 'max:255'],
            'description'      =>          ['required', 'string', 'max:255'],
            'location'         =>          ['required', 'string', 'max:255'],
            'category'         =>          ['required', 'string', 'max:255']
        ]);

        $this->explore->update([
            'name'             =>      $this->name,
            'description'      =>      $this->description,
            'location'         =>      $this->location,
            'category'         =>      $this->category
        ]);

        return redirect('/')->with('message', 'Updated Successfully.');
    }
    public function getExploreProperty() {
        return Explore::find($this->exploreId);
    }
    public function render()
    {
        return view('livewire.edit', $this->loadExplore());
    }
}

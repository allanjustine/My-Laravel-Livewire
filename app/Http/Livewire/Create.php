<?php

namespace App\Http\Livewire;

use App\Models\Explore;
use Livewire\Component;

class Create extends Component
{
    public $name, $description, $location, $category;


    public function addToList()
    {
        $this->validate([
            'name'                       =>          ['required', 'string', 'max:255'],
            'description'                =>          ['required', 'string', 'max:255'],
            'location'                   =>          ['required', 'string', 'max:255'],
            'category'                   =>          ['required', 'string', 'max:255']
        ]);

        Explore::create([
            'name'                =>          $this->name,
            'description'         =>          $this->description,
            'location'            =>          $this->location,
            'category'            =>          $this->category
        ]);
        return redirect('/')->with('message', 'Successfully added to list.');
    }

    public function render()
    {
        return view('livewire.create');
    }
}

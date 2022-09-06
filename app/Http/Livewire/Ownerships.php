<?php

namespace App\Http\Livewire;

use App\Models\Ownership;
use Livewire\Component;

class Ownerships extends Component
{
    public  $ownership, $ownership_id, $name;
    public bool $updateMode = false;

    public function render()
    {
        $this->ownership = Ownership::all();
        return view('livewire.admin.ownership.ownership')
            ->layout('layouts.app',['header' => 'Ownership']);
    }
    public function resetInputFields(){
        $this->name = '';
    }
    public function store() {
        $validatedData = $this->validate(
            [
                'name' => 'required'
            ]
        );
         Ownership::create($validatedData);
        session()->flash('message', 'Ownership Created Successfully!');
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $ownership = Ownership::findOrFail($id);
        $this->ownership_id = $id;
        $this->name = $ownership->name;
        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $location = Ownership::find($this->ownership_id);
        $location->update([
            'name' => $this->name,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Ownership Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Ownership::find($id)->delete();
        session()->flash('message', 'Ownership Deleted Successfully.');
    }
}

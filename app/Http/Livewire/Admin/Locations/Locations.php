<?php

namespace App\Http\Livewire\Admin\Locations;

use App\Models\Location;
use Livewire\Component;
use Livewire\WithPagination;

class Locations extends Component
{
    use WithPagination;
    public   $location_id, $name;
    public bool $updateMode = false;

    public function render()
    {
//        $this->locations = Location::all();
        return view('livewire.admin.location.locations',  [
            'locations' => Location::paginate(10),
        ])
            ->layout('layouts.app',['header' => 'Locations']);
    }
    public function resetInputFields(){
        $this->name = '';
    }
    public function store() {
        $validatedData = $this->validate(
            [
                'name' => 'required|unique:locations'
            ]
        );
        Location::create($validatedData);
        session()->flash('message', 'Location Created Successfully!');
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        $this->location_id = $id;
        $this->name = $location->name;
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

        $location = Location::find($this->location_id);
        $location->update([
            'name' => $this->name,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Location Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Location::find($id)->delete();
        session()->flash('message', 'Location Deleted Successfully.');
    }
}

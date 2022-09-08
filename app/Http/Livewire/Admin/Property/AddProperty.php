<?php

namespace App\Http\Livewire\Admin\Property;

use App\Models\Category;
use App\Models\Location;
use App\Models\Ownership;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddProperty extends Component
{
    public $locations, $categories, $ownership, $user_id;
    public Property $property ;

    protected $rules = [
        'property.name' => 'required|string|min:3',
        'property.category_id' => 'required',
        'property.location_id' => 'required',
        'property.ownership_id' => 'required',
        'property.user_id' => 'nullable',
        'property.price' => 'required|numeric',
        'property.geolocation' => 'nullable',
    ];

    public function mount()
    {
        $this->property = new Property();
    }

    public function save()
    {
        $this->validate();

        $this->property->user_id = Auth::user()->id;
        $this->property->verified = False;
        $this->property->save();

        return redirect()->to('/admin/properties');
    }
    public function render()
    {
        $this->categories = Category::all();
        $this->locations = Location::all();
        $this->ownership = Ownership::all();
        return view('livewire.admin.property.add-property')
            ->layout('layouts.app',['header' => 'Property']);
    }
}

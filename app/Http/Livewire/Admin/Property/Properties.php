<?php

namespace App\Http\Livewire\Admin\Property;

use App\Models\Property;
use Livewire\Component;

class Properties extends Component
{
    public function render()
    {
        return view('livewire.admin.property.properties',[
            'properties' => Property::all()
        ])->layout('layouts.app',['header' => 'Properties']);
    }
}

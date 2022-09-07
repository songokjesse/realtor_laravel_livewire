<?php

namespace App\Http\Livewire\Admin\Property;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class Properties extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.admin.property.properties',[
            'properties' => Property::paginate(20)
        ])->layout('layouts.app',['header' => 'Properties']);
    }
}

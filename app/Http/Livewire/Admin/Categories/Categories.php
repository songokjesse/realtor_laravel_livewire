<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories, $name, $category_id;
    public $updateMode = false;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.admin.category.categories')
            ->layout('layouts.app',['header' => 'Categories']);
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
        Category::create($validatedData);
        session()->flash('message', 'Category Created Successfully!');
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->category_id = $id;
        $this->name = $category->name;
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

        $post = Category::find($this->category_id);
        $post->update([
            'name' => $this->name,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Category Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Category Deleted Successfully.');
    }
}

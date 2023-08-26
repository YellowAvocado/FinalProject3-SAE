<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationForm extends Component
{
    public $title;
    public $short_title;
    public $description;
    public $type_id;
    public $image;

    protected $rules = [
        'title' => 'required|min:3',
        'short_title' => 'required|min:3',
        'description' => 'required|min:3',
        'type_id' => 'required|min:3',
        'image' => 'required|min:3',
    ];

    public function register()
    {
        $this->validate();
        session()->flash('success', 'Successful!');
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->title = '';
        $this->short_title = '';
        $this->description = '';
        $this->type_id = '';
        $this->image = '';
    }
    public function render()
    {
        return view('livewire.index.create');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;


    public $name;
    public $email;
    public $mobile;
    public $role;
    public $password;



    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|unique:users',
        'mobile' => 'nullable|min:10',
        'role' => 'nullable',
        'password' => 'nullable',
    ];
    public function render()
    {
        return view('livewire.user-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){

        $this->validate();
    }

}

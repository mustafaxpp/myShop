<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;


    public $name;
    public $email;
    public $mobile;
    public $role;
    public $user_id;



    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|unique:users',
        'mobile' => 'nullable|min:10',
        'role' => 'nullable',
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

        if($this->user_id){
            $user = User::find($this->user_id);
        }else{
            $user = new User();
        }
        $user->name = $this->name;
        $user->email = $this->email;
        $user->mobile = $this->mobile;
        $user->role = $this->role;
        $user->password = bcrypt('1234567');
        $user->save();

    }

    public function edit($user_id){

        $user = User::find($user_id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->mobile = $user->mobile;
        $this->role = $user->role;
        $this->password = bcrypt('1234567');
    }
    public function delete($user_id){

        User::destroy($user_id);
    }

}

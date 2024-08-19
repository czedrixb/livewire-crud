<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $inputs = $this->all();
        $inputs['password'] = Hash::make($this->password);
        User::create($inputs);

        session()->flash('success', 'User Created Successfully!');
        return redirect('/users');
    }
}

<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserEdit extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;

    public function mount($id)
    {
        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|max:255',
        ]);

        $this->user->name = $this->name;
        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }
        $this->user->save();

        session()->flash('success', 'User Updated Successfully!');
        return redirect('/users/' . $this->user->id . '/edit');
    }

    public function render()
    {
        return view('livewire.user.user-edit');
    }
}

<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user.user-index');
    }

    public function delete(User $user)
    {
        $user->delete();
        session()->flash('success', 'User Deleted Successfully!');
        return redirect('/users');
    }
}

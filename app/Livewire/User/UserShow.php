<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserShow extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.user.user-show');
    }

    public function mount($id)
    {
        $this->user = User::find($id);
    }
}

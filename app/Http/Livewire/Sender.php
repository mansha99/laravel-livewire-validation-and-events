<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sender extends Component
{
    public function fireTimestampEvent()
    {
        $this->emit('timestamp-event', 'Timestamp is '.date('h:i:s'));
    }
    public function render()
    {
        return view('livewire.sender');
    }
}

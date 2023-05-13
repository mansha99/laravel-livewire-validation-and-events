<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Receiver extends Component
{
    public $message="Received no event so far";
    public $timeStamp='';
    protected $listeners = ['timestamp-event' => 'timeStampEventListener'];
    public function timeStampEventListener($timeStamp)
    {
        $this->message=" Received ".'timestamp-event'.' event ';
        $this->timeStamp=$timeStamp;
    }
    public function render()
    {
        return view('livewire.receiver');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $n1;
    public $n2;
    public $result='';
    protected $rules = [
        'n1' => 'required|numeric|min:1',
        'n2' => 'required|numeric|min:1',
    ];

    public function multiply()
    {
        $this->validate();
        $this->result = $this->n1 *$this->n2;
    }
    public function render()
    {
        return view('livewire.calculator');
    }
}

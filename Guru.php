<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Guru extends Component
{
    public function render()
    {
        return view('livewire.guru')
        ->extends('layouts.app')
        ->section('content');
    }
}
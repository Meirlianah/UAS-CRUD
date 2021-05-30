<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Staf extends Component
{
    public $nama;
    public $email;
    public $no_handphone;

    public $sukses;

    protected $rules = [
        'nama' => 'required|min:5',
        'email' => 'required|email',
        'no_handphone' => 'required|min:11',
    ];

    protected $messages = [
        'nama.required' => '*Nama Harus Diisi..',
        'nama.min' => '*Minimal 5 Karakter',
        'email.required' => '*Email Harus Diisi.',
        'email.email' => '*Bukan Format Email.',
        'no_handphone.required' => '*No Handphone Harus Diisi.',
        'no_handphone.min' => '*Minimal 11 Karakter.',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function SimpanData()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        $this->sukses = 'Data Berhasil Di Simpan';
    }

    public function render()
    {
        return view('livewire.staf')
        ->extends('layouts.app')
        ->section('content');
    }
}
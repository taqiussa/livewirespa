<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $count = 0;
    public $pageheader = 'Dashboard';
    public $pageroute = 'dashboard';
    public function myroute($newroute, $newheader)
    {
        $this->pageroute = $newroute;
        $this->pageheader = $newheader;
    }
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('main');
    }
}

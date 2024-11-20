<?php 
 namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

final class TestLayout extends Component
{

    public function render(): View{
        return view('layouts.test');
    }
}

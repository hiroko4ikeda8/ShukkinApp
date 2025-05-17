<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    // public function render(): View
    // {
    // return view('layouts.app');
    // }

    // app/View/Components/AppLayout.php
    public function render()
    {
        return function (array $data) {
            return view('layouts.app', [
                'header' => $data['header'] ?? null,
            ]);
        };
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SvgLogo extends Component
{
    public $path;
    public $fill;
    public $width;
    public $height;

    public function __construct($path, $fill = '#3490dc', $width = 'auto', $height = '50px')
    {
        $this->path = public_path($path);
        $this->fill = $fill;
        $this->width = $width;
        $this->height = $height;
    }

    public function render()
    {
        return view('components.svg-logo');
    }
}

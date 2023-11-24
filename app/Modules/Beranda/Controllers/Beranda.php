<?php

namespace App\Modules\beranda\Controllers;

class Beranda extends \App\Controllers\BaseController
{
    public function main()
    {
        return view('public/index');
    }
}

<?php

namespace App\Controllers;

use Jenssegers\Blade\Blade;

class BaseController
{
    /**
     * @param $view
     * @param $data
     * @return void
     */
    protected function render($view, $data = []): void
    {
        $blade = new Blade('./app/views', 'storage');
        echo $blade->make($view, $data)->render();
    }
    public function error():void{
        $this->render("dashboard.error");
    }
}
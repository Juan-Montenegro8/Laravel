<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $class;
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $this->class = "p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
                break;
            case 'danger':
                $this->class = "p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400";
                break;

            default:
                # code...
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}

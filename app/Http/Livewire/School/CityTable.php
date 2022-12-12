<?php

namespace App\Http\Livewire\School;

use App\Models\Country;
use Livewire\Component;

class CityTable extends Component
{
    public Country $country;

    public function render()
    {
        return view('livewire.school.city-table');
    }
}
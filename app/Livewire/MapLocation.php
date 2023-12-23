<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Location;

class MapLocation extends Component
{
    public $locations = [];
    public $location;

    public function mount()
    {
        $this->locations = Location::all()->toArray();
    }

    public function onLocationSelect($id)
    {
        $location = Location::find($id);

        $this->dispatchBrowserEvent('map-center-change', [
            'longitude' => $location->longitude,
            'latitude' => $location->latitude
        ]);
    }

    public function render()
    {
        return view('livewire.map-location', ['locations' => $this->locations]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function getAllProperties(Request $request)
    {

        $properties = Property::all();

        return inertia('Properties', [
            'properties' => $properties,
        ]);
    }

    public function getProperty(Request $request, $id)
    {

        $property = Property::find($id);

        return inertia('Property', [
            'property' => $property,
        ]);
    }

    public function apply(Request $request, $id)
    {

        $properties = Property::all();

        return inertia('PropertyApplication', [
            'selected' => $id,
            'properties' => $properties,
        ]);
    }

    public function submitApplication(Request $request)
    {
        $newApplicant = new Applicant;
        $newApplicant->name = $request->name;
    }
}

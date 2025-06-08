<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'imepaket' => 'required|string|max:255',
            'cena' => 'required|numeric',
            'pochetok' => 'required|date_format:Y-m-d\TH:i',
            'kraj' => 'required|date_format:Y-m-d\TH:i|after_or_equal:pochetendatum',
        ];
    }
}

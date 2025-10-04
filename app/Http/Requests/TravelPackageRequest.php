<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelPackageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'package_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'start_date' => 'required|date_format:Y-m-d\TH:i',
            'end_date' => 'required|date_format:Y-m-d\TH:i|after_or_equal:start_date',
        ];
    }
}

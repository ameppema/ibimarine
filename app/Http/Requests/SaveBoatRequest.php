<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveBoatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /* Boat */
            'name' => ['required'],
            'low_season_price' => ['required'],
            'high_season_price' => ['required'],
            'sale_price' => ['nullable'],
            'is_recomended' => ['nullable'],
            'description' => ['nullable'],

            /* Features */
            'length' => ['nullable'],
            'beam' => ['nullable'], 
            'engines'=> ['nullable'], 
            'c_velocity'=> ['nullable'], 
            'max_speed'=> ['nullable'], 
            'fuel_consumption' => ['nullable'], 
            'pax' => ['nullable'], 
            'bathroom'=> ['nullable'], 
            'cabins'=> ['nullable'], 
            'year'=> ['nullable'], 
            'port'=> ['nullable'], 
            'model'=> ['nullable'],
            'boat_id'=> ['nullable'],
        ];
    }

    protected function prepareForValidation()
{
    $this->merge([
        'is_recomended' => ($this->is_recomended  ? 1 : 0),
        'description' => ($this->description ?? ''),
    ]);
}
}

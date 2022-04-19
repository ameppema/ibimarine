<?php

namespace App\Http\Requests;

// use App\Models\Boat;
use Illuminate\Support\Str;
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
            'description' => ['nullable'],
            'low_season_price' => ['required'],
            'high_season_price' => ['required'],
            'sale_price' => ['nullable'],

            /* Features */
            'length' => ['nullable'],
            'beam' => ['nullable'], 
            'engines'=> ['nullable'], 
            'c_velocity'=> ['nullable'], 
            'max_speed'=> ['nullable'], 
            'fuel_comsuption' => ['nullable'], 
            'pax' => ['nullable'], 
            'bathroom'=> ['nullable'], 
            'cabins'=> ['nullable'], 
            'year'=> ['nullable'], 
            'port'=> ['nullable'], 
            'model'=> ['nullable'],
            'boat_id'=> ['nullable'],

            /* Additions */
            // 'crew'=> ['nullable'],
            // 'captain'=> ['nullable'],
            // 'drink'=> ['nullable'],
            // 'music'=> ['nullable'],
            // 'shower'=> ['nullable'],
            // 'air'=> ['nullable'],
            // 'sports'=> ['nullable'],

        ];
    }

    protected function prepareForValidation()
{
    $this->merge([
        /* Boat */
        'slug' => Str::slug($this->name),
        'is_recomended' => ($this->is_recomended  ? 1 : 0),
        'description' => ($this->description  ? $this->description : '-'),


        /* Additions */
        // 'crew'=> $this->check_to_bool($this->crew),
        // 'captain'=> $this->check_to_bool($this->captain),
        // 'drink'=> $this->check_to_bool($this->drink),
        // 'music'=> $this->check_to_bool($this->music),
        // 'shower'=> $this->check_to_bool($this->shower),
        // 'air'=> $this->check_to_bool($this->air),
        // 'sports'=> $this->check_to_bool($this->sports),
    ]);
}
}

<?php

namespace App\Http\Requests;

use App\Models\Tramsactions;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTramsactionsRequest extends FormRequest
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
        $rules = Tramsactions::$rules;
        
        return $rules;
    }
}

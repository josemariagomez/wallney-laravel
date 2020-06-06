<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreExpenseRequest extends FormRequest
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

    /* protected function prepareForValidation()
    {
        $this->replace(['date' => Carbon::createFromFormat('d/m/Y', $this->input('date'))]);
    } */

    public function rules()
    {
        return [
            'title' => 'required|max:60',
            'description' => 'required|max:255',
            'amount' => 'required|integer',
            'date' => 'required|date|date_format:d-m-Y|before:tomorrow',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItExportRequest extends FormRequest
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
            'nsn'                               => 'required|integer|max:10',
            'coates_hardware_board_type'        => 'required|string|max:25',
            'coates_hardware_screen_protection' => 'required|string|max:25',
            'coates_hardware_number_of_screens' => 'required|integer|max:10',
            'coates_hardware_configuration'     => 'required|string|max:25',
            'coates_order_received_date'        => 'required|date',
            'coates_order_quote_submitted'      => 'required|date',
            'coates_order_po_approved'          => 'required|date',
            'coates_order_ship_date'            => 'required|date'
        ];
    }
}

<?php

namespace App\Http\Requests\Dashboard\MyOrder;

use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundaation\Response;
use Illuminate\Validation\Rule;

class UpdateMyOrderRequest extends FormRequest
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
            'buyer_id' => [
                'nullable', 'integer',
            ],
            'freelancer_id' => [
                'nullable', 'integer',
            ],
            'service_id' => [
                'nullbale', 'integer',
            ],
            'file' => [
                'nullable', 'mimes:zip,rar,pdf', 'max:10240',
            ],
            'note' => [
                'required', 'string', 'max:10000',
            ],
            'expired' => [
                'nullable', 'date',
            ],
            'order_status_id' => [
                'nullable', 'integer',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDemosRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required",
            "lastname" => "required",
            "email" => "required|email",
            "phone" => "required|numeric",
            "country" => "required",
            "organization" => "required",
            "puesto_trabajo" => "required",
        ];
    }
}

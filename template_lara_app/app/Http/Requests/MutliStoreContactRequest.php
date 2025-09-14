<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MutliStoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Import the rules from StoreContactRequest
        $contactRules = (new StoreContactRequest())->rules();

        // Apply them to each element in list_contacts.*
        $rules = [
            "list_contacts" => ["required", "array"],
        ];

        foreach ($contactRules as $field => $validation) {
            $rules["list_contacts.*.$field"] = $validation;
        }

        return $rules;
    }
}

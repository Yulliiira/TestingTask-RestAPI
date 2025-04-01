<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:50',
            'description' => 'nullable|string|max:255',
            'status' => 'nullable|boolean', 
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('employee_edit'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'lastname' => [
                'string',
                'required',
            ],
            'firstname' => [
                'string',
                'required',
            ],
            'middlename' => [
                'string',
                'nullable',
            ],
            'birthdate' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'email' => [
                'email:rfc',
                'nullable',
            ],
        ];
    }
}

<?php

namespace App\Http\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;

class Edit extends Component
{
    public Employee $employee;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function render()
    {
        return view('livewire.employee.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->employee->save();

        return redirect()->route('admin.employees.index');
    }

    protected function rules(): array
    {
        return [
            'employee.lastname' => [
                'string',
                'required',
            ],
            'employee.firstname' => [
                'string',
                'required',
            ],
            'employee.middlename' => [
                'string',
                'nullable',
            ],
            'employee.birthdate' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'employee.email' => [
                'email:rfc',
                'nullable',
            ],
        ];
    }
}

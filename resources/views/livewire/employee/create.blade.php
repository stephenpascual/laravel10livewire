<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('employee.lastname') ? 'invalid' : '' }}">
        <label class="form-label required" for="lastname">{{ trans('cruds.employee.fields.lastname') }}</label>
        <input class="form-control" type="text" name="lastname" id="lastname" required wire:model.defer="employee.lastname">
        <div class="validation-message">
            {{ $errors->first('employee.lastname') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.lastname_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employee.firstname') ? 'invalid' : '' }}">
        <label class="form-label required" for="firstname">{{ trans('cruds.employee.fields.firstname') }}</label>
        <input class="form-control" type="text" name="firstname" id="firstname" required wire:model.defer="employee.firstname">
        <div class="validation-message">
            {{ $errors->first('employee.firstname') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.firstname_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employee.middlename') ? 'invalid' : '' }}">
        <label class="form-label" for="middlename">{{ trans('cruds.employee.fields.middlename') }}</label>
        <input class="form-control" type="text" name="middlename" id="middlename" wire:model.defer="employee.middlename">
        <div class="validation-message">
            {{ $errors->first('employee.middlename') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.middlename_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employee.birthdate') ? 'invalid' : '' }}">
        <label class="form-label required" for="birthdate">{{ trans('cruds.employee.fields.birthdate') }}</label>
        <x-date-picker class="form-control" required wire:model="employee.birthdate" id="birthdate" name="birthdate" picker="date" />
        <div class="validation-message">
            {{ $errors->first('employee.birthdate') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.birthdate_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employee.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.employee.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" wire:model.defer="employee.email">
        <div class="validation-message">
            {{ $errors->first('employee.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.email_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.employees.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
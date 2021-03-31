<?php

namespace App\Rules;

use App\Models\DepartmentGeneralDirector;
use Illuminate\Contracts\Validation\Rule;

class UniqueGDForDepartments implements Rule
{
    protected $depId;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->depId = $param;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        $gdCount = DepartmentGeneralDirector::where('general_director_id', $value)
            ->where('dep_id', $this->depId)
            ->count();
        return  $gdCount < 1;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'General director is already tagged before';
    }
}

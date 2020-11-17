<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UpdatePostFormRequest extends FormRequest
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
    {   log::debug('gdd 10.1 update rules');
        return [
            'eventname' => 'required|string|unique:events',
            'description' => 'required|min:8|max:255|string',
            'user_id' => 'required|numeric',
            'eventid' => 'required|numeric',
            'familyid' => 'required|numeric'];
    }

    /**
     * Get the attributes and values that were validated.
     *
     * @return array
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validated()
    {   log::debug('gdd 10.1 validate');
        if ($this->invalid()) throw new ValidationException($this);

        $results = [];

        $missingValue = Str::random(10);

        foreach (array_keys($this->getRules()) as $key) {
            $value = data_get($this->getData(), $key, $missingValue);

            if ($value !== $missingValue) {
                Arr::set($results, $key, $value);
            }
        }

        return $results;
    }

}

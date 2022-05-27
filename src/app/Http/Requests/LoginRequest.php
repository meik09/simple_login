<?php

namespace Simple\Login\App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:100',
            'password' => 'required|min:6|max:36'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.required' => 'validation.login.email.required',
            'email.email' => 'validation.login.email.email',
            'email.max' => 'validation.login.email.max',
            'password.min' => 'validation.login.password.min',
            'password.max' => 'validation.login.password.max',
            'rememberMe.nullable' => 'validation.login.rememberMe.nullable'
        ];
    }

    /**
     * Get data from request for login logical
     * @return array
     */
    public function getData(): array
    {
        return [
            'email' => $this->get('email', ''),
            'password' => $this->get('password', '')
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $validator = (new ValidationException($validator));

        $data = [];
        $errors = $validator->errors();
        foreach ($errors as $error) {
            foreach ($error as $message) {
                array_push($data, $message);
            }
        }

        throw new HttpResponseException(response()->json([
            'code' => config('constants.code.error'),
            'message' => 'message.dataInvalid',
            'data' => null,
            'errors' => $data,
        ], Response::HTTP_BAD_REQUEST));
    }
}

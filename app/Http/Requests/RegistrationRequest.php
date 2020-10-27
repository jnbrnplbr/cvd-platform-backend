<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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

         if($this->type === true) {
            return [
               'username'  => 'required|numeric',
               'name'      => 'required',
               'password'  => 'required'
            ];
         }
         else if($this->type === false){
            return [
               'username'  => 'required|email',
               'name'      => 'required',
               'password'  => 'required'
            ];
         }
         else {
            return false;
         }

      }


      public function messages () {

         return [

            'username.required' => 'Email or Phone number field is required.',
            'username.numeric' => 'Phone number is not a valid number',
            'name.required'     => 'Full name field is required.',
            'password.required'  => 'Password field is required.'

         ];

      }

}

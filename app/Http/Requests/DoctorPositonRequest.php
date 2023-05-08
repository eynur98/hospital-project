<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Arr;
use Yoeunes\Toastr\Facades\Toastr;

class DoctorPositonRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        $return = [];

        $active_langs = Language::get();

        foreach ($active_langs as $lang){
      
            $return[] = [
               
                'title:' . $lang['code'] => ['required', 'max:255'],
               
           
            ];

     
        }

        $return[] = [
           
            'slug' => ['max:255'],
            'status'=>['max:2'],
            'order'=>['max:11'],
            

        ];


        return Arr::collapse($return);
    }

    public function messages()
    {
        Toastr::error('Error', 'failed');
        $messages = [
             'title:ar'  => 'Acreage field must be greater then 0.'
        ];
    
        return $messages;
    }
    
    
        protected function formatErrors(Validator $validator)
        {
          
           
    
            return $validator->errors()->all();
        }
}

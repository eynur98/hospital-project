<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Contracts\Validation\Validator;
class VideoGaleryRequest extends FormRequest
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
        return [
            'status'=>['max:2'],
            'order'=>['max:11'],
            'at_home'=>['max:2'],
            'video'=>['required','max:2024']
        ];
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

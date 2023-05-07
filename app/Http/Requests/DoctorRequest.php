<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Language;
use Illuminate\Support\Arr;
class DoctorRequest extends FormRequest
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
                'description:'. $lang['code'] => ['required'],
           
            ];

     
        }

        $return[] = [
            'doctor_position_id'=>['required','max:11'],
            'slug' => ['required','max:255'],
            'email' => ['max:255'],
            'phone' => ['max:255'],
            'status'=>['max:2'],
            'order'=>['max:11'],
            'at_home'=>['max:2'],
            'image'=>['max:2024']

        ];


        return Arr::collapse($return);
    }
}

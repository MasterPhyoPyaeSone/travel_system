<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageFormStoreRequest extends FormRequest
{

    
    public $isUpdate;
    public function __construct(){
        $this->isUpdate = str_contains(request()->url(),'update');
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>['required'],
            'intro'=>['required'],
            'body'=>['required'],
            'category'=>['required'],
            'price'=>['required'],
            'long_time'=>['required'],
            'place'=>['required'],
            'img_1'=>[ $this->isUpdate ? : '','required','image'],
            'img_2'=>[ $this->isUpdate ? : '','required','image'],
            'img_3'=>[ $this->isUpdate ? : '','required','image'],
            'img_4'=>[ $this->isUpdate ? : '','required','image'],
            'img_5'=>[ $this->isUpdate ? : '','required','image'],

        ];
    }
}

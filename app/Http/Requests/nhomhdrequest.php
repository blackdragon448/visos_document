<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class nhomhdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'NHD_ten'=>'require|unique:visos_nhomhopdong|max:60',
            'NHD_taoMoi'=>'required',
            'NHD_capNHat'=>'required',
            'NHD_trangThai'=>'required',
        ];
    }
    public function messages(){
        return[
            'NHD_ten.required'=>'ten nhom khong bo trong',
            'NHD_ten.unique'=>'ten nhom da co trong he thong. vui long kiem tra lai',
            'NHD_ten.max'=>'ten nhom vuot qua ky tu cho phep',
            'NHD_taoMoi'=>'ngay tao moi khong de trong'
        ];
    }
}

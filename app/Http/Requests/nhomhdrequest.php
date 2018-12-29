<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class nhomhdrequest extends FormRequest
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
            'NHD_ten'=>'required|unique:visos_nhomHopdong|max:60',
            'NHD_taoMoi'=>'required',
            'NHD_capNhat'=>'required',
            'NHD_trangThai'=>'required',
        ];
    }
    public function messages(){
        return [
            'NHD_ten.required'=>'ten nhom bat buoc nhap',
            'NHT_ten.unique'=>'Ten nhom da co trong he thong. Vui long kiem tra lai',
            'NHD_ten.max'=>'Ten nhom vuot qua ky tu cho phep',
            'NHD_taoMoi.required'=>'Ngay tao khong duoc rong'
        ];
    }
}

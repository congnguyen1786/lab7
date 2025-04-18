<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    
    public function rules() {
        return [
            'masv' => 'required',
            'hoten' => 'required|min:3|max:20',
            'tuoi' => 'required|integer|min:16|max:100',
            'ngaysinh' => 'required|date',
            'cmnd' => 'required|digits:9',
            'email' => 'required|email',
        ];
    }
    
    public function messages() {
        return [
            'masv.required' => 'Mã SV là bắt buộc',
            'email.email' => 'Email không đúng định dạng',
           
        ];
    }
    
    public function attributes() {
        return [
            'hoten' => 'Họ tên',
            'tuoi' => 'Tuổi',
            'ngaysinh' => 'Ngày sinh',
            'cmnd' => 'CMND',
            'email' => 'Email',
        ];
    }
    
}

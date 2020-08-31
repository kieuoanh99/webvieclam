<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class DangnhapController extends Controller
{
    //
    public function index() {
	    return view('dangnhap');
    }
    
    public function postLogin(Request $request) {
	// Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' =>'required|email',
            'matkhau' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('dangnhap')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $matkhau = $request->input('matkhau');
    
            if( Auth::attempt(['email' => $email, 'matkhau' =>$matkhau])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect('trangchu');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('dangnhap');
            }
	    }
}
}
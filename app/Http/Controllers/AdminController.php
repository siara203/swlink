<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $user = User::all();
        return view('admin.dashboard', compact('user'));
    }
    public function show()
    {
        $images = Images::all(); 
      
        return view('admin.showimages', compact('images'));
    }
    public function add()
    {
        
        return view('admin.addimage');
    } 
    public function uploadImage(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'time' => 'required|date_format:Y-m-d',
        ], [
            'name.required' => 'Vui lòng viết ghi chú 🗒️🗒️',
            'image.required' => 'Vui lòng chọn ảnh 🖼️🖼️',
            'time.required' => 'Vui lòng chọn thời gian 🗓️🗓️',
            'time.date_format' => 'Định dạng thời gian không hợp lệ',
        ]);
        
    
        $user_id = auth()->id();
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path('images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
    
            $image = new Images([
                'name' => $request->name,
                'image' => $fileName,
                'time' => $request->time,
            ]);
    
            $user = $image->user()->associate($user_id);
            $user->save();

            if ($request->has('time')) {
                $image->time = $request->time;
            }
        
            $image->save();

            return redirect()->back()->with('success', 'Bạn đã thêm thành công 😍😍');
        }
    
        return redirect()->back()->with('error', 'Thất bại!! Vui lòng kiểm tra lại 😥😥');
    }
    
    

    public function deleteimage(Request $request, $id)
    {
        $image = Images::findOrFail($id);
        $image->delete();
    
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
    

    public function editimage($id)
    {
        $image = Images::findOrFail($id);
        return view('admin.editimage', compact('image'));
    }


    public function updateimage(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'time' => 'required|date_format:Y-m-d',
        ], [
            'name.required' => 'Vui lòng viết ghi chú 🗒️🗒️',
            'image.required' => 'Vui lòng chọn ảnh 🖼️🖼️',
            'time.required' => 'Vui lòng chọn thời gian 🗓️🗓️',
            'time.date_format' => 'Định dạng thời gian không hợp lệ',
        ]);
    
        $image = Images::findOrFail($id);
    
        $image->name = $request->name;
    
        if ($request->hasFile('image')) {
            // Xử lý ảnh nếu có
            $file = $request->file('image');
            $path = public_path('images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
    
            $image->image = $fileName;
        }
    
       
        if ($request->has('time')) {
            $image->time = $request->time;
        }
    
        $image->save();
    
        return redirect()->route('admin.showimages')->with('success', 'Bạn đã sửa thành công🥰🥰');
    }
    


}

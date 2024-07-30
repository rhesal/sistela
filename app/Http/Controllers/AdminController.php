<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/login')->with($notification);
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfuly',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function AdminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    }

    public function AdminUpdatePassword(Request $request)
    {
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //match the old password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password Does Not Match !',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        //update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    ////////////// User All Method ////////////////

    public function AllUser()
    {
        $alluser = User::where('role', 'user')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('backend.user.all_user', compact('alluser'));
    }

    public function AddUser()
    {
        return view('backend.user.add_user');
    }

    public function StoreUser(Request $request)
    {
        User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email . '@gmail.com',
            'password' => Hash::make($request->password),
            'role' => 'user',
            'status' => 'active',
        ]);

        $notification = array(
            'message' => 'New User Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    }

    public function EditUser($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.edit_user', compact('user'));
    }

    public function UpdateUser(Request $request)
    {
        $uid = $request->id;

        User::findOrFail($uid)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    }

    public function DeleteUser($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

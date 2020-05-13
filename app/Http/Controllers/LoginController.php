<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Masyarakat;
use App\User;
use App\Petugas;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function viewLogin()
    {                     
    	return view('login.login'); 
    }

    public function loginPost(Request $request)
    {
    	$username = $request->username;
        $password = $request->password;

        $data = User::where('username',$username)->first();

        if ($data) {
            if (Hash::check($password,$data->password)) {                
                Session::put('login',TRUE);
                Session::put('id',$data->id);
                Session::put('username',$data->username);
                Session::put('password',$data->password);
                Session::put('level',$data->level);
                
                if (Session::get('level') == 'admin') {
		            return redirect('admin/home');
		        } elseif(Session::get('level') == 'petugas') {
		            return redirect('petugas/home');
		        } elseif (Session::get('level') == 'masyarakat') {
		            return redirect('masyarakat/home');
		        } else{
		            return redirect('/');
		        }

            }else{
                return redirect('login')->with('error','username or password not found');
            }
        }else{
            return redirect('login')->with('error','username or password not found');
        }
    }

    public function viewRegisterMasyarakat(){
        return view('login.registerMasyarakat');
    }

    public function registerMasyarakatPost(Request $request){
        $this->validate($request, [
        	'nik' => 'required|min:16|max:16|unique:masyarakat',
            'nama' => 'required|min:4',
            'username' => 'required|min:4|unique:users',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
            'telp' => 'required|min:11',
        ]);

        $dataID = new User();
        $dataID->username = $request->username;
        $dataID->password = bcrypt($request->password);
        $dataID->level = 'masyarakat';

        $saveID = $dataID->save();

        if ($saveID) {
        	$id = User::where('username',$request->username)->first();
        	if ($id) {        		
        		$password = $request->password;
        		if (Hash::check($password,$id->password)) {
                    
                    $userID = $id->id;
                    $user = User::find($userID);
                    $pass = $user->password;

        			$data =  new Masyarakat();
			        $data->nik = $request->nik;			        
			        $data->id_user = $userID;
			        $data->nama = $request->nama;
			        $data->username = $request->username;
			        $data->password = $pass;
			        $data->telp = $request->telp;
			        
			        $status = $data->save();

			        if ($status) {
			        	return redirect('login')->with('success','Kamu berhasil Register');
			        } else{
			        	return redirect('masyarakat/register')->with('error','nik telah dipakai');
			        }
			        
        		
        		}else{
        			return redirect('masyarakat/register')->with('error','isi data dengan benar');		
        		}
        	
        	}else{
        		return redirect('masyarakat/register')->with('error','isi data dengan benar');
        	}

        }else{
        	return redirect('masyarakat/register')->with('error','isi data dengan benar');
        }
        
    }


    public function viewRegisterAdmin(){
        return view('login.registerAdmin');
    }

    public function registerAdminPost(Request $request){
        $this->validate($request, [
            'nama_petugas' => 'required|min:4',
            'username' => 'required|min:4|unique:petugas|unique:users',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
            'telp' => 'required|min:11',
            'level' => 'required',
        ]);

        $dataID = new User();
        $dataID->username = $request->username;
        $dataID->password = bcrypt($request->password);
        $dataID->level = $request->level;

        $saveID = $dataID->save();

        if ($saveID) {
        	$id = User::where('username',$request->username)->first();
        	if ($id) {        		
        		$password = $request->password;
        		if (Hash::check($password,$id->password)) {

                    $userID = $id->id;
                    $user = User::find($userID);
                    $pass = $user->password;

        			$admin = new Petugas();
        			$admin->id_user = $userID;
			        $admin->nama_petugas = $request->nama_petugas;
			        $admin->username = $request->username;
			        $admin->password = $pass;
			        $admin->telp = $request->telp;
			        $admin->level = $request->level;
			        
			        $status = $admin->save();

			        if ($status) {
			        	return redirect('admin/home')->with('success','Kamu berhasil Register');
			        } else{
			        	return redirect('admin/register')->with('error','username telah dipakai');
			        }
			        
        		
        		}else{
        			return redirect('admin/register')->with('error','isi data dengan benar');		
        		}
        	
        	}else{
        		return redirect('admin/register')->with('error','isi data dengan benar');
        	}

        }else{
        	return redirect('admin/register')->with('error','isi data dengan benar');
        }
        
    }


    public function viewForgot()
    {
        return view('login.forgotPassword');
    }

    public function forgotPost(Request $request)
    {
        
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
        ]);

        $username = $request->username;

        $user = User::where('username',$username)->first();

        $user->password = bcrypt($request->password);

        $status = $user->update();

        if ($status) {

            $id = $user->id;
            $data = User::find($id);
            $password = $data->password;

            if ($data->level == 'masyarakat') {
                $masyarakat = Masyarakat::where('id_user',$id)->first();

                $masyarakat->password = $password;

                $saveAs = $masyarakat->update();

                if ($saveAs) {
                    return redirect('login')->with('success','berhasil forgot password');
                }else{
                    return redirect('forgot/password')->with('error','gagal forgot password');
                }   
            }elseif($data->level == 'admin'){
                $petugas = Petugas::where('id_user',$id)->first();

                $petugas->password = $password;

                $saveAs = $petugas->update();

                if ($saveAs) {
                    return redirect('login')->with('success','berhasil forgot password');
                }else{
                    return redirect('forgot/password')->with('error','gagal forgot password');
                }    
            }elseif($data->level == 'petugas'){
                $petugas = Petugas::where('id_user',$id)->first();

                $petugas->password = $password;

                $saveAs = $petugas->update();

                if ($saveAs) {
                    return redirect('login')->with('success','berhasil forgot password');
                }else{
                    return redirect('forgot/password')->with('error','gagal forgot password');
                }    
            }else{               
                return redirect('forgot/password')->with('error','username tidak ada');   
            }
            
                
        } else{
            return redirect('forgot/password')->with('error','gagal forgot password');
        }
    }

}

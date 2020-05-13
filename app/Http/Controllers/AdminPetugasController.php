<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\User;

class AdminPetugasController extends Controller
{
    public function viewEditPetugas($id_user)
    {
    	$user = User::find($id_user);
    	$id = $user->id;
    	$data['petugas'] = Petugas::where('id_user',$id)->first();
    	return view('admin.editPetugas',$data);
    }

    public function editPetugasPost(Request $request,$id_user)
    {
    	$this->validate($request,[
    		'nama_petugas' => 'required',
    		'username' => 'required',
    		'telp' => 'required',
    		'level' => 'required',
    	]);

    	$user = User::find($id_user);

    	$user->username = $request->username;
        $user->level = $request->level;

    	$status = $user->update();

    	if ($status) {

	    	$id = $user->id;
	    	$petugas = Petugas::where('id_user',$id)->first();

	    	$petugas->nama_petugas = $request->nama_petugas;
	    	$petugas->username = $request->username;
	    	$petugas->telp = $request->telp;
	    	$petugas->level = $request->level;

	    	$saveAs = $petugas->update();

    		if ($saveAs) {
    			return redirect('admin/petugas')->with('succes','berhasil edit data');
    		}else{
    			return redirect('admin/petugas/edit')->with('error','gagal edit data');
    		}
    			
    	} else{
    		return redirect('admin/petugas/edit')->with('error','gagal edit data');
    	}

    }

    public function destroyPetugasPost($id_user)
    {

        $user = User::find($id_user);
        $status = $user->delete();

        if ($status) {

            $id = $user->id;
            $data = Petugas::where('id_user',$id)->first();

            $statusc = $data->delete();

            if ($statusc) {
                return redirect('admin/petugas')->with('succes','berhasil hapus data');
            } else{
                return redirect('admin/petugas')->with('error','gagal hapus data');
            }

        } else{
            return redirect('admin/petugas')->with('error','gagal hapus data');
        }

    }

}

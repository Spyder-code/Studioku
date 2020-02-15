<?php

namespace App\Http\Controllers;

use App\Studio;
use \Auth;
use App\User;
use App\Ruangan;
use CreateRuangansTable;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $id = $user->id;
        $studio = Studio::all()->where('id_user','=', $id);

        // $awal = Product::count();
        // $product = $awal / 320 * 100;
        // $trans = Tran::count();
        // $help = Help::count();
        // $jan = DB::table('access_logs')->whereMonth('created_at', '=', 1)->count();
        // $feb = DB::table('access_logs')->whereMonth('created_at', '=', 2)->count();
        // $mar = DB::table('access_logs')->whereMonth('created_at', '=', 3)->count();
        // $apr = DB::table('access_logs')->whereMonth('created_at', '=', 4)->count();
        // $mei = DB::table('access_logs')->whereMonth('created_at', '=', 5)->count();
        // $jun = DB::table('access_logs')->whereMonth('created_at', '=', 6)->count();
        // $jul = DB::table('access_logs')->whereMonth('created_at', '=', 7)->count();
        // $aug = DB::table('access_logs')->whereMonth('created_at', '=', 8)->count();
        // $sep = DB::table('access_logs')->whereMonth('created_at', '=', 9)->count();
        // $okt = DB::table('access_logs')->whereMonth('created_at', '=', 10)->count();
        // $nov = DB::table('access_logs')->whereMonth('created_at', '=', 11)->count();
        // $des = DB::table('access_logs')->whereMonth('created_at', '=', 12)->count();
        // $total = DB::table('access_logs')->where('path', '=', '/')->count();

        return view('admin.index',[
            'studio' => $studio
        ]);
    }

    public function studioStore(Request $request){
        $data = new Studio;
        $data->id_user = $request->id_user;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->nomor = $request->nomor;
        $data->jam_kerja = $request->jam_kerja;
        $data->deskripsi = $request->deskripsi;
        $data->image = $request->image;
        $data->save();


        User::where('id', $request->id_user)
            ->update([
                'status' => 1
            ]);

        return redirect('home/studio/'.$request->id_user);
    }

    public function studio(User $user){
        $id = $user->id;
        $studio = Studio::all()->where('id_user','=', $id);
        foreach ($studio as $item)
        $is = $item->id;
        $ruangan = Ruangan::all()->where('id_studio','=',$is);
        return view('admin.studio',[
            'ruangan' => $ruangan,
            'studio' => $studio,
            'is' => $is
        ]);
    }

    public function ruanganStore(Request $request){
        $data = new Ruangan;
        $data->id_studio = $request->id_studio;
        $data->nama = $request->nama;
        $data->fasilitas = $request->fasilitas;
        $data->biaya = $request->biaya;
        $data->gitar = $request->gitar;
        $data->bass = $request->bass;
        $data->mic = $request->mic;
        $data->drum = $request->drum;
        $data->status = 0;
        $data->save();

        return redirect('home/studio/'.$request->id_user);
    }

}

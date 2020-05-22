<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Helper;

class websiteController extends Controller
{
    public function websiteindex(Request $request) {
        if (!empty($request->input('keyword'))) {
            $data = \App\Models\Shell::where('url', 'like', "%".$request->input('keyword')."%")
            ->orWhere('server_info', 'like', "%".$request->input('keyword')."%")
            ->paginate(1000);

            return view('website.website', [
                'data' => $data
            ]);
        } else {
            $data = \App\Models\Shell::orderBy('id', 'DESC')->paginate(10);
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
        $data = \App\Models\Shell::where('id', Crypt::decryptString($id))->first();
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
        date_default_timezone_set('Asia/Jakarta');
        $data = Helper::checkwebsite($request->url);

        if ($data == false) {
            return redirect('/website')->with(['alert' => 'Error!']);
        } else {
            if ($data['status'] == 'active') {
                $act = \App\Models\Shell::insert([
                    'url' => $data['url'],
                    'server_info' => $data['server_info'],
                    'domain' => Helper::getDomain($request->url),
                    'status' => $data['status'],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
                if ($act) {
                    return redirect('/shell')->with(['alert' => 'Insert Shell Success!']);
                } else {
                    return redirect('/shell')->with(['alert' => 'Error!']);
                }
            }
        }
    }

    public function websiteupdate(Request $request) {
        date_default_timezone_set('Asia/Jakarta');
        $url = \App\Models\Shell::select('url')->where('id', Crypt::decryptString($request->id))->first();
        $cek = Helper::checkShell($url->url);
        if ($cek == false) {
            \App\Models\Shell::where('url', $url->url)->update([
                'status' => 'inactive',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->back()->with(['alert' => 'Recheck Shell Success!']);
        } else {
            \App\Models\Shell::where('url', $url->url)->update([
                'status' => 'active',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->back()->with(['alert' => 'Recheck Shell Success!']);
        }
    }

    public function websitedelete(Request $request) {
        $act = \App\Models\Shell::where('id', Crypt::decryptString($request->id))->delete();
        if ($act) {
            return redirect('/shell')->with(['alert' => 'Delete Shell Success!']);
        } else {
            return redirect('/shell')->with(['alert' => 'Error!']);
        }
    }

    public function websitecheckjq(Request $request) {
        $url = \App\Models\Shell::select('url', 'domain')->where('id', $request->id)->first();
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

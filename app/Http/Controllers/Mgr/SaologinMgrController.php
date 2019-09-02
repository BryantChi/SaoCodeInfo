<?php

namespace App\Http\Controllers\Mgr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\saologin_info as saologin;

class SaologinMgrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $saologin_infos = saologin::orderBy('updated_at', 'DESC')->paginate(20);

        if ($request['search'] != "") {
            $search = $request['search'];
        } else {
            $search = '';
        }
        $saologin_infos = saologin::where(\DB::raw('concat(IFNULL(`fbUid`,""),IFNULL(`fbName`,""),IFNULL(`mobileType`,""),IFNULL(`phone`,""),IFNULL(`location`,""),IFNULL(`LoginTime`,""),IFNULL(`created_at`,""),IFNULL(`updated_at`,""))'), 'LIKE', '%' . $search . '%')->orderBy('updated_at', 'DESC')->paginate(20);

        return view('Mgr.login.index', ['saologin_infos' => $saologin_infos, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //
        if ($request->method() == "GET") {
            $saologin_info = saologin::where('id', $id)->first();

            return view('Mgr.login.edit', ['saologin_info' => $saologin_info]);
        }

        if ($request->method() == "POST") {

            $FBName = $request['fbName'];
            $FBlocation = $request['location'];
            $mobileType = $request['mobileType'];
            $phone = $request['phone'];

            if ($FBName != '' && $FBlocation != '' && $mobileType != '' && $phone != '') {
                $saologin_info = saologin::where('id', $id)->first();
                $saologin_info->fbName = (String)$FBName;
                $saologin_info->location = $FBlocation;
                $saologin_info->mobileType = $mobileType;
                $saologin_info->phone = $phone;
                $saologin_info->save();

                return redirect()->route('MgrSaologinIndex');
            }
        }
    }

    public function delete($id){
        $info = saologin::where('id', $id)->first();
        $info->delete();

        return redirect()->route('MgrSaologinIndex');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

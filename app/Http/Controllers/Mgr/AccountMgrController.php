<?php

namespace App\Http\Controllers\Mgr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\saoadmin_info as saoadmin;

class AccountMgrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $saoadmin_info = saoadmin::all();
        return view('Mgr.Account.index', ['saoadmin_infos' => $saoadmin_info]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        if ($request->method() == "GET") {
            $info = new saoadmin();
            return view('Mgr.Account.Create', ['saoadmin_info' => $info]);
        }

        if ($request->method() == "POST") {
            $input = $request->all();

            $info = new saoadmin();
            $info->email = $input['email'];
            $info->password = Hash::make($input['password']);
            $info->name = $input['name'];
            $info->is_enabled = $input['is_enabled'] === 'true' ? true : false;
            $info->created_at = date("Y-m-d H:i:s");
            $info->updated_at = date("Y-m-d H:i:s");
            $info->save();

            return redirect()->route('MgrManagerIndex');
        }
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
            $info = saoadmin::where('id', $id)->first();
            return View('Mgr.Account.edit', ['saoadmin_info' => $info]);
        }

        if ($request->method() == "POST") {
            $input = $request->all();

            $info = saoadmin::where('id', $id)->first();

            $info->name = $input['name'];
            if ($input['password'] != null) {
                $info->password = Hash::make($input['password']);
            }
            $info->is_enabled = $input['is_enabled'] === 'true' ? true : false;
            $info->updated_at = date("Y-m-d H:i:s");
            $info->save();

            return redirect()->route('MgrManagerIndex');
        }
    }

    public function delete($id)
    {
        $info = saoadmin::where('id', $id)->first();
        $info->delete();

        return redirect()->route('MgrManagerIndex');
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

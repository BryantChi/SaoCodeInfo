<?php

namespace App\Http\Controllers\Mgr;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use Session;
use App\saoadmin_info as saoadmin;
use App\saologin_info as saologin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $saologin_count = saologin::all()->count();
        return view('Mgr.index', ['saologin_count' => $saologin_count]);
    }

    public function login(Request $request)
    {
        $method = $request->method();

        if ($method == "GET") {
            return view('Mgr.login');
        }

        if ($method == "POST") {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('MgrLogin')->withErrors($validator)->withInput();
            }

            $input = $request->all();
            $email = $input['email'];
            $password = $input['password'];
            $saoadmin_info = saoadmin::where('email', $email)->first();

            if (is_null($saoadmin_info)) {
                $validator->errors()->add('password', '無效的信箱或密碼');
                return redirect()->route('MgrLogin')->withErrors($validator)->withInput();
            }

            if (Hash::check($password, $saoadmin_info->password) == false) {
                $validator->errors()->add('password', '無效的信箱或密碼');
                return redirect()->route('MgrLogin')->withErrors($validator)->withInput();
            }

            if ($saoadmin_info->is_enabled == 0) {
                $validator->errors()->add('password', '無效的帳號或權限');
                return redirect()->route('MgrLogin')->withErrors($validator)->withInput();
            }

            session(['saoadmin_id' => $saoadmin_info->id]);
            if ($saoadmin_info->Token == "") {
                mt_srand((float) microtime() * 10000);
                $charid = strtoupper(md5(uniqid(rand(), true)));
                $charid = strtolower($charid);
                $saoadmin_info->Token = $charid;
            }
            $saoadmin_info->login_at = date("Y-m-d H:i:s");
            $saoadmin_info->save();

            $saologin_count = saologin::all()->count();

            return view('Mgr.index', ['saologin_count' => $saologin_count]);
            //return redirect()->route('MgrIndex',['saologin_count' => $saologin_count]);
            /*$validator->errors()->add('password', '成功');
            return redirect()->route('Mgr.Login')->withErrors($validator)->withInput();*/
        }
    }

    public function logout(Request $request){
        Session::flush();
        return redirect()->route('MgrLogin');
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
    public function edit($id)
    {
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\saologin_info as saologin;
use App\saoinvite_info as saoinvite;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    public function login(Request $request)
    {
        if(isset($request['codes'])){
            $code = $request['codes'];
        }else{
            $code = '';
        }
        
        $phone = $request['tel'];
        $type = $request['type'];
        $id = $request['id'];
        $name = $request['name'];
        $mail = $request['mail'];
        date_default_timezone_set('Asia/Taipei');
        $logintime = date("Y-m-d H:i:s");

        $saologin_check = saologin::where("phone", $phone)->count();
        $saologin_check2 = saologin::where("fbUid", $id)->count();

        if(intval($saologin_check) == 0){
            if(intval($saologin_check2) == 0){                
                $saologin_infos = new saologin();
                $saologin_infos->fbUid = $id;
                $saologin_infos->fbName = $name;
                $saologin_infos->fbMail = $mail;
                $saologin_infos->phone = $phone;
                $saologin_infos->mobileType = $type;
                $saologin_infos->LoginTime = $logintime;
                $saologin_infos->save();
                if($code != ""){
                    $saoinvite_infos = new saoinvite();
                    $saoinvite_infos->loginfbUid = $id;
                    $saoinvite_infos->invitefbUid = $code;
                    $saoinvite_infos->inviteTime = $logintime;
                    $saoinvite_infos->save();
                }
                return json_encode(array("res" => "true"));
            }else if(intval($saologin_check2) > 0){
                return json_encode(array("res" => "已登錄過!!!"));
            }            
        }else if(intval($saologin_check) > 0){
            return json_encode(array("res" => "手機號碼重複!!!"));
        }
        

        
    }

    public function getLoginCount(Request $request)
    {
        $saologin_count = saologin::all()->count();

        return json_encode(array("res" => $saologin_count));
    }

    public function getInviteCount(Request $request)
    {
        $fbuid = $request['uid'];

        $saoinvite_count = saoinvite::where('invitefbUid', $fbuid)->count();

        return json_encode(array("res" => $saoinvite_count));
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

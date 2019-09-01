<?php

namespace App\Http\Middleware;

use Closure;
use App\saoadmin_info as saoadmin;

class ManagerVerifty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $saoadmin_id = $request->session()->get('saoadmin_id');
        if (is_null($saoadmin_id)) {
            return redirect()->route('MgrLogin');
        }

        $saoadmin_info = saoadmin::where('id', $saoadmin_id)->first();
        session(['saoadmin_name' => $saoadmin_info->name]);
        session(['saoadmin_login' => $saoadmin_info->login_at]);

        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }
        session(['saoadmin_ip' => $ip]);
        return $next($request);
    }
}

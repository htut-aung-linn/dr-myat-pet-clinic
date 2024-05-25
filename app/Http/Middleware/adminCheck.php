<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class adminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    private $username;
    private $password;
    public function handle(Request $request, Closure $next)
    {
        $inputCount = count($request->input());
        $this->username = '111';
        $this->password = '222';
        if($inputCount> 2){
            $this->username = $request->input('username');
            $this->password = $request -> input('password');
            Session::put('username', $this->username);
            Session::put('password', $this->password);
        }
        
        if(Session::get('username', false)){
            $this->username = Session::get('username');;
            $this->password = Session::get('password');;
        }
        $admins = Admin::where('name', $this->username)->where('password', $this->password)->get();
        $ishave = count($admins);
        if ($ishave>0) {
    
            foreach($admins as $admin){
                echo "Username: ".$admin->name;
            }
            return $next($request);
        }
        return response()->view('adminLogin', ['warning'=>'block'], 403);
        // Continue processing the request
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateRole
{
    /**
     * Valida si La solicitud Proviende desde una IP de Administrador
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin_ip = env('ADMIN_IP');
        $public_ip =  file_get_contents('https://api.ipify.org');        
        $client_ip = $request->ip();

        if($client_ip === $admin_ip){
            return $next($request);
        }

        return redirect()->back();
    }
}

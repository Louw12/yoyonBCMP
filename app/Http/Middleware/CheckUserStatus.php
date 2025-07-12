<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (Auth::check()) {
            $user = Auth::user();
            
            // Cek apakah status user adalah 'inactive'
            if ($user->status === 'inactive') {
                // Logout user yang inactive
                Auth::logout();
                
                // Invalidate session untuk keamanan
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                
                // Redirect ke login dengan pesan error
                return redirect()->route('login')->withErrors([
                    'email' => 'Akun Anda sedang tidak aktif. Silakan hubungi administrator untuk mengaktifkan kembali akun Anda.'
                ])->with('status', 'account_inactive');
            }
            
            // Optional: Log activity untuk monitoring
            // Log::info('User access granted', ['user_id' => $user->id, 'email' => $user->email]);
        }

        return $next($request);
    }
}
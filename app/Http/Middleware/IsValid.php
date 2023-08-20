<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user) {
            $userId = $user->id;

            if (User::find($userId)->vote) {
                return back()->with('error', 'Anda sudah memilih');
            }
            if ($user->is_candidate) {
                return back()->with('error', 'Anda termasuk calon');
            }
        } else {
            return redirect()->route('login'); // Redirect to login page if not logged in
        }

        return $next($request);
    }
}

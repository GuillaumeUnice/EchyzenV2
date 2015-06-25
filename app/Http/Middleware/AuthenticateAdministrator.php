<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Administrateur;

class AuthenticateAdministrator {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 403);
			}
			else
			{
                abort(403);
			}
		} else {

            if(!($this->auth->user()->role >= config('role.administrator'))) {

                if ($request->ajax())
                {
                    return response('Unauthorized.', 403);
                }
                else
                {
                    abort(403);
                }
            }
        }

		return $next($request);
	}

}

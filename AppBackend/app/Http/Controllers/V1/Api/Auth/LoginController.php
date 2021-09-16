<?php


namespace App\Http\Controllers\V1\Api\Auth;

use App\DB\base\BaseInterface;
use App\Http\Controllers\Controller;
use App\Http\Controllers\V1\ApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ApiController;

    protected static $base = null;

    public function __construct(BaseInterface $base, User $user)
    {
        self::$base = $base;
        self::$base->setModel($user);

    }

    public function login(Request $request)
    {
        $result = $request->only('email', 'password');

        if (Auth::attempt($result, true)) {
            auth()->user()->tokens()->delete();
            $token = auth()->user()->createToken('SPA');

            return $this->setStatusCode(200)
                ->respond(['token' =>$token,  'token_type' => 'Bearer', 'des' => __('msg.login')]);
        }
        return $this->respondNotFound();


    }
}



























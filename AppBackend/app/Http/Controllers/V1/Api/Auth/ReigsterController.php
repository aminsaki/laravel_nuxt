<?php


namespace App\Http\Controllers\V1\Api\Auth;


use App\DB\base\BaseInterface;
use App\Http\Controllers\Controller;
use App\Http\Controllers\V1\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ReigsterController extends Controller
{
    use ApiController;

    protected static $base = null;

    public function __construct(BaseInterface $base, User $user)
    {
        self::$base = $base;
        self::$base->setModel($user);
    }

    public function reigster()
    {
        $user = self::$base::create(['name' => Request('name'), 'email' => Request('email'), 'password' => Hash::make('123456')]);
        $token = $user->createToken('MyApp')->accessToken;
        return $this->setStatusCode(200)->respond(['data' => ['list'=>$user , 'token'=> $token ], 'des' => __('msg.register')]);

    }
}

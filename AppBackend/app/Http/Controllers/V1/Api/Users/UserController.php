<?php

namespace App\Http\Controllers\V1\Api\Users;

use App\DB\base\BaseInterface;
use App\Http\Controllers\Controller;
use App\Http\Controllers\V1\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Hash;
use Facade\App\Test\TestFacades;

class UserController extends Controller
{
    use ApiController;

    protected static $base = null;

    public function __construct(BaseInterface $base, User $user)
    {
        self::$base = $base;
        self::$base->setModel($user);
    }

    public function index()
    {
        return $this->setStatusCode(200)->respond(['data' => self::$base::all(), 'des' => __('msg.lists')]);
    }

    public function edit($id)
    {
        return $this->setStatusCode(200)->respond(['data' => self::$base::edit($id), 'des' => __('msg.edit')]);
    }

    public function create()
    {
        $data = ['name' => Request('name'), 'email' => Request('email'), 'password' => Hash::make('123456')];
        return ResponseDate(__('msg.create'), self::$base::create($data));
    }

    public function update()
    {
        $data = ['name' => Request('name'), 'email' => Request('email'), 'password' => Hash::make('123456')];
        return ResponseDate(__('msg.update'), self::$base::update($data, Request('id')));
    }

    public function delete()
    {
        return ResponseDate(__('msg.delete'), self::$base::delete(Request('id')), '200');
    }

    public function serach()
    {
        return ResponseDate(__('msg.lists'), self::$base::serach('name', Request('serach')), '200');
    }
}

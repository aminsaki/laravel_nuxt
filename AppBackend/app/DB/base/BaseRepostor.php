<?php


namespace App\DB\base;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BaseRepostor implements BaseInterface
{
    protected static $model = null;

    public static function setModel($model): void
    {
        self::$model = $model;
    }

    public static function all()
    {
        return self::$model->all();
    }

    public static function edit(int $id)
    {
        return self::$model->findOrFail($id);
    }

    public static function delete(int $id)
    {
        return self::$model->find($id)->delete();
    }

    public static function update(array $date, int $id)
    {
        return self::$model->find($id)->update($date);
    }

    public static function create(array $date)
    {
        return self::$model->create($date);
    }

    public static function serach($type, string $q)
    {
        return ($q != "") ? self::$model->where($type, 'like', "%{$q}%")->get() : self::all();
    }

    public function Auth($username, $password)
    {
        if (Auth::attempt(['email' => $username, 'password' => $password])) {
            return User::where(['email' => $username])->first();
        }
        return false;

    }
}

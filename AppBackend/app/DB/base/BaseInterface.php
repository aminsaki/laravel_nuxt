<?php


namespace App\DB\base;


interface BaseInterface
{
    /**
     * @return mixed
     */
    public static function all();


    /**
     * @param $mode
     * @return mixed
     */
    public static function setModel($mode);

    /**
     * @return mixed
     */
    public static function delete(int $id);

    /**
     * @param array $date
     * @param int $id
     * @return mixed
     */
    public static function update(array $date, int $id);
//

    /**
     * @param $id
     * @return mixed
     */
    public static function edit(int $id);

    /**
     * @param array $data
     * @return array
     */
    public static function create(array $data);

    /**
     * @param $type
     * @param string $q
     * @return mixed
     */
    public static function serach($type, string $q);

    /**
     * @param $username
     * @param $password
     * @return mixed
     */
    public function Auth($username, $password);


}

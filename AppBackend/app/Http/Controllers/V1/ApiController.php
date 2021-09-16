<?php


namespace App\Http\Controllers\V1;

/**
 * Trait ApiController
 * @package App\Http\Controllers\V1
 * This class is responsible for controlling and controlling server and system errors
 */
trait ApiController
{
    protected $statusCode = 200;

    /**
     * @return null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondNotFound($message = "Not Found!")
    {
        return $this->setStatusCode(404)->respondWithError($message);

    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondInternalError($message = "Internal Error!")
    {
        return $this->setStatusCode(500)->respondWithError($message);

    }

    /**
     * @param $data
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($data,  $headers = [])
    {
        return response()->json($data, $this->statusCode, $headers);
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithError($message)
    {
        return $this->respond([
            "error" => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
}


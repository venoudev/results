<?php

namespace Venoudev\Results\Traits;

use Illuminate\Http\Response;
use Venoudev\Results\ApiJsonResources\MessageResource;
use Venoudev\Results\ApiJsonResources\ErrorResource;


trait ApiResponser
{
    /**
     * Build a success response
     * @param  array $data | array []
     * @param  array $messages
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data = array(), $messages =array(), $code = 200, $description='')
    {
        $response = [
           'success' => true,
           'description'=> $description,
           'data'    => $data,
           'errors' => array(),
           'messages' =>  MessageResource::collection($messages),

       ];
       return response()->json($response, $code);//->header('Content-Type','application/json');
    }

    /**
     * Build error responses
     * @param  array $errors A array for you messages this is an Object of type Message
     * @param  array $messages A array for you messages this is an Object of type Message
     * @param  int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($errors = array(), $messages = array(), $code = 500, $description='')
    {

      $response = [
         'success' => false,
         'description'=> $description,
         'data' => array(),
         'errors'    => ErrorResource::collection($errors),
         'messages' => MessageResource::collection($messages),

       ];
       return response()->json($response, $code);
    }
}

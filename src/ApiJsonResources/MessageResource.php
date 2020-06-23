<?php

namespace Venoudev\Results\ApiJsonResources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class MessageResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'message_code'=> $this->getCodeMessage(),
          'message' => $this->getMessage(),
        ];
    }
}

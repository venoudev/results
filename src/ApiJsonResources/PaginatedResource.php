<?php

namespace Venoudev\Results\ApiJsonResources;

use Illuminate\Http\Resources\Json\ResourceCollection as Resource; 

class PaginatedResource extends Resource
{
   protected $namePagination;
   /**
    * Transform the resource into an array.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return array
    */
    public function __construct($resource, $namePagination = 'paginated')
     {
         parent::__construct($resource);
         $this->resource = $resource;
         $this->namePagination = $namePagination;
     }

    public function toArray($request)
    {
        $array = $this->resource->response()->getData(true);
        $array[$this->namePagination]=$array['data'];
        $this->array_unshift_assoc($array,$this->namePagination,$array[$this->namePagination]);
        unset($array['data']);
        return $array;
    }

    function array_unshift_assoc(&$arr, $key, $val)
    {
        $arr = array_reverse($arr, true);
        $arr[$key] = $val;
        return array_reverse($arr, true);
    }
}

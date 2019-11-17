<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
{
    public function toArray($request)
    {

        return parent::toArray($request);
//        return [
//            'id'=>$this->id,
//            'fullName'=>$this->name,
//            'mobile'=>$this->phone,
//            'created_at'=>(string)$this->created_at->format('m/d/Y'),
//        ];
    }
}

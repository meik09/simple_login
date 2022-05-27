<?php

namespace Simple\Login\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    public function toArray($request)
    {
        $data = $this->resource;
        return [
            'accessToken' => $data['access_token'] ?? '',
            'expiresIn' => $data['expires_in'] ?? 0,
        ];
    }
}

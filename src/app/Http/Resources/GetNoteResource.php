<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetNoteResource extends JsonResource
{
    public static $wrap = null;
    
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}

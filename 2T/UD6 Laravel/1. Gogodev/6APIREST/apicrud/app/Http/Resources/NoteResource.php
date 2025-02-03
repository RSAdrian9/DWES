<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource{
    public function toArray($request): array
    {
        return [
            'id' => $this ->id,
            'title' => 'Title: ' . $this->title,
            'content' => $this->content,
            'example' => 'This is an example'
        ];
    }
}

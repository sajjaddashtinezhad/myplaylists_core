<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'album' => $this->album,
            'duration' => $this->duration,
            'cover' => $this->cover ,
            'size' => $this->size,
            'path' => $this->path,
            'favorite' => auth()->user()->favorites()->where('song_id', $this->id)->exists(),
        ];
    }
}

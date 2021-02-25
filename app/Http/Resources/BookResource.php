<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image_url,
            'price' => $this->discounted_price,
            'authors' => AuthorResource::collection($this->whenLoaded('authors', $this->authors))->implode('name', ', '),
            'genres' => GenreResource::collection($this->whenLoaded('genres', $this->genres))->implode('name', ', '),
            'description' => $this->whenAppended('description', $this->description)
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $request->id,
            'exercise_name' => $request->exercise_name,
            //photo gif,
            'instructions' => $request->instructions,
            'instructions_arabic' => $request->instructions_arabic,
        ];
    }
}

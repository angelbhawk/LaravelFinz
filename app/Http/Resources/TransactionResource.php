<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'date' => $this->date,
            'month' => $this->month,
            'status' => $this->status,
            'account' => $this->whenLoaded('account', function () {
                return $this->account->name;
            }),
            'amount' => $this->amount,
            'type' => $this->whenLoaded('category', function () {
                return $this->category->type;
            }),
            'category' => $this->whenLoaded('category', function () {
                return $this->category->name;
            }),
            'description' => $this->whenLoaded('category', function () {
                return $this->category->description;
            }),
        ];
    }
}


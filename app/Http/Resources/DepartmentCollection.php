<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DepartmentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                // 'total' => $this->total(),
                'count' => $this->count(),
                'perpage' => $this->perPage(),
                'page' => $this->currentPage(),
                'pages' => $this->lastPage(),
                'sort' => "asc",
                'field' => "name"
            ],
        ];
    }
    public function withResponse($request, $response)
    {
        $jsonResponse = json_decode($response->getContent(), true);
        unset(
            $jsonResponse['links'],
            $jsonResponse['meta']['links'],
            $jsonResponse['meta'][0],
            $jsonResponse['meta']['count'],
            $jsonResponse['meta']['current_page'],
            $jsonResponse['meta']['from'],
            $jsonResponse['meta']['last_page'],
            $jsonResponse['meta']['path'],
            $jsonResponse['meta']['per_page'],
            $jsonResponse['meta']['to']
        );
        $response->setContent(json_encode($jsonResponse));
    }
}

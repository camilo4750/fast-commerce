<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wrappers\ControllerWrapper;
use App\Interfaces\Services\Client\ClientServiceInterface;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(
        ClientServiceInterface $clientService
    ) {
        $this->clientService = $clientService;
    }

    public function getById(int $clientId)
    {
        return ControllerWrapper::execWithJsonSuccessResponse(function () use ($clientId) {
            return [
                'message' => 'Informacion del cliente',
                'client' => $this->clientService->getById($clientId)
            ];
        });
    }


    public function existsByEmail(Request $request)
    {
        return ControllerWrapper::execWithJsonSuccessResponse(function () use ($request) {
            $client = $this->clientService->getByEmail($request->input('email'));

            return [
                'redirect' => route('Home.Index', ['clientId' => $client->id])
            ];
        });
    }
}

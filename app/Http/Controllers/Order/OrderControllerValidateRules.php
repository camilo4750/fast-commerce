<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;

class OrderControllerValidateRules
{
    public function validateStoreRequest(Request $request)
    {
        $rules = [
            'clientId' => ['required', 'int'],
            'cart' => ['required', 'array', 'min:1'],
            'cart.*.id' => ['required', 'integer'],
            'cart.*.quantity' => ['required', 'integer', 'min:1'],
        ];

        $request->validate($rules, [
            'clientId.required' => 'El cliente es obligatorio',
            'clientId.int' => 'El cliente debe ser un numero',
            'cart.required' => 'El carrito es obligatorio',
            'cart.array' => 'El carrito debe ser un arreglo',
            'cart.min' => 'El carrito debe tener al menos un elemento',
            'cart.*.id.required' => 'El ID del producto es obligatorio.',
            'cart.*.id.integer' => 'El ID del producto debe ser un número.',
            'cart.*.quantity.required' => 'La cantidad es obligatoria.',
            'cart.*.quantity.integer' => 'La cantidad debe ser un número.',
            'cart.*.quantity.min' => 'La cantidad debe ser al menos 1.',
        ]);
    }
}

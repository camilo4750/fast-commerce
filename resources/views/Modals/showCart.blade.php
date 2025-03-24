<div class="modal fade" id="cartModal" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cartModalLabel">Carrito de compras</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidades</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="Object.keys(cart).length > 0">
                                <tr v-for="(product, id, index) in cart">
                                    <th scope="row">@{{ index += 1 }}</th>
                                    <td>@{{ product.name }}</td>
                                    <td>@{{ product.price }}</td>
                                    <td>@{{ product.quantity }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" @click="deleteProductCard(id)">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </template>
                            <tr v-else>
                                <td colspan="5" class="text-center">No hay productos en el carrito.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    <strong>@{{ `total: $${cartTotal}` }}</strong>
                </div>
                <div class="d-flex gap-3 justify-content-end mt-4">
                    <button type="button" class="btn btn-sm btn-danger" @click="deleteAllProductsCard"
                        :disabled="Object.keys(cart).length === 0">
                        Eliminar pedido
                    </button>
                    <button class="btn btn-sm btn-success" @click="storeOrder()"
                        :disabled="Object.keys(cart).length === 0">
                        Realizar pedido
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
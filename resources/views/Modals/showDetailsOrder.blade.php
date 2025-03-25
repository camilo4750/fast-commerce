<div class="modal fade" id="OrderDetailsModal" aria-labelledby="OrderDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="OrderDetailsModalLabel">Detalles del pedido</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio Unidad</th>
                                <th scope="col">Cantidades</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-if="orderDetails.length > 0">
                                <tr v-for="(order, index) in orderDetails" :key="order.id">
                                    <th scope="row">@{{ index += 1 }}</th>
                                    <td>@{{ order.name }}</td>
                                    <td>@{{ order.price }}</td>
                                    <td>@{{ order.quantity }}</td>
                                    <td>@{{ order.priceTotal }}</td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <strong>@{{ `total: $${OrderTotal}` }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
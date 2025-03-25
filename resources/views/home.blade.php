@extends('master')

@section(section: 'css')
<style>
    #cartModal .modal-dialog {
        max-width: 800px !important;
    }

    @media (max-width: 768px) {
        #cartModal .modal-dialog {
            max-width: 100% !important;
        }
    }

    .dropdown-menu {
        max-height: 400px !important;
        overflow-x: auto !important;
    }
</style>

@section('body')
<div id="app" class="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Fast Commerce</a>
            <div class="d-flex gap-2 align-items-center ms-md-auto">
                <div class="dropdown">
                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mis pedidos
                        <span class="mx-2 badge text-bg-light">@{{ orders.length }}</span>
                    </button>
                    <ul class="dropdown-menu">
                        <template v-if="orders.length > 0">
                            <li v-for="(order, index) in orders" :key="order.id">
                                <button type="button" class="dropdown-item">
                                    <span class="fw-bold">@{{ index + 1 }}</span>@{{` - ${order.createdAt}`}}
                                </button>
                            </li>
                        </template>
                        <li v-else class="text-center fw-bold">
                            Aun no tienes pedidos
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#cartModal">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                <div class="dropdown">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <div class="px-3 pb-2 border-bottom">
                            <p class="m-0"><b>Bienvenido:</b> <br /> @{{this.client.name}}</p>
                        </div>
                        <li><button class="dropdown-item" @click="logout()">Cerrar session</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container p-4">
        <h3 class="mb-4">Ultimo en tendecia</h3>
        <div v-if="products.length > 0">
            <div class="row align-items-start justify-content-center">
                <div class="col-12 col-md-6 col-lg-3 mb-4" v-for="product in products" :key="product . id">
                    <div class="card " style="height: 200px;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">@{{ product.name }}</h5>
                            <p class="card-text" style="height: 50px">@{{ product.description }}</p>
                            <div class="d-flex justify-content-between fw-semibold">
                                <span class="">@{{ `$ ${ product.price } usd` }}</span>
                                <span :class="product.stock > 0 ? 'text-success' : 'text-danger'">
                                    @{{ `cant: ${ product.stock }` }}
                                </span>
                            </div>
                            <div class="d-flex align-items-end justify-content-end mt-auto">
                                <button class="btn btn-sm btn-info" :disabled="product.stock <= 0"
                                    @click="addCard(product)">
                                    <span class="me-2">Añadir al carrito</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div v-else>
            <div class="d-flex justify-content-center">
                <div class="spinner-border m-5" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
    @include('Modals.showCart')
</div>

@endsection

@section('js')
<script>
    const app = Vue.createApp({
            data() {
                return {
                    clientId: null,
                    isLoading: false,
                    client: {},
                    products: [],
                    cart: {},
                    orders: [],
                }
            },
            mounted() {
                this.clientId = Number(@json($clientId));
                this.loadClientData();
            },
            computed: {
                cartTotal() {
                    return Object.values(this.cart).reduce((total, product) => {
                        return total + product.price;
                    }, 0);
                }
            },
            methods: {
                async getClientById() {
                    let url = "{{ route('Client.GetById', ['clientId' => '?']) }}".replace('?', this.clientId);
                    try {
                        const res = await fetch(url, {
                            method: "GET",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                            },
                        });

                        const response = await res.json();
                        return response.client;
                    } catch (error) {
                        console.error(error)
                    }
                },

                async getProductsByClient() {
                    let url = "{{ route('ProductsByClient', ['clientId' => '?']) }}".replace('?', this.clientId);
                    try {
                        const res = await fetch(url, {
                            method: "GET",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                            },
                        });

                        const response = await res.json();
                        return response.data;
                    } catch (error) {
                        console.error(error)
                    }
                },

                async loadClientData() {
                    try {
                        this.client = await this.getClientById()
                        this.products = await this.getProductsByClient()
                        this.orders = await this.getOrdersByClient()
                    } catch (error) {
                        console.error(error)
                    }
                },

                logout() {
                    window.location.href = "{{ route('Login') }}";
                },

                addCard(product) {
                    const productId = product.id;
                    if (this.cart[productId]) {
                        this.cart[productId].quantity += 1;
                        this.cart[productId].price += product.price;
                    } else {
                        this.cart[productId] = {
                            id: product.id,
                            name: product.name,
                            price: product.price,
                            quantity: 1,
                        }
                    }
                    Utilities.toastr_('success', 'Exito', 'Tu producto se agrego al carrito', {
                        positionClass: "toast-bottom-right",
                        timeOut: "1000",
                    });
                },

                deleteProductCard(id) {
                    delete this.cart[id];
                },

                deleteAllProductsCard() {
                    this.cart = {};
                },

                async storeOrder() {
                    try {
                        const cart = Object.values(this.cart);

                        const res = await fetch('{{ route('Order.Store') }}', {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            },
                            body: JSON.stringify({
                                cart: cart,
                                clientId: this.clientId
                            })
                        })

                        const response = await res.json()

                        if(!response.success) {
                            Utilities.toastr_('error', 'Alerta', response.message)
                            return;
                        }

                        await this.loadClientData()
                        $('#cartModal').modal('hide');
                        this.cart = {},
                        Utilities.toastr_('success', 'Compra Exitosa', response.message)
                    } catch (error) {
                        console.error(error)
                    }
                },

                async getOrdersByClient() {
                    let url = "{{ route('OrdersByClient', ['clientId' => '?']) }}".replace('?', this.clientId);
                    try {
                        const res = await fetch(url, {
                            method: "GET",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                            },
                        });

                        const response = await res.json();
                        console.log(response);
                        
                        return response.data;
                    } catch (error) {
                        console.error(error)
                    }
                },
            },
        })
        const vm = app.mount('#app');
</script>
@endsection
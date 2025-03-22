@extends('master') {{-- Extiende la plantilla master.blade.php --}}


@section('body')
<div id="app" class="">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Fast Commerce</a>
            <div class="d-flex gap-2 align-items-center ms-auto">
                <button type="button" class="btn btn-sm btn-secondary">
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
                        <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                        <li><button class="dropdown-item" @click="logout()">Cerrar session</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="container">
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
                }
            },
            mounted() {
                this.clientId = Number(@json($clientId));       
                this.getClientById();     
                this.getProducts();     
                this.product();           
            },
            methods: {                
                getClientById() {
                    let url = "{{ route('Client.GetById', ['clientId' => '?']) }}".replace('?', this.clientId);    
                    fetch(url, {
                        method: "GET",
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                        },
                    })
                    .then((response) => response.json())
                    .then((res) => {
                        if(!res.success) {
                            Utilities.toastr_('error', 'Error', res.message);
                            return;
                        }

                        this.client = res.client;
                    })
                },

                product() {
                    let url = "{{ route('Product.GetById', ['productId' => '?']) }}".replace('?', 2);    
                    fetch(url, {
                        method: "GET",
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                        },
                    })
                    .then((response) => response.json())
                    .then((res) => {
                        if(!res.success) {
                            Utilities.toastr_('error', 'Error', res.message);
                            return;
                        }

                        this.client = res.client;
                    })
                },

                getProducts() {
                    let url = "{{ route('ProductsByClient', ['clientId' => '?']) }}".replace('?', this.clientId);    
                    fetch(url, {
                        method: "GET",
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                        },
                    })
                    .then((response) => response.json())
                    .then((res) => {
                        if(!res.success) {
                            Utilities.toastr_('error', 'Error', res.message);
                            return;
                        }

                        this.products = res.products;
                    })
                },

                logout() {                
                    window.location.href = "{{ route('Login') }}";
                },
                
            },

        })
        const vm = app.mount('#app');
</script>
@endsection
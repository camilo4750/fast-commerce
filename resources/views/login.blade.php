@extends('master')


@section('body')
<div id="app" class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-5 w-1/3 shadow">

        <div class="card-body ">
            <h1 class="font-bold text-center fs-3">Bienvenido a Fast Commerce</h1>
            <div class="mt-4">
                <form @submit.prevent="submintLogin">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" id="email" v-model="email" class="form-control"
                            placeholder="name@example.com">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success block fw-bold">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    const app = Vue.createApp({
            data() {
                return {
                    email: ""
                }
            },
            methods: {
                submintLogin() {
                    if(!this.email) {
                        Utilities.toastr_('warning', 'Alerta', 'Email es obligatorio');
                        return;
                    }

                    fetch("{{ route('Client.ExistsByEmail') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        },
                        body: JSON.stringify({
                            email: this.email
                        })
                    })
                    .then((response) => response.json())
                    .then((res) => {
                        if(res.success) {
                            window.location.href = res.redirect;
                        } else {
                            Utilities.toastr_('error', 'Error', res.message);
                        }
                    })
                    .catch(error => {
                        console.error('Hubo un error!', error);
                    });                  
                },
            },
        })
        const vm = app.mount('#app');
</script>
@endsection
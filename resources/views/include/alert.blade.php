@if (session('success'))
    <!--<div class="alert alert-success" >
        {{ session('success') }}
    </div>-->
    <script>
        swal('Login','','success');
    </script>
@endif


@if (session('error'))
    <!--<div class="alert alert-danger" >
        {{ session('error') }}
    </div>-->
    <script>
        swal('Erro de Autenticação','verifique o email e senha','error');
    </script>
@endif
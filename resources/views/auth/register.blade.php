<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body>
    <h1 class="text-center my-4">Criar conta</h1>

    <div class="card shadow my-5 w-75 mx-auto">
        <div class="card-body">
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="user[nome]" id="nome" class="form-control"
                                placeholder="Nome">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="user[email]" id="email" class="form-control"
                                placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="user[cpf]" id="cpf" class="form-control"
                                placeholder="CPF">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="password" name="user[senha]" id="senha" class="form-control"
                                placeholder="Senha">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="address[cep]" id="cep" class="form-control"
                                placeholder="CEP">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" name="address[estado]" id="estado" class="form-control"
                                placeholder="UF">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" name="address[cidade]" id="estado" class="form-control"
                                placeholder="Cidade">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" name="address[rua]" id="rua" class="form-control"
                                placeholder="Rua">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="address[numero]" id="numero" class="form-control"
                                placeholder="Número">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address[bairro]" id="bairro" class="form-control"
                                placeholder="Bairro">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address[complemento]" id="complemento" class="form-control"
                                placeholder="Complemento">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phones[0][number]" id="numero" class="form-control" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phones[1][number]" id="numero" class="form-control"
                                placeholder="Celular">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block mt-3">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>

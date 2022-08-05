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
    <h1 class="text-center my-4">Cadastrar</h1>

    <div class="card shadow my-5 w-75 mx-auto">
        <div class="card-body">
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="user[nome]" id="nome"
                                class="form-control {{ $errors->has('user.nome') ? 'is-invalid' : '' }}"
                                placeholder="Nome" value="{{ old('user.nome') }}">
                            <div class="invalid-feedback">{{ $errors->first('user.nome') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name="user[email]" id="email"
                                class="form-control {{ $errors->has('user.email') ? 'is-invalid' : '' }}"
                                placeholder="E-mail" value="{{ old('user.email') }}">
                            <div class="invalid-feedback">{{ $errors->first('user.email') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="user[cpf]" id="cpf"
                                class="form-control cpf {{ $errors->has('user.cpf') ? 'is-invalid' : '' }}"
                                placeholder="CPF" value="{{ old('user.cpf') }}">
                            <div class="invalid-feedback">{{ $errors->first('user.cpf') }}</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="password" name="user[password]" id="password"
                                class="form-control {{ $errors->has('user.password') ? 'is-invalid' : '' }}"
                                placeholder="Senha">
                            <div class="invalid-feedback">{{ $errors->first('user.password') }}</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input type="password" name="user[password_confirmation]" id="password_confimation" class="form-control"
                                placeholder="Confirmar Senha">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="address[cep]" id="cep"
                                class="form-control cep {{ $errors->has('address.cep') ? 'is-invalid' : '' }}"
                                placeholder="CEP" value="{{ old('address.cep') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.cep') }}</div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" name="address[estado]" id="estado"
                                class="form-control uf  {{ $errors->has('address.estado') ? 'is-invalid' : '' }}"
                                placeholder="UF" value="{{ old('address.estado') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.estado') }}</div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" name="address[cidade]" id="cidade"
                                class="form-control {{ $errors->has('address.cidade') ? 'is-invalid' : '' }}"
                                placeholder="Cidade" value="{{ old('address.cidade') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.cidade') }}</div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" name="address[rua]" id="rua"
                                class="form-control {{ $errors->has('address.rua') ? 'is-invalid' : '' }}"
                                placeholder="Rua" value="{{ old('address.rua') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.rua') }}</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="address[numero]" id="numero"
                                class="form-control {{ $errors->has('address.numero') ? 'is-invalid' : '' }}"
                                placeholder="Número" value="{{ old('address.numero') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.numero') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address[bairro]" id="bairro"
                                class="form-control {{ $errors->has('address.bairro') ? 'is-invalid' : '' }}"
                                placeholder="Bairro" value="{{ old('address.bairro') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.bairro') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="address[complemento]" id="complemento"
                                class="form-control {{ $errors->has('address.complemento') ? 'is-invalid' : '' }}"
                                placeholder="Complemento" value="{{ old('address.complemento') }}">
                            <div class="invalid-feedback">{{ $errors->first('address.complemento') }}</div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phones[0][numero]" id="numero"
                                class="form-control phone {{ $errors->has('phones.0.numero') ? 'is-invalid' : '' }}"
                                placeholder="Telefone" value="{{ old('phones.0.numero') }}">
                            <div class="invalid-feedback">{{ $errors->first('phones.0.numero') }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="phones[1][numero]" id="numero"
                                class="form-control cellphone {{ $errors->has('phones.1.numero') ? 'is-invalid' : '' }}"
                                placeholder="Celular" value="{{ old('phones.1.numero') }}">
                            <div class="invalid-feedback">{{ $errors->first('phones.1.numero') }}</div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block mt-3">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/auth/register.js') }}"></script>
</body>

</html>

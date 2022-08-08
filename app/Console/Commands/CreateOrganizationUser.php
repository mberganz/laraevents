<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateOrganizationUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:organization-user {nome} {email} {cpf} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um novo usuário do tipo organização';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $nome = $this->argument('nome');
        $email = $this->argument('email');
        $cpf = $this->argument('cpf');
        $password = $this->argument('password');

        User::create([
            'nome' => $nome,
            'email' => $email,
            'cpf' => $cpf,
            'password' => $password,
            'tipoUsuario' => 'organization'
        ]);
        $this->info('Usuário cadastrado com sucesso!');
    }
}

<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateOrganizationUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:organization-user {name} {email} {cpf} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um usuário do tipo organização';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $cpf = $this->argument('cpf');
        $password = $this->argument('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'cpf' => $cpf,
            'password' => $password,
            'role' => 'organization'
        ]);

        $this->info('Usuário cadastrado com sucesso!');
    }
}

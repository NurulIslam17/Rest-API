<?php

namespace App\Console\Commands;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Console\Command;

class MakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin {--u=} {--e=} {--p=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command For creating System Admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->option('u');
        $email = $this->option('e');
        $password = $this->option('p');

        $isAdminExist = User::where('type',1)->where('is_active',1)->exists();

        if ($isAdminExist) {
            $this->error("Already active Admin Exist.");
        }else{
            User::create([
                "name"=>$name,
                "email"=>$email,
                "email_verified_at"=>now(),
                "password"=>bcrypt($password),
                "type"=>1
            ]);
            $this->info("System Admin Created.");
        }
    }
}

<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class createUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:createUser {--username=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'takes option --username and --password';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $user = new User();
        $user->password = Hash::make($this->option('password'));
        $user->email = 'umihico@users.noreply.github.com';
        $user->name = $this->option('username');
        $user->api_token = Str::random(60);
        $user->save();
    }
}

<?php

Artisan::command('user:create', function () {

        $name = $this->ask('Enw?');
        $email = $this->ask('Ebost?');
        $pwd = $this->ask('Cyfrinair?');

        \DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($pwd),
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
        ]);

        $this->info('Cyfri wedi\'i greu ar gyfer '.$name);
});


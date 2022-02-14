<?php

namespace Kcms\Core\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command{

    protected $signature = 'kcms:install';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info("kcms:install");
    }
}
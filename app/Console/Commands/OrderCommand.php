<?php

namespace App\Console\Commands;

use App\Models\OrderScheduler;
use Carbon\Carbon;
use Illuminate\Console\Command;

class OrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the latest orders';

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
     * @return int
     */
    public function handle()
    {
        $order = new OrderScheduler();
        $order->store_name = '1';
        $order->response = Carbon::now();
        $order->save();
    }
}

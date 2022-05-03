<?php

namespace App\Console\Commands;

use App\Models\Address;

use App\Models\Product;
use Illuminate\Console\Command;

class count_addresses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:count-addresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The number of addresses a customer has with this ID';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        if (!Product::find($id)) {
            $this->error('This  doesnt exist!');
            return 1;
        }
        $count = Address::where('product_id', $id)->count();
        $this->info('This categories has ' . $count . ' addresses');
        return 0;
    }
}

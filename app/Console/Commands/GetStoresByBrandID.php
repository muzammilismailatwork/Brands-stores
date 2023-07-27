<?php

namespace App\Console\Commands;

use App\Models\Store;
use Illuminate\Console\Command;

class GetStoresByBrandID extends Command
{
    protected $signature = 'stores_number {--brand=}';
    protected $description = 'This command return all the stores which is related to your given brand_id';

    public function handle()
    {
        $brandId = $this->option('brand');

        $storeCount = Store::where('brand_id', $brandId)->count();

        $this->info("Number of stores for brand ID {$brandId} is: {$storeCount}");
    }
}

<?php

namespace App\Console\Commands;

use App\Models\Address;
use Illuminate\Console\Command;

class CreateAddressCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'address:create {--n= } {--bd=} {--ft=} {--rd=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Company Address and Info';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $isExist = Address::get();
        $name = $this->option('n');
        $building = $this->option('bd');
        $flat = $this->option('ft');
        $road = $this->option('rd');
        
        if (count($isExist)>0) {
            $address = Address::first();
            Address::where('id',$address->id)->update([
                'name'=>$name,
                'building'=>$building,
                'flat'=>$flat,
                'road'=>$road
            ]);
        }else{
            Address::create([
                'name'=>$name,
                'building'=>$building,
                'flat'=>$flat,
                'road'=>$road
            ]);
        }
        $this->info("Address info created");
    }
}

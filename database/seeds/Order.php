<?php

use Illuminate\Database\Seeder;

class Order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,20)as $number){
            Order::creat([
                'category_id'=>'category_id'.$number,
                'book_id'=>'book_id'.$number,
                'discount'=>rand(0,0.5),
                'quantity'=>rand(1,99) ,
                'orderdate'=>Carbon::now()->addDays($number),
                'principal'=>rand(5000,10000) ,
                'member_id'=>'member_id'.$number
            ]);
        }
    }
}

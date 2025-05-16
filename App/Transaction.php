<?php 

declare(strict_types=1);

namespace Gio;

class Transaction {

    // const STATUS_PAYED = 'paid';
    // const STATUS_PENDING = 'pending';
    // const STATUS_DECLINED = 'declined';

    // private static int $count = 0;

    private float $amount;

    public function __construct
    (
         float $amount,
        public string $description
    )
    {
        $this->amount = $amount;
    }

    // public function getAmount(): float {
    //     return $this->amount;
    // }

    // public function setAmount(float $amount){
    //     $this->amount = $amount;
    // }

    // public static function getCount(): int {
    //     return self::$count;
    // }

    public function process(){
        echo 'Process...' . $this->amount;
    }

   

}


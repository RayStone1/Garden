<?php
namespace App;

class Planting{
    public static function TreePlanting()
    {
        $seeds=Seeds::seeds();
        $garden=[];
        $num=0;
        foreach ($seeds as $type=>$count){
           for ($i=0; $i < $count; $i++) { 
                $garden[$type][]=[
                    'id'=>$num++,
                    'count_fruit'=>mt_rand(40,50),
                    'weight_fruit'=>mt_rand(150,180),
                ];
            }
        }
        return $garden;
    }
}
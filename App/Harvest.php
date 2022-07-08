<?php
namespace App;


class Harvest{
    public static function FruitHarvest()
    {
        $garden=Planting::TreePlanting();
        $sum=0;
        $weight=0;
        $result=[];
        foreach ($garden as $trees_type => $trees_fruit ) {
            foreach ($trees_fruit as $tree) {
                $sum+=$tree['count_fruit'];
                $weight+=$tree['weight_fruit'];
            }
            $result[]=[
                'type'=>$trees_type,
                'count'=>$sum,
                'weight'=>$weight,
            ];
        }

        return $result;
    }
}
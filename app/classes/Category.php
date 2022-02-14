<?php


namespace App\classes;


class Category
{
    public function category(){
        return[
            0=> [
                'id' => 1,
                'name' => 'Man',
            ],
            1=> [
                'id' => 2,
                'name' => 'Women',
            ],
            2=> [
                'id' => 3,
                'name' => 'Kids',
            ],
        ];
    }
}
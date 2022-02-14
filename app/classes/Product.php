<?php


namespace App\classes;


class Product
{
    public function getAllProducts(){
        return[
            0=> [
                'id'           => 1,
                'category-id'  => 3,
                'name'         => 'New Product',
                'price'        => '4500',
                'description'  => 'description',
                'image'        => 'new.jpeg'
            ],
            1=> [
                'id'           => 2,
                'category-id'  => 1,
                'name'         => 'New T-Shirt',
                'price'        => '450',
                'description'  => 'description',
                'image'        => 'tshirt.jpg'
            ],
            2=> [
                'id'           => 3,
                'category-id'  => 2,
                'name'         => 'New Saree',
                'price'        => '2500',
                'description'  => 'description',
                'image'        => 'saree.jpg'
            ],
            3=> [
                'id'           => 4,
                'category-id'  => 1,
                'name'         => 'New Lunggi',
                'price'        => '400',
                'description'  => 'description',
                'image'        => 'lungi.jpg'
            ],
        ];
    }

    protected $allProduct;
    protected $result = [];
    public function __construct()
    {

    }

    public function shortProducts($catId){
        $this->allProduct = $this->getAllProducts();
        foreach ($this->allProduct as $pro){
            if ($pro['category-id'] == $catId){
                array_push( $this->result, $pro);
            }
        }
        return $this->result;
    }


    public function getAllProductsDetails($id){
        $this->allProduct = $this->getAllProducts();
        foreach ($this->allProduct as $product){
            if($product['id'] == $id){
                return $product;
            }
        }
    }
}
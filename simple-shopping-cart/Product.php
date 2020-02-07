<?php

class Product
{

    public $productArray = array(
        "3DcAM01" => array(
            'id' => '1',
            'name' => 'Camera',
            'code' => 'AM01',
            'image' => 'product-images/camera.jpg',
            'price' => '800.00'
        ),
        "USB02" => array(
            'id' => '2',
            'name' => 'External Hard Drive',
            'code' => 'Harddrve45',
            'image' => 'product-images/external-hard-drive.jpg',
            'price' => '70.00'
        ),
        "wristWear03" => array(
            'id' => '3',
            'name' => 'Wrist Watch',
            'code' => 'wris03',
            'image' => 'product-images/watch.jpg',
            'price' => '60.00'
        )
    );

    public function getAllProduct()
    {
        return $this->productArray;
    }
}

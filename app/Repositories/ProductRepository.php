<?php
namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface as InterfacesProductRepositoryInterface;

class ProductRepository extends BaseRepository implements InterfacesProductRepositoryInterface
{
    // protected $productRepository;
    //lấy model tương ứng
    public function getModel()
    {
        return Product::class;
    }

    public function getProduct()
    {
        return $this->model->select('product_name')->take(5)->get();
    }
}

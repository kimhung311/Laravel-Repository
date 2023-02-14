<?php

namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface as RepositoriesRepositoryInterface;

interface ProductRepositoryInterface extends RepositoriesRepositoryInterface
{
    //ví dụ: lấy 5 sản phầm đầu tiên
    public function getProduct();
    public function getAll();
}

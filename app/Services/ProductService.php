<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
// use App\Repositories\ProductRepository;

class ProductService extends ProductRepository
{
    private object|null $productService;

    public function __construct(ProductRepository $postRepository )
    {
        $this->productService = $postRepository;
    }

    // public function create(Request $request)
    // {
    //     $attributes = $request->except('names');
    //     $names = $request->names;
    //     $count = count($names);
    //     $tags = $this->tagRepository->findByName($names); // lấy các tag dựa vào name
    //     $duplicateNames = [];
    //     for ($i = 0; $i < $count; $i++) { // lấy các tag đã tồn tại trong csdl
    //         foreach ($tags as $tag) {
    //             if ($names[$i] === $tag->name) {
    //                 array_push($duplicateNames, $names[$i]);
    //             }
    //         }
    //     }
    //     $newNames = array_diff($names, $duplicateNames); // loại bỏ các tag đã tồn tại

    //     $this->tagRepository->insert($newNames); // lưu các tag mới vào csdl

    //     $post = $this->postRepository->create($attributes); // lưu post
    //     $tagIds = $this->tagRepository->findByName($names)->pluck('ids')->toArray();
    //     $post->sync($tagIds); // cập nhật tag cho post

    //     return $post;
    // }
}

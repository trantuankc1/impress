<?php

namespace Modules\Admin\Services;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Admin\Contracts\Repositories\Mysql\CategoryRepository;
use Modules\Admin\Contracts\Services\CategoryService;

class CategoryServicelmpl implements CategoryService
{
    protected CategoryRepository $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param Request $request
     * @return Category
     */
    public function save(Request $request): Category
    {
        $category = new Category();
        $category->name = $request->get('name');

        return $this->categoryRepository->save($category);
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $this->categoryRepository->destroy($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getAllCategory(): LengthAwarePaginator
    {
        return $this->categoryRepository->getAllCategory();
    }

    public function edit(int $id)
    {
        return $this->categoryRepository->edit($id);
    }

    public function update(Request $request, int $id)
    {
        $category = $this->categoryRepository->edit($id);
        $category->name = $request->get('name');

        return $this->categoryRepository->update($category);
    }
}

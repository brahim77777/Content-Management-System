<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\View\View;

class CategoryComposer{
    protected $categories;
    protected $number_of_posts;
    protected $number_of_users;
    public function __construct(Category $categories , Post $posts , User $users)
    {
        $this->categories = $categories;
        $this->number_of_posts = $posts->whereApproved(1)->count();
        $this->number_of_users = $users->count();
    }

    public function compose(View $view){
        $view->with('categories' , $this->categories->all())->with('number_of_posts' , $this->number_of_posts)->with('number_of_users', $this->number_of_users);

    }

}

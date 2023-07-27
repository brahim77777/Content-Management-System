    <h1>Categories => {{$categories->count()}}</h1>
    <h1>Number of Posts => {{$number_of_posts}}</h1>
@foreach($categories as $category)

<div class="text-red-500">{{$category->title}}</div>

@endforeach


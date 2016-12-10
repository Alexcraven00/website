<?php
    
$file = $request->file('image');
$name = Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
$file->move(public_path('/post_images'), $name);

    
if (Post::create([
    'user_id' => $request->user()->id,
    'title' => $request->title,
    'slug' => Str::slug($request->title)
    'category_id' => $request->catagory_id,
    'description' => $request->description,
    'text' => str_replace('<img', '<img class="img-responsive" style="100%" ', $request->text)
    'image' => $name,
])
   )

{
    return toWithSucess('/admin/blog/posts/manage', 'Post sucessfully created!')
} else {
    return toWithError('/admin/blog/posts/manage', 'Post failed to create!')
}

?>
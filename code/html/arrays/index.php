<?php

class Post
{
    public $title;
    public $published;
    public function  __construct($title, $published)
    {
        $this->title=$title;
        $this->published=$published;
    }

}
$post=[
    new Post('Mi primera publicacion',true),
    new Post('Mi segunda publicacion',true),
    new Post('Mi tercera publicacion',true),
    new Post('Mi cuarta publicacion',false),
];
//$modified = array_map(function ($post) {
//    $post->published = true;
//    return $post;
//},$post);

var_dump(array_column($post, 'title'));



//$unpublishedPosts =array_filter($post,function ($post){
//    return ! $post->published;
//});
//
//$publishedPosts =array_filter($post,function ($post){
//    return $post->published;
//});
//
//var_dump($publishedPosts);
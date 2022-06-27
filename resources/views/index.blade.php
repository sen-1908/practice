<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">-->
        
    </head>
    <body>
       <h1>Blog Name</h1>
       <div class = "posts">
           <p>[<a href="/posts/create">投稿を新規作成する</a>]</p>
           @foreach($posts as $post)
           <div class = "post">
               <h2 class = "title1"><a href="/posts/{{ $post ->id}}">{{$post -> title}}</a></h2>
               <p class = "body">{{ $post -> body}}</p>
               <form onsubmit ="return check()" action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="POST" >
                   @csrf
                   @method('DELETE')
                   <button type="submit" id ="delete">この投稿を削除する</button>
                   <script src =" {{ secure_asset('/js/delete.js') }}"></script>
               </form>
           </div>
           @endforeach
       </div>
       <dic class='pagination'>
           {{ $posts -> links() }}
       </dic>
    </body>
</html>

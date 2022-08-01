<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
      <div class="posts">
        <a href="/post/create">[create]</a>
        @foreach($posts as $post)
          <div class="post">
            <h1><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h1>
            <p>{{ $post->body }}</p>
            <p>{{ $post->updated_at }}</p>
          </div><!-- /.post -->
        @endforeach
      </div><!-- /.posts -->
      
    </body>
</html>
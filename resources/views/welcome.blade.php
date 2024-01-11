<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  <div class="container mx-auto px-10 py-5">
    <div class="bg-[#3800AF] rounded-lg">
        <div class="p-5 flex justify-between">
          <h1 class="text-2xl font-bold text-white ">Started at 4:20</h1>
          <h1 class="text-2xl font-bold text-white ">Ended at 5:30</h1>
        </div>
    </div>
    <div class="py-5 my-5 flex gap-3">
      <div class="w-1/3 bg-[#3800AF] rounded-lg ">
        <p class="text-xl text-white px-5 py-5">Hi i'm Saikat Barai . I'm full stuck developer. I used tailwind css for design and PHP(laravel) for development.</p>
      </div>
      <div class="w-2/3 ">
        <div class="grid grid-cols-3 gap-5">
          @foreach ($posts as $post)
          <a href="{{ route('details', ['id'=>$post->id]) }}">
            <div class="bg-[#3800AF] p-3 rounded-xl">
              <div class="">
                <img class="" src="{{ asset('placeholder.png') }}" alt="">
              </div>
              <div class="text-white py-3 space-y-2">
                <h2 class="text-2xl font-semibold">{!! Str::limit($post->title, 16, ' ...') !!}</h2>
                <p class="text-base">{!! Str::limit($post->description, 80, ' ...') !!}</p>
              </div>
            </div>
          </a>
          @endforeach
          {{ $posts->links() }}
        </div>
        <div  class="bg-[#3800AF] rounded-lg p-7 mt-7 text-center">
          <h1  class="text-white text-xl font-semibold">GitHub link: &nbsp; <a href="" class="text-orange-400">skdjfhksjdf</a></h1>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
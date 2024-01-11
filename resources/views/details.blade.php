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
      <div class="">
        <div class=" flex gap-5 items-center">
          <div>
            <img src="{{ asset('placeholder.png') }}" alt="">
          </div>
          <div class="text-white py-3 space-y-2">
            <h2 class="text-2xl font-semibold">{{ $post->title }}</h2>
           <p class="text-base">{{ $post->description }}</p>
          </div>
        </div>
        <div class="flex gap-5">
            <div class="bg-[#3800AF] rounded-lg p-7 mt-7 text-center w-1/3" >
                <a href="{{ url('/') }}"  class="text-white text-xl font-semibold">Home</a>
            </div>
            <div  class="bg-[#3800AF] rounded-lg p-7 mt-7 text-center w-2/3">
                <h1  class="text-white text-xl font-semibold">GitHub link: &nbsp; <a href="https://github.com/saikat-barai/dev_test" class="text-orange-400">Click Here</a></h1>
              </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
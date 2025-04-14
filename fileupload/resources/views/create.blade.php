<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="w-2/3 text-center bg-gray-200 mx-auto mt-20 rounded-xl">
        <h1 class="text-3xl font-bold pt-10 mb-20">File Upload</h1>

      <form class="pb-5" action="{{route('file.upload')}}" method="post" enctype="multipart/form-data">

          @csrf

                  {{-- error message display --}}
        @if ($errors->any())
        <div class="mb-4 p-4 rounded-lg bg-red-100 border border-red-400 text-red-700">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- successful message display --}}
        @if (session('success'))
        <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show"
        x-transition
        class="fixed top-5 right-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-lg z-50"
    >
            {{ session('success') }}
        </div>
        @endif



        <label for="File">
            <span class="text-sm font-medium text-gray-700 pe-5"> Upload Your File </span>
          
            <input
              type="file"
              id="file"
              name="file"
              class="mt-0.5 w-1/3 rounded border-gray-300 shadow-sm sm:text-sm text-xl py-3 bg-white ps-5 cursor-pointer"
            />
          </label>

          <button class="bg-green-700 py-3 px-5 block text-center mx-auto my-10 cursor-pointer rounded-xl text-gray-100 font-medium" name="submit" type="submit">Upload</button>
      </form>

    </div>

    <div class="w-4/5 mx-auto bg-gray-100 mt-10">
       <div class="flex">
        @foreach ($data as $image)
        <div class="w-80 mx-2">
            <img class="object-fill w-48" src="{{'storage/'.$image->file_name}}" alt="">
        </div>
        @endforeach
       </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />


        <title>TweetApp</title>
    </head>
    <body class="antialiased">
        <div>
            @include('partials.nav')

          <header class="bg-gray-50 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              <h1 class="text-3xl font-bold leading-tight text-gray-900">
                @yield('section_name' , 'Default')
              </h1>
            </div>
          </header>
          <main>
            <div class="max-w-5xl mx-auto py-6 sm:px-6 lg:px-8">
              <!-- Replace with your content -->
              <div class="px-4 py-6 sm:px-0">
                @yield('content')
              </div>
              <!-- /End replace -->
            </div>
          </main>
        </div>

    </body>
</html>

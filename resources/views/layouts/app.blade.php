<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Book</title>
    <meta name="description" content="Simple tool to generate book pages to print">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="h-full bg-gray-200">
        @include('components.navbar')

        @include('components.header')

        <main class="h-full max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="container mx-auto px-4 sm:px-8 max-w-5xl">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/copy.js"></script>
    @yield('script')
</body>

</html>
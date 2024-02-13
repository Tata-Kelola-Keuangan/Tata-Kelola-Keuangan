<!doctype html>
<html lang="en">

<head>
    <link href="{{asset('asset/img/logo/logo2.png')}}" rel="icon">
    <title>Poliwangi - Tata Kelola Kuangan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('asset2/dist/styles.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        .login {
            background: url({{asset('asset2/dist/images/login-new.jpeg')}})
        }

    </style>
</head>

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="username">Email</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email"
                            type="email" required="email" placeholder="Masukan Email Anda" aria-label="email">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-00" for="password">Password</label>
                        <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password"
                            type="password" required="password" placeholder="Password" aria-label="password">
                    </div>
                    <div class="mt-4 flex items-center justify-center">
                    <button type="submit"
                        class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Log
                        In</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

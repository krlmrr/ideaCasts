<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-50 text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href='{{ route('index') }}' class="text-xl">
                IdeaCasts
            </a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="top-0 right-0 px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                >
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="{{ route('index') }}">
                    <img src="https://www.gravatar.com/avatar/0000000000000000?d=mp"
                        alt="avatar"
                        class="w-10 h-10 rounded-full"
                    >
                </a>
            </div>
        </header>
        <main class="container mx-auto flex my-4">
            <div class="mx-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad architecto culpa delectus ducimus, eaque error harum molestias nobis numquam odit perspiciatis quae quibusdam quo, voluptas. Ab alias aut commodi consequuntur culpa cupiditate, deserunt dicta distinctio dolore doloribus ducimus ea eaque est facere hic id itaque libero magnam magni molestiae nisi obcaecati quam repellat sequi tempora tenetur, veritatis voluptatem. A adipisci, animi, aspernatur assumenda autem cupiditate doloremque ducimus, eveniet fugiat illo iure nemo nobis officiis praesentium recusandae reprehenderit suscipit vel velit voluptate voluptatibus? Alias atque exercitationem fugit ipsum itaque laudantium natus quasi ratione reiciendis sed? A exercitationem fuga inventore voluptatibus.
            </div>
            <div class="mx-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolores ipsa molestiae reiciendis, rem vitae. Deleniti doloribus officia temporibus veritatis voluptatem? Culpa deleniti earum eveniet incidunt iure maiores minus porro! Aperiam error et eveniet mollitia necessitatibus nemo quasi sint, voluptate. Ad alias at ea laudantium maiores modi nesciunt odit officiis omnis provident repellat, reprehenderit sunt! Aliquid aut beatae deserunt facere, facilis iure neque nisi, non nostrum, nulla obcaecati omnis possimus quae quibusdam recusandae vitae voluptas. Architecto autem corporis cumque debitis ducimus earum eius est et facere ipsum iure iusto laudantium libero maxime nam nihil nobis numquam odit officiis pariatur, quo ratione rem sapiente similique sint? Aperiam beatae corporis dolorem doloremque doloribus dolorum eius eveniet harum hic, in, iusto laudantium neque nostrum numquam perspiciatis placeat porro provident quae quaerat quis repellendus saepe, sed suscipit tempora tenetur velit voluptas. Ea facere incidunt ipsa magni molestias odio quos sed veniam, voluptatum? Accusamus accusantium cupiditate labore molestias mollitia quos sapiente suscipit. Aliquid asperiores at autem beatae commodi consequuntur cum debitis deserunt doloribus ducimus ea eius exercitationem explicabo fugiat id ipsa iure iusto laboriosam magnam maiores mollitia natus nemo nisi non, odio odit officia quas quis quo repellendus sequi suscipit temporibus tenetur? Deserunt, id, voluptas.
            </div>
        </main>
    </body>
</html>

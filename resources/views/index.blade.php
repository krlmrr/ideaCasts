<x-app-layout>
    <!-- region Filters -->
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">
                    Category One
                </option>
                <option value="Category Two">
                    Category Two
                </option>
                <option value="Category Three">
                    Category Three
                </option>
                <option value="Category Four">
                    Category Four
                </option>
                <option value="Category Five">
                    Category Five
                </option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">
                    Filter One
                </option>
                <option value="Filter Two">
                    Filter Two
                </option>
                <option value="Filter Three">
                    Filter Three
                </option>
                <option value="Filter Four">
                    Filter Four
                </option>
                <option value="Filter Five">
                    Filter Five
                </option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an Idea" class="w-full rounded-xl border-none bg-white px-4 py-2 pl-8 placeholder:text-gray-900">

            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div> <!-- endregion -->

    <!-- region  Idea containers -->
    <div class="space-y-6 my-6">
        <!-- region Idea container -->
        <div class="bg-white rounded-xl flex hover:drop-shadow-xl transition duration-150 ease-in cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">
                        21
                    </div>
                    <div class="text-gray-500">
                        Votes
                    </div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold text-xs border border-gray-200 hover:border-gray-400 transition duration-150 ease-in uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop-face&v=1"
                        alt="avatar"
                        class="w-14 h-14 rounded-xl"
                    >
                </a>

                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">
                            A random title can go here
                        </a>
                    </h4>

                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa cum doloremque excepturi harum illum laboriosam, minima molestias omnis perferendis quaerat quis sapiente voluptas. A ab accusamus adipisci, aperiam consequuntur delectus impedit ipsam, ipsum itaque laboriosam maiores neque odio optio, pariatur ratione sequi sit voluptas. Distinctio doloremque excepturi minima officiis quod. Beatae delectus dolores enim est eum, facilis fugiat fugit ipsum, maiores minima officiis quae quam reiciendis tempora veniam veritatis, voluptates? Ab aliquam consequatur, corporis cupiditate dicta dignissimos doloribus ea earum exercitationem id inventore ipsa iure maiores nulla, numquam odio perferendis placeat praesentium quasi quibusdam repellendus rerum sapiente, soluta vitae voluptatem? Deserunt, dolor in laboriosam minus, molestias, nam nihil possimus quaerat qui soluta ullam velit? Aut culpa eius maxime nam nobis, optio quis repellendus similique voluptates! Adipisci consectetur consequatur consequuntur delectus dolor eum ex expedita ipsam ipsum, similique sit, totam veniam voluptate. Accusantium autem consequatur delectus dolorem eaque explicabo illum, incidunt ipsam ipsum laudantium nam provident qui quidem saepe, sapiente sequi sit, tempora tenetur veniam voluptatum? Dolor ipsam, natus officiis porro ratione reiciendis soluta tempora voluptas. Asperiores doloribus enim ipsum labore, quos sed totam. Ad at corporis enim, et exercitationem facilis illo itaque neque quo similique sunt totam voluptatum. Provident!
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <p> 10 hours ago</p>
                            <p> &bull; </p>
                            <p> Category 1 </p>
                            <p> &bull; </p>
                            <p class="text-gray-900"> 3 comments </p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full w-16 h-7 transition duration-150 ease-in py-2 px-4">
                                <svg width="16" height="16" fill="currentColor" class="bi bi-three-dots mx-auto" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul class="absolute w-40 text-left font-semibold ml-8 bg-white shadow-lg rounded-xl py-3">
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                            Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">
                                           Delete Post
                                        </a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- endregion -->
    </div>
    <!-- endregion -->
</x-app-layout>

<header class="max-w-xl mx-auto mt-20 text-center">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Everywhere Laravel</span> News
        </h1>

        <h2 class="inline-flex mt-2">From Laravel For Laravel <img src="/images/lary-head.svg" alt="Head of Lary the mascot"></h2>



        <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
            <!--  Category -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                {{-- category-dropdown --}}
                <x-category-dropdown />
            </div>

            <!-- Other Filters -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                    {{-- <option value="category" disabled selected>Dummy dropdown
                    </option>
                    <option value="foo">Foo
                    </option>
                    <option value="bar">Bar
                    </option> --}}
                </select>

                
            </div>

            <!-- Search -->
            <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                <form method="GET" action="#">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{request('category')}}">
                    @endif
                    <input type="text"
                           name="search"
                           placeholder="Find something"
                           class="bg-transparent placeholder-black font-semibold text-sm"
                           value="{{request('search')}}">
                </form>
            </div>
        </div>
    </header>
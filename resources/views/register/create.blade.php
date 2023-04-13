<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-190">
            <form action="/register" method="POST">
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>

                    <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" required>
                </div>
            </form>
        </main>
        <h1>Register Blade</h1>
    </section>
</x-layout>
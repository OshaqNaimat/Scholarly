<x-layout>
    <div class="container mx-auto px-4">
        <h2 class="text-4xl md:text-7xl text-center text-purple-500 my-10 font-bold">
            Welcome to Scholarly
        </h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-10">
            <div class="w-full md:w-1/2 max-w-md shadow-2xl shadow-zinc-400 rounded-xl p-6 bg-white">
                <div class="text-center mb-6">
                    <h4 class="font-semibold text-3xl md:text-4xl">Sign In</h4>
                </div>
                <form action="#" class="space-y-4">
                    <div
                        class="flex items-center border border-purple-500 rounded-md px-3 hover:ring-1 ring-purple-500 transition">
                        <i class="bi bi-person text-purple-500"></i>
                        <input type="text" placeholder="Username or email"
                            class="outline-0 p-3 w-full bg-transparent">
                    </div>
                    <div
                        class="flex items-center border border-purple-500 rounded-md px-3 hover:ring-1 ring-purple-500 transition">
                        <i class="bi bi-lock text-purple-500"></i>
                        <input type="password" placeholder="Password" class="outline-0 p-3 w-full bg-transparent">
                    </div>
                    <div class="flex justify-end">

                        <a href="/forgotpass" class="text-purple-500 ">
                            Forgot Password?
                        </a>
                    </div>
                    <button
                        class="w-full bg-purple-600 text-white py-3 rounded-md font-semibold hover:bg-purple-700 transition">
                        Login
                    </button>
                </form>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.freepik.com/256/11234/11234543.png?semt=ais_white_label"
                    class="w-48 md:w-80 object-contain" alt="Illustration">
            </div>
        </div>
    </div>
</x-layout>

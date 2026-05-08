<x-layout>
    <x-student-navbar />

    <div class="grid grid-cols-10">
        {{-- Sidebar --}}
        <div class="col-span-2">
            <x-student-sidebar />
        </div>
        <div class="col-span-8 grid grid-cols-8 gap-4 p-4">
            <div class="col-span-2 bg-yellow-100 rounded-lg">
                <div class="card container p-4 lesson-card  rounded-lg">
                    <div class="flex items-center justify-between p-4">
                        <img class="w-15 h-15" src="https://cdn-icons-png.flaticon.com/256/7342/7342013.png"
                            alt="">
                        <img class="w-15 h-15" src="https://cdn-icons-png.flaticon.com/256/10741/10741279.png"
                            alt="">
                    </div>
                    <div class="flex flex-col">
                        <h4 class="text-xl font-bold ">10</h4>
                        <h4 class="text-xl font-bold text-zinc-500">Classes</h4>
                    </div>
                </div>
            </div>

            <div class="col-span-2 bg-pink-400 rounded-lg">
                <div class="card tests-card  p-4 ">
                    <div class="flex items-center justify-between">
                        <img class="w-15 h-15" src="https://www.petrianeditingservice.co.uk/images/paraphrase.png"
                            alt="">
                        <img class="w-15 h-15"
                            src="https://images.freeimages.com/fic/images/icons/2660/finance/256/pie_graph.png"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="col-span-4 text-center shadow-2xl rounded-lg">
                <div class="card tests-card  p-4 ">
                    <div class="flex items-center justify-center">
                        <h4>Latest tasks will appear here </h4>
                    </div>
                </div>
            </div>
            <div class="col-span-4 rounded-md bg-blue-100">
                <div class="card attendence-card bg-blue-100 p-4 h-10 text-center rounded-lg">
                    Attendance and Graph
                </div>
            </div>
        </div>


    </div>
</x-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="kelas" style="display: flex; justify-content: center; width: 100%;">
                   <h1 style="font-size: 1cm; color: #46b4ebs;">XI</h1>
                </div>
                <div class="p-6 text-gray-900 flex justify-evenly flex-wrap"> 
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">RPL</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">ULW</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">BR2</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">BR1</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">BD</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">MP2</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">MP1</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">AKL1</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">AKL2</h1>
                    </div>
                    <div class="bg-[#aef5f2]" style="display: flex; justify-content: center; align-items: center; height: 5cm; width: 8cm; border-radius: 20px; margin-bottom: 50px;">
                        <h1 class="jurusan">AKL3</h1>
                    </div>
                    <?php 
                    // echo round(2 / 36 * 100) . "%";
                    ?>
                    <style>
                        .jurusan{
                            color: white;
                            font-size: 50px;
                        }
                    </style>
                </div> -->
                <h1 class="greeting">Hi, {{ Auth::user()->name }}</h1>
            <style>
                .greeting{
                    padding: 50px;
                }
            </style>
            </div>
        </div>
    </div>
</x-app-layout>

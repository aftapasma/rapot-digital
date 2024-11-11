<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Document</title>
</head>

<body>

    <x-admin.topbar></x-admin.topbar>

    <x-admin.sidebar></x-admin.sidebar>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <x-back></x-back>   
<form>
    <div class="grid gap-4 mb-6 md:grid-cols-2">
        
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih tingkatan</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>pilih tingkatan</option>
            <option value="US">1</option>
            <option value="CA">2</option>
            <option value="FR">3</option>
            <option value="DE">4</option>
            <option value="DE">5</option>
            <option value="DE">6</option>
            </select> 
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor kelas</label>
            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 
            dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="contoh :A, B, dst" required />
        </div>
        
        <div x-data="{ open: false, search: '', selected: 'Pilih wali kelas', options: ['1', '2', '3', '4', '5', '6'] }" class="relative w-full ">
            <label for="class_teacher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wali kelas</label>
        
            <!-- Dropdown Display -->
            <div 
                @click="open = !open" 
                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white focus:ring-4 focus:ring-blue-300 flex justify-between items-center cursor-pointer"
            >
                <span x-text="selected"></span>
                <svg class="w-4 h-4 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        
            <!-- Dropdown Menu -->
            <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 w-full bg-white rounded-lg shadow-lg dark:bg-gray-700">
                <!-- Search Box -->
                <input
                    x-model="search"
                    type="text"
                    placeholder="Cari wali kelas..."
                    class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border-b border-gray-200 rounded-t-lg focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                />
        
                <!-- Filtered Options -->
                <ul class="py-2 max-h-40 overflow-y-auto">
                    <template x-for="option in options.filter(opt => opt.includes(search))" :key="option">
                        <li>
                            <div
                                @click="selected = option; open = false; search = ''"
                                class="block w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 cursor-pointer"
                            >
                                <span x-text="option"></span>
                            </div>
                        </li>
                    </template>
        
                    <!-- No Results -->
                    <li x-show="!options.filter(opt => opt.includes(search)).length" class="px-4 py-2 text-gray-500 dark:text-gray-400">
                        Tidak ada hasil
                    </li>
                </ul>
            </div>
        </div>  
    <div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
    </div>    
</form>

        </div>
    </div>

</body>

</html>

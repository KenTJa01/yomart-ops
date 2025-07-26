<x-app-layout>

    <div class="rounded-lg">

        <div class="bg-white border border-batman-50 rounded-lg p-4 shadow-sm flex flex-col">

            <div class="flex items-center">
                <button id="button_new" data-modal-target="newCreationModal" data-modal-toggle="newCreationModal" type="button"
                    class="flex items-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 focus:outline-none">
                    <img src="{{ asset('svg/plus.svg') }}" class="w-3 h-3 me-2" alt="Plus Icon">
                    Tambah
                </button>
                <span class="text-lg ml-2 font-semibold text-batman-900">Master Profile</span>
            </div>

            <hr class="my-4">


            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="tableData w-full text-sm text-left rtl:text-right text-batman-900" id="tableData">
                    <thead class="text-sm text-white uppercase bg-batman-900">
                        <tr>
                            <th scope="col" class="top_left_tableData px-6 py-5 !pl-[25px] border-t-0 border-l-0">No. </th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Nama Profile</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Deskripsi</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Tipe Profile</th>
                            <th scope="col" class="px-6 py-5 !pl-[25px] border-t-0">Status</th>
                            <th scope="col" class="top_right_tableData border-t-0 border-r-0" style="width: 90px !important;">
                                <img src="{{ asset('svg/action.svg') }}" class="w-5 h-5 m-auto">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="bottom_left_tableData"></th>
                            <th>Nama Profile</th>
                            <th>Deskripsi</th>
                            <th>Tipe Profile</th>
                            <th>Status</th>
                            <th class="bottom_right_tableData"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

    </div>

    <!-- Main modal -->
    <div id="newCreationModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full"></div>


        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Tambah Data Profile
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="newCreationModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex flex-col">
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="select_tipe_profile" class="block text-sm font-medium text-batman-900">Tipe Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <select name="select_tipe_profile" id="select_tipe_profile"
                                    style="width: 100%; height: 38px !important;">
                                    <option value="">Select tipe profile</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Store">Store</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="profile_name" class="block text-sm font-medium text-batman-900">Nama Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="profile_name" name="profile_name" class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama profile" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="description"
                                    class="block text-sm font-medium text-batman-900">Description</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="description" name="description" class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan deskripsi" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="daftar_menu" class="block text-sm font-medium text-batman-900">Daftar Menu</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <div class="w-full h-[150px] p-2 border border-batman-200 rounded-lg overflow-y-auto">

                                    <!-- Tree Root -->
                                    <div id="hs-tree-view-checkbox" role="tree" aria-orientation="vertical" data-hs-tree-view='{  "controlBy": "checkbox", "autoSelectChildren": true }'>

                                        <!-- 1st Level Accordion Group -->
                                        <div data-hs-nested-draggable="">

                                            @foreach($data as $menu)
                                                <div class="hs-accordion hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-1 active" role="treeitem" aria-expanded="true" id="hs-checkbox-tree-heading-{{ Str::slug($menu['menu_name'], '-') }}" data-hs-tree-view-item='{ "value": "{{ Str::slug($menu['menu_name'], '_') }}", "isDir": true }'>

                                                    <!-- Master Data Accordion Heading -->
                                                    <div class="level_1 hs-accordion-heading py-0.5 rounded-md flex items-center gap-x-0.5 w-full hs-tree-view-selected:bg-gray-100 ">
                                                        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " aria-expanded="true" aria-controls="{{ Str::slug($menu['menu_name'], '-') }}">
                                                            <svg class="size-4 text-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14"></path>
                                                                <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="grow hs-tree-view-selected:bg-gray-100  px-1.5 rounded-md cursor-pointer">
                                                            <span class="text-sm text-gray-800 ">
                                                                <label class="flex">
                                                                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" value="{{ Str::slug($menu['menu_name'], '_') }}">
                                                                    <span class="ms-3">{{ $menu['menu_name'] }}</span>
                                                                </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- End Master Data Accordion Heading -->

                                                    <!-- Master Data Collapse -->
                                                    <div id="{{ Str::slug($menu['menu_name'], '-') }}" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="group" aria-labelledby="hs-checkbox-tree-heading-{{ Str::slug($menu['menu_name'], '-') }}">

                                                        <!-- 2nd Level Accordion Group -->
                                                        <div class="ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-500 " data-hs-nested-draggable="">

                                                            @foreach($menu['submenu'] as $submenu)

                                                                <div class="hs-accordion hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-2 active" role="treeitem" aria-expanded="true" id="{{ Str::slug($submenu['submenu_name'], '-') }}-heading-collapse" data-hs-tree-view-item='{ "value": "{{ Str::slug($submenu['submenu_name'], '_') }}", "isDir": true }'>

                                                                    <!-- Master User Accordion Heading -->
                                                                    <div class="level_2 hs-accordion-heading py-0.5 rounded-md flex items-center gap-x-0.5 w-full hs-tree-view-selected:bg-gray-100 ">
                                                                        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" aria-expanded="true" aria-controls="{{ Str::slug($submenu['submenu_name'], '-') }}-collapse">
                                                                            <svg class="size-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                                <path d="M5 12h14"></path>
                                                                                <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                                                            </svg>
                                                                        </button>

                                                                        <div class="grow hs-tree-view-selected:bg-gray-100 px-1.5 rounded-md cursor-pointer">
                                                                            <span class="text-sm text-gray-800 ">
                                                                                <label class="flex">
                                                                                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" value="{{ Str::slug($submenu['submenu_name'], '_') }}">
                                                                                    <span class="ms-3">{{ $submenu['submenu_name'] }}</span>
                                                                                </label>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Master User Accordion Heading -->

                                                                    <!-- Master User Collapse -->
                                                                    <div id="{{ Str::slug($submenu['submenu_name'], '-') }}-collapse" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="group" aria-labelledby="{{ Str::slug($submenu['submenu_name'], '-') }}-heading-collapse">

                                                                        <!-- Master User Accordion Group -->
                                                                        <div class="level_3 ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-300 "data-hs-nested-draggable="">

                                                                            @foreach($submenu['actions'] as $action)
                                                                                <div style="padding-left: 32px;" class="ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 py-0.5 px-1.5 rounded-md hs-tree-view-selected:bg-gray-100 hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-3" role="treeitem" data-hs-tree-view-item='{ "value": "{{ $action['key'] }}", "isDir": false }'>
                                                                                    <span class="text-sm text-gray-800 ">
                                                                                        <label class="flex">
                                                                                            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none " value="{{ $action['key'] }}">
                                                                                            <span class="ms-3">{{ Str::replace('_', ' ', $action['key']) }}</span>
                                                                                        </label>
                                                                                    </span>
                                                                                </div>
                                                                            @endforeach

                                                                        </div>
                                                                        <!-- End Master User Accordion Group -->

                                                                    </div>
                                                                    <!-- End Master User Collapse -->

                                                                </div>

                                                            @endforeach


                                                        </div>
                                                        <!-- 2nd Level Accordion Group -->

                                                    </div>
                                                    <!-- End 1st Level Collapse -->

                                                </div>
                                            @endforeach

                                        </div>
                                        <!-- End 1st Level Accordion Group -->

                                    </div>
                                    <!-- End Tree Root -->

                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="status" class="block text-sm font-medium text-batman-900">Status</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="status" type="checkbox" value="" class="sr-only peer" checked>
                                    <div
                                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_reset_modal" type="button"
                        class="py-2.5 px-5 mr-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Reset</button>
                    <button id="button_submit_modal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <!-- Main modal -->
    <div id="editModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-start items-start w-full h-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <!-- ✅ BACKDROP BLUR -->
        <div class="absolute inset-0 bg-dark/5 backdrop-blur-xs w-full" data-modal-hide="editModal"></div>


        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm ">

                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edit Data Profile
                    </h3>
                    <button type="button" id="button_close_modal_edit"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="editModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex flex-col">
                        <input type="hidden" id="profile_id_edit">
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="select_tipe_profile_edit" class="block text-sm font-medium text-batman-900">Tipe Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <select name="select_tipe_profile_edit" id="select_tipe_profile_edit"
                                    style="width: 100%; height: 38px !important;">
                                    <option value="">Select tipe profile</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="profile_name_edit" class="block text-sm font-medium text-batman-900">Nama Profile</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="profile_name_edit" name="profile_name_edit" class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan nama profile" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="description_edit"
                                    class="block text-sm font-medium text-batman-900">Description</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <input type="text" id="description_edit" name="description_edit" class="bg-gray-50 border border-batman-200 text-batman-900 placeholder-batman-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan deskripsi" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="daftar_menu_edit" class="block text-sm font-medium text-batman-900">Daftar Menu</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <div class="w-full h-[150px] p-2 border border-batman-200 rounded-lg overflow-y-auto">

                                    <!-- Tree Root -->
                                    <div id="hs-tree-view-checkbox-edit" role="tree" aria-orientation="vertical" data-hs-tree-view='{  "controlBy": "checkbox", "autoSelectChildren": true }'>

                                        <!-- 1st Level Accordion Group -->
                                        <div data-hs-nested-draggable="">

                                            @foreach($data as $menu)
                                                <div class="hs-accordion hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-1 active" role="treeitem" aria-expanded="true" id="hs-checkbox-tree-heading-{{ Str::slug($menu['menu_name'], '-') }}-edit" data-hs-tree-view-item='{ "value": "{{ Str::slug($menu['menu_name'], '_') }}", "isDir": true }'>

                                                    <!-- Master Data Accordion Heading -->
                                                    <div class="level_1_edit hs-accordion-heading py-0.5 rounded-md flex items-center gap-x-0.5 w-full hs-tree-view-selected:bg-gray-100 ">
                                                        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none " aria-expanded="true" aria-controls="{{ Str::slug($menu['menu_name'], '-') }}-edit">
                                                            <svg class="size-4 text-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14"></path>
                                                                <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="grow hs-tree-view-selected:bg-gray-100  px-1.5 rounded-md cursor-pointer">
                                                            <span class="text-sm text-gray-800 ">
                                                                <label class="flex">
                                                                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" value="{{ Str::slug($menu['menu_name'], '_') }}">
                                                                    <span class="ms-3">{{ $menu['menu_name'] }}</span>
                                                                </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- End Master Data Accordion Heading -->

                                                    <!-- Master Data Collapse -->
                                                    <div id="{{ Str::slug($menu['menu_name'], '-') }}-edit" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="group" aria-labelledby="hs-checkbox-tree-heading-{{ Str::slug($menu['menu_name'], '-') }}-edit">

                                                        <!-- 2nd Level Accordion Group -->
                                                        <div class="ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-500 " data-hs-nested-draggable="">

                                                            @foreach($menu['submenu'] as $submenu)

                                                                <div class="hs-accordion hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-2 active" role="treeitem" aria-expanded="true" id="{{ Str::slug($submenu['submenu_name'], '-') }}-heading-collapse-edit" data-hs-tree-view-item='{ "value": "{{ Str::slug($submenu['submenu_name'], '_') }}", "isDir": true }'>

                                                                    <!-- Master User Accordion Heading -->
                                                                    <div class="level_2_edit hs-accordion-heading py-0.5 rounded-md flex items-center gap-x-0.5 w-full hs-tree-view-selected:bg-gray-100 ">
                                                                        <button class="hs-accordion-toggle size-6 flex justify-center items-center hover:bg-gray-100 rounded-md focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" aria-expanded="true" aria-controls="{{ Str::slug($submenu['submenu_name'], '-') }}-collapse-edit">
                                                                            <svg class="size-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                                <path d="M5 12h14"></path>
                                                                                <path class="hs-accordion-active:hidden block" d="M12 5v14"></path>
                                                                            </svg>
                                                                        </button>

                                                                        <div class="grow hs-tree-view-selected:bg-gray-100 px-1.5 rounded-md cursor-pointer">
                                                                            <span class="text-sm text-gray-800 ">
                                                                                <label class="flex">
                                                                                    <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none" value="{{ Str::slug($submenu['submenu_name'], '_') }}" id="{{ Str::slug($submenu['submenu_name'], '_') }}">
                                                                                    <span class="ms-3">{{ $submenu['submenu_name'] }}</span>
                                                                                </label>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Master User Accordion Heading -->

                                                                    <!-- Master User Collapse -->
                                                                    <div id="{{ Str::slug($submenu['submenu_name'], '-') }}-collapse-edit" class="{{ Str::slug($submenu['submenu_name'], '-') }} hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="group" aria-labelledby="{{ Str::slug($submenu['submenu_name'], '-') }}-heading-collapse-edit">

                                                                        <!-- Master User Accordion Group -->
                                                                        <div class="level_3_edit ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-300 "data-hs-nested-draggable="">

                                                                            @foreach($submenu['actions'] as $action)
                                                                                <div style="padding-left: 32px;" class="ps-7 relative before:absolute before:top-0 before:start-3 before:w-0.5 before:-ms-px before:h-full before:bg-gray-100 py-0.5 px-1.5 rounded-md hs-tree-view-selected:bg-gray-100 hs-dragged:bg-blue-100 hs-dragged:rounded nested-2-3" role="treeitem" data-hs-tree-view-item='{ "value": "{{ $action['key'] }}", "isDir": false }' id="{{ $action['key'] }}-collapse-edit">
                                                                                    <span class="text-sm text-gray-800 ">
                                                                                        <label class="flex">
                                                                                            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none " value="{{ $action['key'] }}" id="{{ $action['key'] }}">
                                                                                            <span class="ms-3">{{ Str::replace('_', ' ', $action['key']) }}</span>
                                                                                        </label>
                                                                                    </span>
                                                                                </div>
                                                                            @endforeach

                                                                        </div>
                                                                        <!-- End Master User Accordion Group -->

                                                                    </div>
                                                                    <!-- End Master User Collapse -->

                                                                </div>

                                                            @endforeach


                                                        </div>
                                                        <!-- 2nd Level Accordion Group -->

                                                    </div>
                                                    <!-- End 1st Level Collapse -->

                                                </div>
                                            @endforeach

                                        </div>
                                        <!-- End 1st Level Accordion Group -->

                                    </div>
                                    <!-- End Tree Root -->

                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4 flex flex-col items-center mb-2">
                            <div class="col-start-1 col-end-1">
                                <label for="status_edit"
                                    class="block text-sm font-medium text-batman-900">Status</label>
                            </div>
                            <div class="col-span-5 col-end-7">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="status_edit" type="checkbox" value="" class="sr-only peer"
                                        checked>
                                    <div
                                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button id="button_submit_modal_edit" data-modal-hide="editModal" type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Simpan
                    </button>
                </div>

            </div>

        </div>
    </div>

    <button type="button" class="hidden button_edit" title="Edit Site" id="button_edit_modal"
        data-modal-target="editModal" data-modal-toggle="editModal" data-id="'.$row->id.'">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white"
            class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path
                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
        </svg>
    </button>

    <script>
        window.addEventListener('load', () => {
            (function() {
                const draggable = document.querySelectorAll('[data-hs-nested-draggable]');

                draggable.forEach((el) => {
                    const options = {
                        group: 'nested',
                        animation: 150,
                        fallbackOnBody: true,
                        swapThreshold: 0.65,
                        ghostClass: 'dragged',
                        onEnd: (evt) => {
                            const {
                                item
                            } = evt;

                            if (item.classList.contains('hs-accordion')) {
                                let existingInstance = HSAccordion.getInstance(item, true);
                                let updatedInstance;

                                existingInstance.element.update();
                                updatedInstance = HSAccordion.getInstance(item, true);
                                window.$hsAccordionCollection.map((el) => {
                                    if (
                                        el.element.el !== existingInstance.element.el &&
                                        el.element.group === existingInstance.element
                                        .group &&
                                        el.element.el.closest('.hs-accordion-group') &&
                                        el.element.el.classList.contains('active') &&
                                        existingInstance.element.el.classList.contains(
                                            'active')
                                    ) el.element.hide();

                                    return el;
                                });
                            }

                            if (!!item.hasAttribute('data-hs-tree-view-item')) {
                                const treeViewItem = HSTreeView.getInstance(item.closest(
                                    '[data-hs-tree-view]'), true);

                                treeViewItem.element.update();
                            }
                        },
                    };
                    const data = el.getAttribute('data-hs-nested-draggable');
                    const dataOptions = data ? JSON.parse(data) : {};
                    const sortable = new Sortable(el, _.merge(options, dataOptions));
                });
            })();
        });
    </script>

    <script>
        // ========================= GLOBAL SETUP CSRF =========================
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            dataTable();

            $("#select_tipe_profile").select2({
                dropdownParent: $("#newCreationModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });



        });

        // ========================= DATATABLE =========================
        function dataTable() {
            if ($.fn.DataTable.isDataTable('#tableData')) {
                $('#tableData').DataTable().clear().destroy(); // optional jika mau re-init total
            }

            $('#tableData tfoot th').each(function(i) {
                var header_name = $('#tableData thead th').eq($(this).index()).text();
                var title = header_name.toLowerCase().replace(/\s+/g, "_");

                if (i != 0 && i != 5) {
                    $(this).html(
                        `<div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-2 ps-10 font-thin text-sm text-batman-300 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" id="` +
                        title + `_filter" placeholder="` + header_name + `" data-index="` + i + `"/>
                        </div>`
                        // <input type="text" class="bg-gray-50 border border-gray-300 text-batman-300 font-thin text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="' + title + '_filter" placeholder="' + header_name + '" data-index="' + i + '" style="width: 100%"/>'
                    );
                }

            });

            var tableData = $("#tableData").DataTable({
                serverSide: true,
                processing: true,
                paginate: true,
                autoWidth: true,
                searchable: false,
                orderCellsTop: true,
                dom: 'lBrtip',
                bRetrieve: true,
                scrollY: "535px",
                scrollCollapse: true,
                orderCellsTop: true,
                ajax: {
                    type: 'GET',
                    url: `{{ route('get-profile-list-datatable') }}`,
                    data: {},
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'profile_name',
                        name: 'profile_name',
                    },
                    {
                        data: 'description',
                        name: 'description',
                    },
                    {
                        data: 'tipe_profile',
                        name: 'tipe_profile',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: 'text-center',
                    },
                ],
                order: [
                    [0, 'asc']
                ],
                columnDefs: [
                    {
                        className: "dt-center border border-batman-100",
                        targets: [0, 1, 2, 3, 4, 5]
                    },
                ],
                language: {
                    loadingRecords: '&nbsp;',
                    processing: '<div class="spinner" style="z-index: 1;"></div>',
                    zeroRecords: "No data found",
                },
            });

            // Filter event handler
            $(tableData.table().container()).on('keyup', 'tfoot input', function() {
                tableData.column($(this).data('index')).search(this.value).draw();
            });

        }

        $(document).on('click', '#button_reset_modal', function () {
            // Reset input biasa
            $('#select_tipe_profile').val('').trigger('change');
            $('#profile_name').val('');
            $('#description').val('');
            $('#status').prop('checked', true);

            // Reset semua checkbox dengan trigger event 'click' agar sinkronisasi parent-child tetap jalan
            $('#hs-tree-view-checkbox input[type="checkbox"]').each(function () {
                if (this.checked) {
                    this.click(); // trigger click untuk memaksa Preline update internal state
                }
            });

            // Collapse semua accordion
            $('#hs-tree-view-checkbox .hs-accordion-content')
                .removeClass('block')
                .addClass('hidden');

            $('#hs-tree-view-checkbox .hs-accordion')
                .removeClass('active')
                .attr('aria-expanded', 'false');

            $('#hs-tree-view-checkbox .hs-accordion-toggle')
                .attr('aria-expanded', 'false');


            $('#hs-tree-view-checkbox .hs-accordion-content').removeClass('block').addClass('hidden');

            $('#hs-tree-view-checkbox .hs-accordion').removeClass('active').attr('aria-expanded', 'false');

            $('#hs-tree-view-checkbox .hs-accordion-toggle').attr('aria-expanded', 'false');
        });



        $(document).on('click', '#button_new', function () {

            $('#select_tipe_profile').val('').trigger('change');
            $('#profile_name').val('');
            $('#description').val('');
            $('#status').prop('checked', true);

            // Reset input biasa
            $('#select_tipe_profile').val('').trigger('change');
            $('#profile_name').val('');
            $('#description').val('');
            $('#status').prop('checked', true);

            // Reset semua checkbox dengan trigger event 'click' agar sinkronisasi parent-child tetap jalan
            $('#hs-tree-view-checkbox input[type="checkbox"]').each(function () {
                if (this.checked) {
                    this.click(); // trigger click untuk memaksa Preline update internal state
                }
            });

            // Collapse semua accordion
            $('#hs-tree-view-checkbox .hs-accordion-content').removeClass('block').addClass('hidden');

            $('#hs-tree-view-checkbox .hs-accordion').removeClass('active').attr('aria-expanded', 'false');

            $('#hs-tree-view-checkbox .hs-accordion-toggle').attr('aria-expanded', 'false');

        });



        // ========================= SUBMIT NEW DATA =========================
        $(document).on('click', '#button_submit_modal', function(event) {

            var tipe_profile = $("#select_tipe_profile").val();
            var profile_name = $("#profile_name").val();
            var description = $("#description").val();
            var status = document.getElementById('status').checked;

            const checked_level_1 = document.querySelectorAll('.level_1 input[type="checkbox"]:checked');
            const checked_level_2 = document.querySelectorAll('.level_2 input[type="checkbox"]:checked');
            const checked_level_3 = document.querySelectorAll('.level_3 input[type="checkbox"]:checked');

            const values_level_1 = Array.from(checked_level_1).map(cb => cb.value);
            const values_level_2 = Array.from(checked_level_2).map(cb => cb.value);
            const values_level_3 = Array.from(checked_level_3).map(cb => cb.value);

            if ( status == 1 ) {
                var flag = 1;
            } else {
                var flag = 0;
            }

            $.ajax({
                type: 'POST',
                url: "{{ url('/post-new-profile') }}",
                dataType: 'json',
                data: {
                    tipe_profile: tipe_profile,
                    profile_name: profile_name,
                    description: description,
                    data_permission: values_level_3,
                    status: flag,
                },
                success: function(response) {

                    return Swal.fire({
                        title: response.title,
                        text: response.message,
                        timer: 5000,
                        icon: "success",
                        timerProgressBar: true,
                        showConfirmButton: true,
                        confirmButtonColor: "#333333",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                        willClose: () => {
                            if (typeof response.route !== "undefined") {
                                window.location.href = response.route;
                            }
                        },
                    });
                },
                error: function(error) {

                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed submit user request',
                        target: document.getElementById('newCreationModal'),
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                    $("#button_submit_modal").prop('disabled', false);
                },
            });


        });

        $(document).on('click', '.button_edit', function() {

            $("#select_tipe_profile_edit").select2({
                dropdownParent: $("#editModal"),
                placeholder: {
                    id: '-1',
                    textw: 'Select an option'
                },
                multiple: false
            });

            const modalEl = document.getElementById('editModal');

            // Pastikan class Modal dari flowbite tersedia
            if (typeof Modal !== 'undefined') {
                const modal = new Modal(modalEl);
                modal.show();

                $("#select_profile_edit").select2({
                    dropdownParent: $("#editModal"),
                    placeholder: {
                        id: '-1',
                        textw: 'Select an option'
                    },
                    multiple: false
                });

                // Ambil ID dari data-id tombol
                const userId = $(this).data('id');
                console.log('Edit user ID:', userId);
            } else {
                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');
            }
        });

        $(document).on('click', '#button_close_modal_edit', function() {

            const modalEl = document.getElementById('editModal');

            if (typeof Modal !== 'undefined') {
                const modal = new Modal(modalEl);
                modal.hide();
            } else {
                console.error('Flowbite Modal tidak terdeteksi. Pastikan flowbite.min.js sudah dimuat.');
            }

        });

        $(document).on('click', '#button_edit_modal', function() {

            const data_id = $(this).data('id');

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-old-data-of-profile') }}",
                dataType: 'json',
                data: {
                    profile_id: data_id,
                },
                success: function(response) {

                    $('#hs-tree-view-checkbox-edit .hs-accordion-content').removeClass('block').addClass('hidden');
                    $('#hs-tree-view-checkbox-edit .hs-accordion').removeClass('active').attr('aria-expanded', 'false');
                    $('#hs-tree-view-checkbox-edit .hs-accordion-toggle').attr('aria-expanded', 'false');

                    $("#profile_id_edit").val(response.id);

                    $("#select_tipe_profile_edit").html(`<option value="">Select tipe profile</option>`);

                    if ( response.tipe_profile == "legal" ) {
                        $("#select_tipe_profile_edit").append(`
                            <option value="Legal" selected>Legal</option>
                            <option value="Store">Store</option>
                        `);
                    } else if ( response.tipe_profile == "store" ) {
                        $("#select_tipe_profile_edit").append(`
                            <option value="Legal">Legal</option>
                            <option value="Store" selected>Store</option>
                        `);
                    } else {
                        $("#select_tipe_profile_edit").append(`
                            <option value="Legal">Legal</option>
                            <option value="Store">Store</option>
                        `);
                    }

                    $("#profile_name_edit").val(response.profile_name);
                    $("#description_edit").val(response.description);

                    if ( response.flag == 1 ) {
                        $("#status_edit").attr('checked', true);
                    } else if ( response.flag == 0 ) {
                        $("#status_edit").attr('checked', false);
                    }



                    getProfilePermissionById(response.id);

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of vendor',
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                },
            });

        });

        function getProfilePermissionById(profile_id) {

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-profile-permission-by-id') }}",
                dataType: 'json',
                data: {
                    profile_id: profile_id
                },
                success: function(response) {

                    getAllDataPermission(response);

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of profile',
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                },
            });

        }

        function getAllDataPermission(data) {

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-all-data-permission') }}",
                dataType: 'json',
                data: {},
                success: function(response) {

                    $.each(response,function(key, value)
                    {

                        if ( data.includes(value.id) ) {
                            document.getElementById(value.key).checked = true;
                            $("#" + value.key + "-collapse-edit").addClass("selected");
                        }

                        getProfileMenuById(response.id);

                    });

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of profile',
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                },
            });

        }

        function getProfileMenuById(profile_id) {

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-profile-menu-by-id') }}",
                dataType: 'json',
                data: {
                    profile_id: profile_id
                },
                success: function(response) {

                    getAllDataSubMenu(response)

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of profile',
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                },
            });

        }

        function getAllDataSubMenu(data) {

            $.ajax({
                type: 'GET',
                url: "{{ url('/get-all-data-sub-menu') }}",
                dataType: 'json',
                data: {},
                success: function(response) {

                    $.each(response,function(key, value)
                    {

                        const label = value.submenu_name;
                        const result = label.toLowerCase().replace(/\s+/g, '_');
                        const parentCheckbox = document.getElementById(result);
                        const allChildren = document.querySelectorAll('#'+ result +'-collapse-edit .level_3_edit input[type="checkbox"]').length;
                        const checkedChildren = document.querySelectorAll('#'+ result +'-collapse-edit .level_3_edit input[type="checkbox"]:checked').length;
                        console.log(allChildren);
                        console.log(checkedChildren);
                        console.log("==============");



                        if (checkedChildren === 0) {
                            parentCheckbox.checked = false;
                            parentCheckbox.indeterminate = false;
                        } else if (checkedChildren === allChildren) {
                            parentCheckbox.checked = true;
                            parentCheckbox.indeterminate = false;
                        } else {
                            parentCheckbox.checked = false;
                            parentCheckbox.indeterminate = true;
                        }

                        // if ( data.includes(value.id) ) {
                        //     const label = value.submenu_name;
                        //     const result = label.toLowerCase().replace(/\s+/g, '_');
                        //     console.log(result);

                        //     document.getElementById(result).indeterminate = true;
                        //     $("#" + result + "-heading-collapse-edit").addClass("selected");
                        // }

                    });

                },
                error: function(error) {
                    console.log(error.responseJSON);
                    Swal.fire({
                        icon: 'error',
                        title: "Error",
                        text: error.responseJSON.message ?? 'Failed get list of profile',
                        showConfirmButton: true,
                        confirmButtonColor: "#c1141b",
                        customClass: {
                            confirmButton: 'custom-confirm-button-swal'
                        },
                    });
                },
            });

        }

    </script>

</x-app-layout>

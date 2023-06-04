<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form name="formAdd" id="formAdd" enctype="multipart/form-data" method="post" action="/companies">
                        @csrf
                      <div class="space-y-12">

                        <div class="border-b border-gray-900/10 pb-12">
                          <h2 class="text-base font-semibold leading-7 text-gray-900">Write Information</h2>
                          
                          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                              <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('name')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            <br>

                            <div class="sm:col-span-3">
                              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                              <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('email')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror

                            <div class="col-span-full">
                              <label for="logo" class="block text-sm font-medium leading-6 text-gray-900">Logo</label>
                              <input type="file" name="logo" id="logo" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            </div>
                            @error('logo')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror

                            <div class="sm:col-span-3">
                              <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Webite</label>
                              <div class="mt-2">
                                <input type="text" name="website" id="website" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('website')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            

                            
                          </div>
                        </div>
                      </div>

                      <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/companies" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

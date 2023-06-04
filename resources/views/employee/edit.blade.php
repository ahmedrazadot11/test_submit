<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form name="formEdit" id="formEdit" enctype="multipart/form-data" method="post" action="/employees/{{ $employee->id }}">
                        @csrf
                        {{ method_field('put') }}
                      <div class="space-y-12">

                        <div class="border-b border-gray-900/10 pb-12">
                          <h2 class="text-base font-semibold leading-7 text-gray-900">Write Information</h2>
                          
                          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                              <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                              <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" value="{{$employee->first_name}}" autocomplete="first_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('first_name')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            <br>

                            <div class="sm:col-span-3">
                              <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                              <div class="mt-2">
                                <input id="last_name" name="last_name" value="{{$employee->last_name}}" type="last_name" autocomplete="last_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('last_name')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            <br>

                            <div class="sm:col-span-3">
                                <label for="company_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                                <select id="company_id" name="company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option selected>Choose a company</option>
                                  @foreach($companies as $company)
                                    <option value="{{ $company->id }}" {{ ($company->id == $employee->company_id) ? 'selected' : ''; }} >{{ $company->name }}</option>
                                  @endforeach
                                </select>

                            </div>
                            @error('company_id')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            <br>

                            <div class="sm:col-span-3">
                              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                              <div class="mt-2">
                                <input id="email" name="email" type="email" value="{{$employee->email}}" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('email')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            <br>


                            <div class="sm:col-span-3">
                              <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                              <div class="mt-2">
                                <input type="text" name="phone" id="phone" value="{{$employee->phone}}" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>
                            @error('phone')
                                <span class="sm:col-span-5 font-semibold text-red-700 mm20">{{ $message }}</span> 
                            @enderror
                            

                            
                          </div>
                        </div>
                      </div>

                      <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/employees" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/companies/create" class="text-blue-300 font-semibold float-right">Add</a>
                    <table class="table-fixed mx-auto">
                      @if(count($companies) > 0)
                      <thead>
                        <tr>
                          <th width="10%">name</th>
                          <th width="20%">email</th>
                          <th width="20%">logo</th>
                          <th width="20%">website</th>
                          <th width="20%">action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($companies as $company)
                        <tr class="text-center">
                          <td class="my-4">{{ $company->name }}</td>
                          <td>{{ $company->email }}</td>
                          <td>    
                            @if (file_exists(storage_path().'/app/public/'.$company->logo))                        
                            <img 
                                src="/storage/{{ $company->logo }}" 
                                width="70" 
                                class="mx-auto max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800 my-4" 
                            ></td>
                            @else
                            <img 
                                src="/assets/images/image-not-found.png" 
                                width="70" 
                                class="mx-auto max-w-sm rounded border bg-white p-1 dark:border-neutral-700 dark:bg-neutral-800 my-4"
                             >
                            </td>
                            @endif
                          <td> {{ $company->website }}</td>
                          <td><a href="/companies/{{$company->id}}/edit" class="text-blue-400 font-semibold inline">edit</a> | 
                            <form method="post" action="/companies/{{$company->id}}" class="inline">
                                @csrf
                                {{ method_field('delete') }}
                                <button type="submit" class="text-red-400 font-semibold">delete</button>
                                
                            </form>
                        </tr>
                        @endforeach
                        
                      </tbody>

                      @else
                      <div class="text-center py-4 lg:px-4">
                          <div class="p-2 px-4 bg-red-300 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            
                            <span class="font-semibold mr-2 text-left flex-auto">Sorry! No Record Found...</span>
                          </div>
                        </div>
                      @endif
                      
                    </table>
                </div>
                <div class="p-6 text-gray-900">
                    {{ $companies->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/employees/create" class="text-blue-300 font-semibold float-right">Add</a>
                    <table class="table-fixed mx-auto">
                      @if(count($employees) > 0)
                      <thead>
                        <tr>
                          <th width="10%" class="my-4">First Name</th>
                          <th width="20%">Last Name</th>
                          <th width="20%">Company</th>
                          <th width="20%">Email</th>
                          <th width="20%">Phone</th>
                          <th width="20%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($employees as $employee)
                        <tr class="text-center">
                          <td class="my-4">{{ $employee->first_name }}</td>
                          <td>{{ $employee->last_name }}</td>
                            
                          <td> {{ $employee->company['name'] }}</td>
                          <td> {{ $employee->email }}</td>
                          <td> {{ $employee->phone }}</td>
                          <td><a href="/employees/{{$employee->id}}/edit" class="text-blue-400 font-semibold inline">edit</a> | 
                            <form method="post" action="/employees/{{$employee->id}}" class="inline my-4">
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
                    {{ $employees->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

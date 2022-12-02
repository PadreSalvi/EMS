@extends('layouts.app')
@section('content')

<div class="w-full block mt-8 roles-permissions">
            <h2 class="text-gray-700 uppercase font-bold">Summary</h2>
        </div>
<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-success text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-white uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($parents)) }}</span>
                <span class="leading-tight">Employee</span>
            </h3>
        </div>
        <div class="w-full bg-primary text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-white uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($teachers)) }}</span>
                <span class="leading-tight">Teachers</span>
            </h3>
        </div>
        
            <div class="w-full block mt-8 roles-permissions">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-gray-700 uppercase font-bold">Current Users</h2>
                    </div>

                </div>
                <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
                    <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                        <div class="w-2/12 px-3 py-3">Name</div>
                        <div class="w-4/12 px-3 py-3">Email</div>
                        <div class="w-2/12 px-3 py-3">Role</div>
                        <div class="w-2/12 px-3 py-3">Date Created</div>
                        <div class="w-2/12 px-3 py-3">Date Modified</div>
                    </div>
                    @foreach ($users as $user)
                        <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                            <div class="w-2/12 px-3 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $user->name }}</div>
                            <div class="w-4/12 px-3 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $user->email }}
                            </div>
                            <div class="w-2/12 px-3 py-3 flex flex-wrap">
                                @foreach ($user->roles as $role)
                                    <span class="bg-gray-200 text-xs font-semibold text-gray-600 tracking-tight px-2 py-3 border rounded-full">{{ $role->name }}</span>
                                @endforeach
                            </div>
                            <div class="w-2/12 px-3 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $user->created_at }}</div>
                            <div class="w-2/12 px-3 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $user->updated_at }}</div>
                            {{-- <div class="w-2/12 flex justify-end px-3">
                                <a href="{{ route('assignrole.edit',$user->id) }}">
                                    <svg class="h-6 w-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
                                </a>
                            </div> --}}
                        </div>
                    @endforeach
                </div>
                <div class="mt-8">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
        @endsection




{{--         
    </div>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text gray-700 uppercase bg-black">
                <tr>
                    
                    <th scope="col" class="px-3 py-6">Name</th>
             
                    <th scope="col" class="px-3 py-6">Email</th>
              
                    <th scope="col" class="px-3 py-6">Role</th>
    
                    <th scope="col" class="px-3 py-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-gray-800 border-b">
                <td class="px-4 py-6">{{ $user->name }}</td>
                <td class="px-4 py-6">{{ $user->email }}</td>
                @foreach ($user->roles as $role)
                <td class="px-4 py-6">{{ $role->name }}</td>
                @endforeach
                <td class="px-4 py-6">{{ route('assignrole.edit',$user->id) }}
                    <svg class="h-6 w-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg></td>
                @endforeach
                </tr>
            </tbody>
        </table> --}}


@extends('welcome')
@section('title', 'Register page')
@section('content')
    <div class="flex items-center  justify-center min-h-screen p-6 w-full bg-gray-100">
        <div class=" pt-3 w-[400px] justify-center max-w-4xl mx-auto overflow-hidden  rounded-lg shadow-xl">
            <div class="flex w-full h-full flex-col">
                
                <div class="flex items-center justify-center p-6">
                    <div class="w-full">
                        <h1 class="mb-4 text-2xl font-semibold text-gray-700">Create Account</h1>
                        <form action="{{route('registerUser')}}" method="POST">
                           @csrf
                            <div class="mb-4">
                                <label class="block text-sm">
                                    <span class="text-gray-700">Name</span>
                                    <input type="text" value="{{old('name')}}" name="name" class="flex h-10 w-full rounded-md border bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50 @error('name') border-red-400 @enderror" placeholder="Name">
                                </label>
                                <span class="text-red-400 text-sm">
                                    @error('name')
                                    {{$message}}
                                   @enderror
                                </span>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm">
                                    <span class="text-gray-700">Email</span>
                                    <input type="email" value="{{old('email')}}" name="email" class="flex h-10 w-full rounded-md border  bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50 @error('name') border-red-400 @enderror " placeholder="Email">
                                </label>
                                <span class="text-red-400 text-sm">
                                    @error('email')
                                    {{$message}}
                                   @enderror
                                </span>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm">
                                    <span class="text-gray-700">Password</span>
                                    <input type="password" name="password" class="flex h-10 w-full rounded-md border  bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50 @error('name') border-red-400 @enderror" placeholder="Password">
                                </label>
                                <span class="text-red-400 text-sm">
                                    @error('password')
                                    {{$message}}
                                   @enderror
                                </span>
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm">
                                    <span class="text-gray-700">Confirm Password</span>
                                    <input type="password" name="password_confirmation" class="flex h-10 w-full rounded-md border bg-transparent px-3 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50 " placeholder="Password">
                                </label>
                               
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm">
                                    <span class="text-gray-700">Register As</span>
                                    <div class="relative">
                                        <select name="role" value="{{old('role')}}" class="flex h-10 w-full rounded-md border  bg-transparent pl-3 pr-5 py-2 text-sm placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50 text-gray-400 ">
                                            <option value="user">User</option>
                                            <option value="student">Student</option>
                                            <option value="teacher">Teacher</option>
                                            <option value="parent">Parent</option>
                                        </select>
                                    </div>
                                </label>
                               
                            </div>
                           
                            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">Register</button>
                        </form>
                        <hr class="my-8">
                        <p class="mt-4">
                            <a href="{{route('login')}}" class="text-sm font-medium text-indigo-600 hover:underline">
                                Already have an account? Login
                            </a>
                        </p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection

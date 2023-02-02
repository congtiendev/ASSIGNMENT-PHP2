@extends('dashboard.base')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="block my-5 text-lg font-semibold text-gray-600 uppercase dark:text-gray-300">
                Update account
            </h2>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <form class="w-full" action="./store-update-account?id={{$user->user_id}}" method="post"
                          enctype="multipart/form-data">
                        <div class="grid grid-cols-2 gap-3 sm:gap-5 list__form-group">
                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">Full name</label>
                                <input value="{{$user->full_name}}" type="text" name="full_name" id="full_name" required
                                       class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg" placeholder="Full name..." />
                                <span class="hidden mt-1 text-xs text-red-500">
                                    Name is required
                                </span>
                            </div>

                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">User name</label>
                                <input value="{{$user->user_name}}" type="text" name="user_name" id="user_name" required
                                       class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg" placeholder="User name..." />
                                <span class="hidden mt-1 text-xs text-red-500">
                                    User name is required
                                </span>
                            </div>

                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">Email</label>
                                <input value="{{$user->email}}" type="email" name="email" id="email" required
                                       class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg" placeholder="Email..." />
                                <span class="hidden mt-1 text-xs text-red-500">
                                    Email is required</span>
                            </div>

                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">Phone number</label>
                                <input value="{{$user->phone}}" type="text" name="phone" id="phone" required
                                       class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg" placeholder="Phone number..." />
                                <span class="hidden mt-1 text-xs text-red-500">
                                    Phone number is required</span>
                            </div>
                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">Birth year</label>
                                <input value="{{$user->birth_year}}" type="date" name="birth_year" id="birthyear"
                                       required
                                       class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg" placeholder="Birth year..." />
                                <span class="hidden mt-1 text-xs text-red-500">
                                    Birth year is required</span>
                            </div>
                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">Address</label>
                                <input value="{{$user->address}}" type="text" name="address" id="address" required
                                       class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg" placeholder="Address..." />
                                <span class="hidden mt-1 text-xs text-red-500">
                                    Address is required</span>
                            </div>

                            <div class="flex flex-col form__group">
                                <label class="text-sm text-gray-700">Avatar</label>
                                <input value="" type="file" name="avatar" id="avatar"
                                       class="p-2 mt-1 text-xs bg-gray-100 border rounded-lg" placeholder="Avatar..." />
                                <span class="text-xs text-gray-500">{{$user->avatar}}</span>
                            </div>

                            <div class="flex flex-col form__group">
                                <label for="role" class="text-sm text-gray-700">Role</label>
                                <select name="role" id="role"
                                        class="p-2 mt-1 text-sm bg-gray-100 border rounded-lg">
                                    <option value="1" {{$user->role == 1 ? 'selected' : ''}}>Admin</option>
                                    <option value="2" {{$user->role == 2 ? 'selected' : ''}}>User</option>
                                </select>
                                <span class="hidden mt-1 text-xs text-red-500">
                                    Role is required</span>
                            </div>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button type="submit" name="save"
                                    class="w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg sm:w-24 active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    </div>
@endsection

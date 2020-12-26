<div>
    <div class="md:grid md:grid-cols-5 md:gap-6 mt-3">

        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h1 class="text-2xl font-semibold text-gray-900">Profile</h1>
            </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-4">

            <form wire:submit.prevent="save" action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">
                                    Username
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input wire:model="username" type="text" name="username" id="username" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300 @error('username') border-red-500 @enderror">
                                </div>
                                @error('username')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                About
                            </label>
                            <div class="mt-1">
                                <textarea wire:model="about" id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md @error('about') border-red-500 @enderror"></textarea>
                            </div>
                            @error('about')<div class="text-red-600 text-sm mt-1">{{ $message }}</div>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">
                                Photo
                            </label>
                            <div class="mt-2 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <button type="button"
                                    class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Change
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="space-x-3 flex justify-end items-center px-4 py-3">

                        <span>
                            @if(session()->has('notify-saved'))
                            <span class="inline-flex text-green-600"
                                x-data="{open: true}"
                                x-init="
                                    setTimeout( () => {open: false}, 2500 );
                                    setTimeout( () => {$refs.this.remove()}, 3500 );
                                "
                                x-show="open"
                                x-show.transition.duration.1000ms="open"
                                x-ref="this"
                            >
                                Saved!
                            </span>
                            @endif
                        </span>

                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="reset"
                                class="inline-flex justify-center py-2 px-4 border border-transparent border-gray-300 text-gray-700 shadow-sm text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                                Cancel
                            </button>
                        </span>

                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </span>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

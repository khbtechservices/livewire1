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

                        <div>

                            <x-input.group label="Username" for="username" :error="$errors->first('username')">

                                <x-input.text wire:model="username" id="username" name="username" />

                            </x-input.group>

                        </div>

                        <div>

                            <x-input.group label="About" for="about" help-text="A sentence or two about yourself (max 120 chars)." :error="$errors->first('about')">

                                <x-input.textarea wire:model="about" id="about" name="about" />

                            </x-input.group>

                        </div>

                        <div>

                            <x-input.group label="Photo" for="photo">

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
                                
                            </x-input.group>

                        </div>

                    </div>

                    <div class="space-x-3 flex justify-end items-center px-4 py-3">

                        <span>
                            <span class="inline-flex text-green-600"
                                x-data="{open: false}"
                                x-init="
                                    @this.on('notify-saved', () => {
                                        setTimeout( () => {open = false}, 2500 );
                                        open = true;
                                    });
                                "
                                x-show.transition.out.duration.1000ms="open"
                                x-ref="this"
                                style="display: none"
                            >Saved!</span>
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

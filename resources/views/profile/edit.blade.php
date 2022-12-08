<x-app-layout>


    <div class="card w-98 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Profile Information</h2>
            <p>Update your account's profile information and email address. </p>
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>

        </div>
    </div>

    <div class="card w-98 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">{{ __('Update Password') }}</h2>
            <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>

        </div>
    </div>


    <div class="card w-98 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title"> {{ __('Delete Account') }}</h2>
            <p> {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
            </p>
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>

    <div class="card w-98 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title"> {{ __('Theme Settings') }}</h2>
            <div class="form-control">
                <select class="select select-bordered w-full max-w-xs"  data-choose-theme x-data="{
                themes:['light', 'dark', 'cupcake', 'bumblebee', 'emerald', 'corporate', 'synthwave', 'retro', 'cyberpunk', 'valentine', 'halloween', 'garden', 'forest', 'aqua', 'lofi', 'pastel', 'fantasy', 'wireframe', 'black', 'luxury', 'dracula', 'cmyk', 'autumn', 'business', 'acid', 'lemonade', 'night', 'coffee', 'winter']}"

                >
                    <template x-for="theme in themes">
                        <option :value="theme"  x-text="theme">  </option>
                    </template>
                </select>
            </div>
        </div>
    </div>


</x-app-layout>

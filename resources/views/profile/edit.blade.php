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


</x-app-layout>

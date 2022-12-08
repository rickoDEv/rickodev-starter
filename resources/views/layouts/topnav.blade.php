
<div class="sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-90 backdrop-blur transition-all duration-100
  bg-base-100 text-base-content shadow-sm">
    <div class="navbar bg-base-100">
        <div class="navbar-start lg:hidden">
            <label tabindex="0" class="btn btn-ghost btn-circle " for="my-drawer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h7"/>
                </svg>
            </label>
        </div>
        <div class="navbar-start hidden md:flex">
            <div class="form-control">
                <input type="text" placeholder="Search" class="input w-full max-w-xs rounded-lg input-bordered"/>
            </div>
        </div>
        <div class="navbar-center">

        </div>
        <div class="navbar-end">

            @livewire('notifications')

            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://placeimg.com/80/80/people"/>
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a href="{{route('profile.edit')}}" class="justify-between">
                            Profile
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}"
                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

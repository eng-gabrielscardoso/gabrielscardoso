<div class="navbar bg-base-100 shadow-md">
    <div class="navbar-start">
        <div class="dropdown">
            <button role="button" class="btn btn-ghost btn-circle cursor-pointer">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <a href="/about" wire:navigate>About</a>
                </li>
                <li>
                    <a href="/projects" wire:navigate>Projects</a>
                </li>
                <li>
                    <a href="/contact" wire:navigate>Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a href="/" class="btn btn-ghost text-xl" wire:navigate>{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <a href="https://github.com/eng-gabrielscardoso/gabrielscardoso" target="_blank" rel="noopener noreferrer"
            class="btn btn-ghost btn-circle">
            <i class="fa-brands fa-github fa-2xl"></i>
        </a>
    </div>
</div>

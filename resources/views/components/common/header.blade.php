<div class="fixed z-50 shadow-md navbar bg-base-100 rounded-b-md">
    <div class="navbar-start">
        <div class="dropdown">
            <button role="button" class="cursor-pointer btn btn-ghost btn-circle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul tabindex="0" class="p-2 mt-3 shadow-sm menu menu-sm dropdown-content z-1 bg-base-100 rounded-box w-52">
                <li>
                    <a href="/about" wire:navigate>
                        <i class="fa-solid fa-circle-info"></i> About
                    </a>
                </li>
                <li>
                    <a href="/contact" wire:navigate>
                        <i class="fa-solid fa-phone"></i> Contact
                    </a>
                </li>
                <li>
                    <a href="/projects" wire:navigate>
                        <i class="fa-solid fa-diagram-project"></i> Projects
                    </a>
                </li>
                <li>
                    <a href="https://docs.google.com/document/d/1EvVSbMeTdvUtCpKST2wvGxHHWQGqKc-jENxbGqKA1j4"
                        target="_blank">
                        <i class="fa-regular fa-file"></i> Cover letter
                    </a>
                </li>
                <li>
                    <a href="https://docs.google.com/document/d/1k-huyj7Ao5NEy0reBUe9AI8PXiiT-w4Z5NsdiJkEIrg"
                        target="_blank">
                        <i class="fa-regular fa-address-card"></i> Curriculum vitae
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a href="/" class="text-xl btn btn-ghost" wire:navigate>{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <a href="https://github.com/eng-gabrielscardoso/gabrielscardoso" target="_blank" rel="noopener noreferrer"
            class="btn btn-ghost btn-circle">
            <i class="fa-brands fa-github fa-2xl"></i>
        </a>
    </div>
</div>

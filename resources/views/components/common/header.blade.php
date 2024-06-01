<header class="absolute top-0 w-full flex justify-between items-center bg-base-200 ">
    <nav class="navbar">
        <div class="flex-1">
        <a href="/" wire:navigate class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </nav>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
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
</header>

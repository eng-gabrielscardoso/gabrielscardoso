<div class="flex flex-col items-center">
    <div
        class="relative flex items-center justify-center w-full h-full min-h-screen gap-4 p-4 bg-center bg-cover bg-home-hero">
        <div class="w-full mt-20 shadow-xl card lg:w-1/2 bg-base-100">
            <div class="items-center card-body">
                <h2 class="card-title">Contact Me</h2>
                <p>Have a sugestion, issue or simply want to send a message? Just fill above and let's chat!</p>
                <div class="flex flex-col-reverse items-center justify-center w-full h-full gap-2 md:flex-row">
                    <div class="flex flex-col items-center justify-center w-full gap-4 md:w-1/2">
                        <span>Do a rapid contact using one of my social medias:</span>
                        <a href="https://www.linkedin.com/in/eng-gabrielscardoso/" target="_blank"
                            class="text-decoration-none">
                            <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"
                                alt="Linkedin" title="LinkedIn">
                        </a>
                        <a href="https://github.com/eng-gabrielscardoso" target="_blank" class="text-decoration-none">
                            <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"
                                alt="Github" title="Github">
                        </a>
                        <a href="https://discord.com/channels/@eng.gabrielscardoso" target="_blank"
                            class="text-decoration-none">
                            <img src="https://img.shields.io/badge/Discord-7289DA?style=for-the-badge&logo=discord&logoColor=white"
                                alt="Discord" title="Discord">
                        </a>
                        <a href="https://docs.google.com/document/d/1k-huyj7Ao5NEy0reBUe9AI8PXiiT-w4Z5NsdiJkEIrg"
                            target="_blank" style="text-decoration:none;underline:none;">
                            <img src="https://img.shields.io/badge/Resume-Click%20here-2684fc?style=for-the-badge&link=https://docs.google.com/document/d/1k-huyj7Ao5NEy0reBUe9AI8PXiiT-w4Z5NsdiJkEIrg"
                                alt="Curriculum vitae" title="Curriculum vitae">
                        </a>
                    </div>
                    <div class="divider md:divider-horizontal">Or</div>
                    <form wire:submit="sendMessage" class="flex flex-col items-center w-full gap-4 md:w-1/2">
                        <div class="w-full">
                            <label class="flex items-center w-full gap-2 input input-bordered">
                                <i class="fa-solid fa-signature"></i>
                                <input type="text" required class="grow" placeholder="Name" wire:model="name" />
                            </label>
                            @error('name')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="flex items-center w-full gap-2 input input-bordered">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" required class="grow" placeholder="Email" wire:model="email" />
                            </label>
                            @error('email')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="flex items-center w-full gap-2 input input-bordered">
                                <i class="fa-solid fa-quote-left"></i>
                                <input type="text" required class="grow" placeholder="Subject" wire:model="subject" />
                            </label>
                            @error('subject')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="justify-center w-full">
                            <label class="form-control">
                                <textarea class="w-full h-24 textarea textarea-bordered" placeholder="Write your thoughts..."
                                    wire:model="message"></textarea>
                            </label>
                            @error('message')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <button type="submit" autofocus class="w-full btn btn-primary">
                                <div wire:loading.remove>
                                    <i class="fa-regular fa-paper-plane"></i>
                                    <span>Send message!</span>
                                </div>
                                <div wire:loading>
                                    <i class="fa-solid fa-spinner animate-spin"></i>
                                    <span>Sending</span>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

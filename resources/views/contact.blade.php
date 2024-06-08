<div class="flex flex-col items-center">
    <div class="relative p-4 h-full min-h-screen w-full flex items-center justify-center gap-4 bg-home-hero bg-cover bg-center">
        <div class="card w-full lg:w-1/2 bg-base-100 shadow-xl mt-20">
            <div class="card-body items-center">
                <h2 class="card-title">Contact Me</h2>
                <p>Have a sugestion, issue or simply want to send a message? Just fill above and let's chat!</p>
                <div class="h-full w-full flex flex-col-reverse md:flex-row justify-center items-center gap-2">
                    <div class="w-full md:w-1/2 flex flex-col justify-center items-center gap-4">
                        <span>Do a rapid contact using one of my social medias:</span>
                        <a href="https://github.com/eng-gabrielscardoso" target="_blank" class="text-decoration-none">
                            <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"
                                alt="Github" title="Github">
                        </a>
                        <a href="https://discord.com/channels/@eng.gabrielscardoso" target="_blank"
                            class="text-decoration-none">
                            <img src="https://img.shields.io/badge/Discord-7289DA?style=for-the-badge&logo=discord&logoColor=white"
                                alt="Discord" title="Discord">
                        </a>
                        <a href="https://www.linkedin.com/in/eng-gabrielscardoso/" target="_blank"
                            class="text-decoration-none">
                            <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"
                                alt="Linkedin" title="LinkedIn">
                        </a>
                        <a href="https://www.instagram.com/eng.gabrielscardoso" target="_blank"
                            class="text-decoration-none">
                            <img src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white"
                                alt="Instagram" title="Instagram">
                        </a>
                    </div>
                    <div class="divider md:divider-horizontal">Or</div>
                    <form wire:submit="sendMessage" class="w-full md:w-1/2 flex flex-col gap-4 items-center">
                        <div class="w-full">
                            <label class="input input-bordered flex items-center gap-2">
                                <i class="fa-solid fa-signature"></i>
                                <input type="text" required class="grow" placeholder="Name" wire:model="name" />
                            </label>
                            @error('name')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="input input-bordered flex items-center gap-2">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" required class="grow" placeholder="Email" wire:model="email" />
                            </label>
                            @error('email')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="input input-bordered flex items-center gap-2">
                                <i class="fa-solid fa-quote-left"></i>
                                <input type="text" required class="grow" placeholder="Subject"
                                    wire:model="subject" />
                            </label>
                            @error('subject')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-full">
                            <label class="form-control">
                                <textarea class="textarea textarea-bordered h-24" placeholder="Write your thoughts..." wire:model="message"></textarea>
                            </label>
                            @error('message')
                                <span class="text-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="card-actions justify-center">
                            <button type="submit" autofocus class="btn btn-primary">
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

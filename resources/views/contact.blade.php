<div class="flex flex-col items-center">
    <div class="relative p-4 h-full min-h-screen w-full flex items-center justify-center gap-4 bg-home-hero bg-cover bg-center">
        <div class="card w-full md:w-1/3 bg-base-100 shadow-xl">
            <div class="card-body items-center">
                <h2 class="card-title">Contact Me</h2>
                <p>Have a sugestion, issue or simply want to send a message? Just fill above and let's chat!</p>
                <form wire:submit.prevent="sendMessage" class="w-full flex flex-col gap-2 items-center">
                    <div class="w-full">
                        <label class="input input-bordered flex items-center gap-2">
                            <i class="fa-solid fa-signature"></i>
                            <input type="text" required class="grow" placeholder="Name" wire:model="name" />
                        </label>
                        @error('name') <span class="text-sm text-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <label class="input input-bordered flex items-center gap-2">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="email" required class="grow" placeholder="Email" wire:model="email" />
                        </label>
                        @error('email') <span class="text-sm text-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <label class="input input-bordered flex items-center gap-2">
                            <i class="fa-solid fa-quote-left"></i>
                            <input type="text" required class="grow" placeholder="Subject" wire:model="subject" />
                        </label>
                        @error('subject') <span class="text-sm text-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full">
                        <label class="form-control">
                            <textarea class="textarea textarea-bordered h-24" placeholder="Write your thoughts..." wire:model="message"></textarea>
                        </label>
                        @error('message') <span class="text-sm text-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="card-actions justify-center mt-4">
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

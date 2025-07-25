<div class="flex flex-col items-center">
    <div
        class="relative flex flex-col items-center justify-center w-full h-full lg:min-h-screen gap-4 p-4 bg-center bg-cover lg:flex-row bg-home-hero">
        <div class="flex flex-col items-center w-full gap-4 lg:w-1/2 mt-8 lg:mt-0">
            <article class="prose text-center lg:prose-xl">
                <div class="avatar">
                    <figure
                        class="relative rounded-full w-60 h-60 ring-3 ring-primary ring-offset-base-100 ring-offset-2">
                        <span class="absolute top-0 w-4 h-4 rounded-full right-16 bg-success animate-pulse"></span>
                        <img src="https://gravatar.com/avatar/155573459f38b755aef7215ac4cc56ac?size=350"
                            class="rounded-full" alt="Gabriel Santos Cardoso Gravatar" />
                    </figure>
                </div>
                <h1>
                    Gabriel Santos Cardoso
                </h1>
            </article>
            <div class="mockup-code w-full">
                <pre data-prefix="$"><code>info Gabe | head</code></pre>
                <pre
                    class="text-secondary"><code>File: Gabe.info, Node: Invoking find, Next: Invoking locate, Up: Reference</code></pre>
                <pre class="text-secondary"><code>1.1 Invoking 'Gabe'</code></pre>
                <pre class="text-secondary"><code>===================</code></pre>
                <pre class="text-secondary"><code>'Gabe', Full Stack Developer, located in Brazil.</code></pre>
                <pre
                    class="text-secondary"><code>Interests: AI, Blockchain, Web3 and disruptive technologies.</code></pre>
            </div>
        </div>
        <div class="w-full shadow-xl card lg:w-1/2 bg-base-100">
            <div class="items-center card-body">
                <h2 class="card-title">About Me</h2>
                <article class="prose">
                    {!! $biography !!}
                </article>
                <div class="justify-end card-actions">
                    <button type="button" autofocus class="btn btn-primary" wire:click="redirectToContact">Let's get in
                        touch!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container flex flex-col items-center gap-8 px-4 py-12">
        <livewire:home.educations>
            <livewire:home.experiences>
                <livewire:home.volunteerings>
    </div>
</div>

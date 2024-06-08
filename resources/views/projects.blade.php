<div class="flex flex-col items-center">
    <div
        class="p-4 h-full min-h-screen w-full flex flex-col items-center justify-center gap-4 bg-home-hero bg-cover bg-center">
        <article class="prose lg:prose-xl text-center">
            <div class="avatar">
                <figure
                    class="w-60 h-60 relative rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 rounded-full">
                    <span class="absolute top-0 right-16 w-4 h-4 rounded-full bg-success animate-pulse"></span>
                    <img src="https://pt.gravatar.com/userimage/199484219/012c5298d952c34d6699a3d280e3a4f3.png?size=350"
                        class="rounded-full" />
                </figure>
            </div>
            <h1>
                Check here
                <br>
                Some of my <span class="text-primary">projects</span>
            </h1>
        </article>
    </div>
    <div class="w-full flex flex-col gap-4">
        @foreach ($projects as $index => $project)
            <div class="p-4 flex flex-col md:flex-row items-center justify-center gap-4">
                <article class="prose lg:prose-xl">
                    <h2>
                        <span class="badge badge-accent badge-lg"></span>
                        {{ $project->title }}
                    </h2>
                    <span class="text-secondary">
                        {{ $project->association }}
                    </span>
                    <p>
                        {{ $project->description }}
                    </p>
                    <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                        class="font-bold no-underline hover:text-secondary transition-colors">
                        View Project <i class="fa-solid fa-arrow-right text-accent"></i>
                    </a>
                </article>
                <div>
                    <div class="mockup-window rounded-lg bg-base-300 w-full max-w-[1024px] h-full max-h-[576px]">
                        <figure>
                            <img src="images/home-hero.webp" alt="Project Overview" class="bg-contain">
                        </figure>
                    </div>
                </div>
            </div>
            @if ((count($projects) - 1) != $index)
                <div class="divider"></div>
            @endif
        @endforeach
    </div>
</div>

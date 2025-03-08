<div class="flex flex-col items-center">
    <div
        class="flex flex-col items-center justify-center w-full h-full min-h-screen gap-4 p-4 bg-center bg-cover bg-home-hero">
        <article class="prose text-center lg:prose-xl">
            <div class="avatar">
                <figure class="relative rounded-full w-60 h-60 ring-3 ring-primary ring-offset-base-100 ring-offset-2">
                    <span class="absolute top-0 w-4 h-4 rounded-full right-16 bg-success animate-pulse"></span>
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
    <div class="flex flex-col w-full gap-4">
        @foreach ($projects as $index => $project)
            <div class="flex flex-col items-center justify-center gap-4 p-4 md:flex-row">
                <article class="w-full prose md:w-1/2 lg:prose-xl">
                    <h2>
                        <span class="badge badge-accent badge-lg"></span>
                        {{ $project->title }}
                    </h2>
                    <span class="text-secondary">
                        {{ $project->association }}
                    </span>
                    <div>
                        {!! $project->description !!}
                    </div>
                    <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer"
                        class="font-bold no-underline transition-colors hover:text-secondary">
                        View Project <i class="fa-solid fa-arrow-right text-accent"></i>
                    </a>
                </article>
                <div class="w-full md:w-1/2">
                    <div class="mockup-window rounded-lg bg-base-300 w-full max-w-[1024px] h-full max-h-[576px]">
                        <figure>
                            <img src="{{ $project->image ? Storage::url($project->image) : 'images/seo-image.webp' }}"
                                alt="Project Overview" width="1024" height="576" class="bg-cover">
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

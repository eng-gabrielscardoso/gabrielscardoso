<div class="p-4 h-full min-h-screen w-full flex flex-col items-center justify-center gap-4 bg-home-hero bg-cover bg-center">
    <article class="prose lg:prose-xl text-center">
        <h1>
            Check here
            <br>
            Some of my <span class="text-primary">projects</span>
        </h1>
    </article>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full">
        @foreach ($projects as $project)
            <div class="card w-full bg-base-200 shadow-xl">
                <div class="card-body h-80">
                    <strong class="card-title">{{ $project->title }}</strong>
                    <i>{{ $project->start_date }} - {{ $project->end_date ?? 'Present' }}</i>
                    <span>Associated with <b class="text-accent">{{ $project->association }}</b></span>
                    <br>
                    <p class="overflow-y-scroll">{{ $project->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

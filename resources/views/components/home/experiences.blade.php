<section class="w-full flex flex-col items-center gap-4">
    <article class="w-full prose lg:prose-xl">
        <h2 class="text-primary text-center">Experiences</h2>
    </article>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
        @foreach ($experiences as $experience)
            <div class="card w-full bg-base-200 shadow-xl">
                <div class="card-body h-80 md:h-64">
                    <strong class="card-title">{{ $experience->title }}</strong>
                    <i>{{ $experience->company }}</i>
                    <span><b class="text-accent">{!! $experience->employment_type->getLabel() !!}</b> | {{ $experience->start_date->format('M Y') }} to {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}</span>
                    <br>
                    <p class="overflow-y-scroll">{{ $experience->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

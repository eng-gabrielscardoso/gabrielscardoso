<section class="flex flex-col items-center w-full gap-4">
    <article class="w-full prose lg:prose-xl">
        <h2 class="text-center text-primary">Experiences</h2>
    </article>
    <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-2">
        @foreach ($experiences as $experience)
            <div class="w-full shadow-xl card bg-base-200">
                <div class="card-body h-80">
                    <strong class="card-title">{{ $experience->title }}</strong>
                    <i>{{ $experience->company }}</i>
                    <span><b class="text-accent">{!! $experience->employment_type->getLabel() !!}</b> |
                        {{ $experience->start_date->format('M Y') }} to
                        {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}</span>
                    <br>
                    <div class="overflow-y-scroll">{!! $experience->description !!}</div>
                </div>
            </div>
        @endforeach
    </div>
</section>

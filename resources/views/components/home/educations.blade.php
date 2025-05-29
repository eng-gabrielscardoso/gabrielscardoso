<section class="flex flex-col items-center w-full gap-4">
    <article class="w-full prose lg:prose-xl">
        <h2 class="text-center text-primary"><i class="fa-solid fa-user-graduate"></i> Education</h2>
    </article>
    <div class="grid w-full grid-cols-1 gap-4 md:grid-cols-2">
        @foreach ($educations as $education)
            <div class="w-full shadow-xl card bg-base-200">
                <div class="card-body h-80">
                    <strong class="card-title">{{ $education->course }}</strong>
                    <i>{{ $education->degree }}</i>
                    <span>
                        <b class="text-accent">{{ $education->school }}</b> | {{ $education->start_date->format('M Y') }} to
                        {{ $education->end_date ? $education->end_date->format('M Y') : 'Present' }}
                    </span>
                    <br>
                    <div class="overflow-y-scroll">{!! $education->description !!}</div>
                </div>
            </div>
        @endforeach
    </div>
</section>

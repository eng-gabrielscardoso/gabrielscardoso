<section class="w-full flex flex-col items-center gap-4">
    <article class="w-full prose lg:prose-xl">
        <h2 class="text-primary text-center">Education</h2>
    </article>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
        @foreach ($educations as $education)
            <div class="card w-full bg-base-200 shadow-xl">
                <div class="card-body h-80 md:h-64">
                    <strong class="card-title">{{ $education->course }}</strong>
                    <i>{{ $education->degree }}</i>
                    <span><b class="text-accent">{{ $education->school }}</b> | {{ $education->start_date }} to {{ $education->end_date ?? 'Present' }}</span>
                    <br>
                    <p class="overflow-y-scroll">{{ $education->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

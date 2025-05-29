<section class="flex flex-col items-center w-full gap-4">
    <article class="w-full prose">
        <h2 class="text-center text-primary">
            <i class="fa-solid fa-user-graduate"></i> Education
        </h2>
    </article>

    <div class="relative w-full">
        <div id="education-carousel" class="carousel p-4 w-full space-x-4">
            @foreach ($educations as $index => $education)
                <div id="edu{{ $index }}" class="carousel-item relative w-80 scroll-smooth">
                    <div class="education-card card bg-base-200 w-full h-full transition-all duration-300">
                        <div class="card-body h-80 overflow-hidden">
                            <strong class="card-title">{{ $education->course }}</strong>
                            <i>{{ $education->degree }}</i>
                            <span>
                                <b class="text-accent">{{ $education->school }}</b> |
                                {{ $education->start_date->format('M Y') }} to
                                {{ $education->end_date ? $education->end_date->format('M Y') : 'Present' }}
                            </span>
                            <div class="overflow-y-scroll max-h-32 mt-2">{!! $education->description !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-4 gap-2">
            @foreach ($educations as $index => $education)
                <button type="button" class="btn btn-xs btn-circle"
                    onclick="highlightEducation('edu{{ $index }}')">{{ $index + 1 }}</button>
            @endforeach
        </div>
    </div>
</section>

<script>
    const highlightEducation = (id) => {
        document.querySelectorAll('.education-card').forEach(card => {
            card.classList.remove('ring', 'ring-primary');
        });

        const selectedCard = document.querySelector(`#${id} .education-card`);
        if (selectedCard) {
            selectedCard.classList.add('ring', 'ring-primary');

            document.getElementById(id).scrollIntoView({
                behavior: 'smooth',
                inline: 'center',
                block: 'nearest'
            });
        }
    }
</script>

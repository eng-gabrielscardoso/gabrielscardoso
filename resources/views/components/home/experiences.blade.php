<section class="flex flex-col items-center w-full gap-4">
    <article class="w-full prose">
        <h2 class="text-center text-primary">
            <i class="fa-solid fa-user-tie"></i> Experiences
        </h2>
    </article>

    <div class="relative w-full">
        <div id="experience-carousel" class="carousel w-full space-x-4 p-4">
            @foreach ($experiences as $index => $experience)
                <div id="exp{{ $index }}" class="carousel-item relative w-80 scroll-smooth">
                    <div class="experience-card card bg-base-200 w-full h-full transition-all duration-300">
                        <div class="card-body h-80 overflow-hidden">
                            <strong class="card-title">{{ $experience->title }}</strong>
                            <i>{{ $experience->company }}</i>
                            <span>
                                <b class="text-accent">{!! $experience->employment_type->getLabel() !!}</b> |
                                {{ $experience->start_date->format('M Y') }} to
                                {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                            </span>
                            <div class="overflow-y-scroll max-h-32 mt-2">{!! $experience->description !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-4 gap-2">
            @foreach ($experiences as $index => $experience)
                <button type="button" class="btn btn-xs btn-circle"
                    onclick="highlightExperience('exp{{ $index }}')">{{ $index + 1 }}</button>
            @endforeach
        </div>
    </div>
</section>

<script>
    const highlightExperience = (id) => {
        document.querySelectorAll('.experience-card').forEach(card => {
            card.classList.remove('ring', 'ring-primary');
        });

        const selectedCard = document.querySelector(`#${id} .experience-card`);
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

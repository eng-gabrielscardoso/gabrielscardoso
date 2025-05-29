<section class="flex flex-col items-center w-full gap-4">
    <article class="w-full prose">
        <h2 class="text-center text-primary">
            <i class="fa-solid fa-handshake-angle"></i> Volunteerings
        </h2>
    </article>

    <div class="relative w-full">
        <div id="volunteering-carousel" class="carousel p-4 w-full space-x-4">
            @foreach ($volunteerings as $index => $volunteering)
                <div id="vol{{ $index }}" class="carousel-item relative w-80 scroll-smooth">
                    <div class="volunteering-card card bg-base-200 w-full h-full transition-all duration-300">
                        <div class="card-body h-80 overflow-hidden">
                            <strong class="card-title">{{ $volunteering->role }}</strong>
                            <i>{{ $volunteering->organisation }}</i>
                            <span>
                                <b class="text-accent">{!! $volunteering->cause->getLabel() !!}</b> |
                                {{ $volunteering->start_date->format('M Y') }} to
                                {{ $volunteering->end_date ? $volunteering->end_date->format('M Y') : 'Present' }}
                            </span>
                            <div class="overflow-y-scroll max-h-32 mt-2">{!! $volunteering->description !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-4 gap-2">
            @foreach ($volunteerings as $index => $volunteering)
                <button type="button" class="btn btn-xs btn-circle"
                    onclick="highlightVolunteering('vol{{ $index }}')">{{ $index + 1 }}</button>
            @endforeach
        </div>
    </div>
</section>

<script>
    const highlightVolunteering = (id) => {
        document.querySelectorAll('.volunteering-card').forEach(card => {
            card.classList.remove('ring', 'ring-primary');
        });

        const selectedCard = document.querySelector(`#${id} .volunteering-card`);
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

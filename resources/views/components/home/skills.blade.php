<div class="w-full bg-base-300 px-4 py-12 flex justify-center items-center">
    <div class="container flex flex-col md:flex-row items-center gap-4">
        <div class="flex flex-col gap-4">
            <article class="prose lg:prose-xl">
                <h2>
                    <span class="text-primary">Skills</span> and tools
                </h2>
                <p>
                    For a more <span class="text-primary">detailed</span> overview, please feel free to check the tools
                    that were used on a per project basis
                </p>
            </article>
            <div class="mockup-code">
                <pre data-prefix="$"><code>ls gabe/interests -lh | head -5</code></pre>
                <pre class="text-primary"><code>total &#8734;</code></pre>
                <pre data-prefix=">" class="text-secondary"><code>Artificial Intelligence</code></pre>
                <pre data-prefix=">" class="text-secondary"><code>Blockchain</code></pre>
                <pre data-prefix=">" class="text-secondary"><code>Web3</code></pre>
                <pre data-prefix=">" class="text-secondary"><code>Programming Languages</code></pre>
                <pre data-prefix=">" class="text-secondary"><code>Software Development</code></pre>
            </div>
        </div>
        <article class="prose-sm">
            @foreach ($skills as $skill)
                <h3>{{ $skill->name }}</h3>
                <img src="{{ config('app.skills_icon_api_url') }}{{ $skill->skills }}" alt="{{ $skill->description }}" />
            @endforeach
        </article>
    </div>
</div>

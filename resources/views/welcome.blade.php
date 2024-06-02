<div class="flex flex-col items-center">
    <div class="relative px-4 h-full min-h-screen w-full flex items-center justify-center">
        <article class="prose lg:prose-xl text-center">
            <div class="avatar">
                <figure class="w-60 h-60 relative rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 rounded-full">
                    <span class="absolute top-0 right-16 w-4 h-4 rounded-full bg-success animate-pulse"></span>
                    <img src="https://pt.gravatar.com/userimage/199484219/012c5298d952c34d6699a3d280e3a4f3.png?size=350" class="rounded-full" />
                </figure>
            </div>
            <h1>
                Hello
                <br>
                I'm <span class="text-primary">Gabe</span>
                <br>
                Full Stack Developer.
            </h1>
            <p>
                Currently located at <span class="text-primary">Brazil</span>, I love build software experiences for web.
            </p>
            <button type="button" autofocus class="btn btn-primary" wire:click="redirectToContact">Let's get in touch!</button>
        </article>
    </div>
    <div class="w-full bg-base-300 px-4 py-12 flex justify-center items-center">
        <div class="container flex flex-col md:flex-row items-center gap-4">
            <article class="prose lg:prose-xl">
                <h2>
                    <span class="text-primary">Skills</span> and tools
                </h2>
                <p>
                    For a more <span class="text-primary">detailed</span> overview, please feel free to check the tools that were used on a per project basis
                </p>
            </article>
            <article class="prose lg:prose-xl">
                <img src="https://skillicons.dev/icons?i=html,css,less,sass,js,ts,php,java,python,go,solidity,bash" alt="Programming languages" class="pb-1" />
                <img src="https://skillicons.dev/icons?i=tailwind,react,next,vue,nuxt,vitest,jest,express,nestjs,adonis,angular,laravel" alt="Frameworks and libraries" class="pb-1" />
                <img src="https://skillicons.dev/icons?i=mysql,postgresql,mongodb,redis,prisma,firebase,supabase,aws,gcp,vercel,netlify,heroku" alt="Database and ORMs" class="pb-1" />
                <img src="https://skillicons.dev/icons?i=pnpm,yarn,nodejs,bun,vite,docker,git,linux,github,gitlab,figma,githubactions" alt="Tools set" class="py-1" />
            </article>
        </div>
    </div>
    <div class="container px-4 py-12 flex flex-col items-center gap-8">
        <livewire:home.educations>
        <section class="w-full flex flex-col items-center gap-4">
            <article class="w-full prose lg:prose-xl">
                <h2 class="text-primary text-center">Experiences</h2>
            </article>
            <div class="w-full carousel carousel-center p-4 space-x-4 bg-neutral rounded-box">
                <div class="carousel-item">
                    <img src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.jpg" class="rounded-box" />
                </div>
            </div>
        </section>
    </div>
</div>

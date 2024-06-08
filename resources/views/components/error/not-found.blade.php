<article class="prose lg:prose-xl">
    <h1>Oops!</h1>
    <p>
        It seems that the requested page has already been removed or were not founded in our resources collection.
    </p>
    <p>
        If you really need this page please contact the support or hold on for a moment.
    </p>
    <button class="btn btn-primary" wire:click="redirectToHome">
        <div wire:loading.remove>
            Go back to home
        </div>
        <div wire:loading>
            <i class="fa-solid fa-spinner animate-spin"></i>
            <span>Redirecting to home</span>
        </div>
    </button>
</article>

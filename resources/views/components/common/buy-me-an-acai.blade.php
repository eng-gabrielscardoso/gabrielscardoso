<div class="fixed bottom-6 right-4 z-40">
    <button class="btn btn-accent shadow-lg" onclick="buyMeAnAcai.showModal()">Buy
        me an Açaí</button>

    <dialog id="buyMeAnAcai" class="modal pt-4">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2"><i
                        class="fa-solid fa-xmark"></i></button>
            </form>
            <div class="flex flex-col gap-3">
                <h3 class="text-lg font-bold">Hello mate!</h3>
                <p class="text-sm md:text-md">First of all, "Açaí" is simply the main product of the region where I live
                    (I don't know, it
                    just felt cooler than writing “Buy me a coffee”). Since it's not something everyone's familiar with,
                    try
                    to Google it to discover more about this marvel from Pará.</p>
                <p class="text-sm md:text-md">
                    Explanations aside, I'm also Brazilian, which by extension means I live in a country with a severely
                    devalued currency, a corrupt government, and significant economic fragility. On top of that, I don't
                    code just as a hobby - it's my profession, and one I hold in high regard (or at least I try to).
                </p>
                <p class="text-sm md:text-md">
                    So, if you'd like to support me or believe in my work (which makes you just as mad as I was when I
                    tried
                    explaining the concept of home office to my family, who have always worked either in the fields or
                    in
                    factories), below are some details on how you can help.
                </p>
                <div class="collapse bg-base-100 border border-base-300">
                    <input type="radio" name="bitcoin-payment-details" checked="checked"
                        aria-label="Collapse Bitcoin Payment Details" />
                    <div class="collapse-title font-semibold"><i class="fa-brands fa-bitcoin"></i> Bitcoin</div>
                    <div class="collapse-content text-sm">
                        Good old Bitcoin. As I mentioned, I live in a country overrun
                        by corrupt politicians, judges with dictator complexes, and all sorts of wretched human beings.
                        BTC is one of the few ways left to remain independent from banks and other institutions hijacked
                        by these crooks (long live decentralisation!).<br>
                        <div class="tooltip z-50 w-full" data-tip="bc1qahqnyd4pajevve8ksp45nh7c4zceymeg5lxq2z">
                            <button class="w-full btn btn-primary btn-sm mt-2"
                                onclick="copyToClipboard('bc1qahqnyd4pajevve8ksp45nh7c4zceymeg5lxq2z', this)">Copy
                                Address</button>
                        </div>
                    </div>
                </div>
                <div class="collapse bg-base-100 border border-base-300">
                    <input type="radio" name="ethereum-payment-details"
                        aria-label="Collapse Ethereum Payment Details" />
                    <div class="collapse-title font-semibold"><i class="fa-brands fa-ethereum"></i> Ethereum</div>
                    <div class="collapse-content text-sm">
                        Ah, Ethereum. An equally marvellous coin that opened the
                        floodgates to a never-ending stream of pseudo-revolutionary applications. Still better than
                        fiat, though!<br>
                        <div class="tooltip z-50 w-full" data-tip="0xddf0d86f79007b1ab2b545b710126edb546c498a">
                            <button class="w-full btn btn-primary btn-sm mt-2"
                                onclick="copyToClipboard('0xddf0d86f79007b1ab2b545b710126edb546c498a', this)">Copy
                                Address</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</div>

<script>
    const copyToClipboard = (text, button) => {
        navigator.clipboard.writeText(text).then(() => {
            const originalText = button.innerText;
            button.innerText = 'Copied!';
            button.disabled = true;
            setTimeout(() => {
                button.innerText = originalText;
                button.disabled = false;
            }, 2000);
        });
    }
</script>

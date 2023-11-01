<x-layout>

    <section class="container mx-auto px-6 h-full flex flex-col">

        <div class="container mx-auto">
            
            <header class="flex justify-center print:justify-start">

                <h1>
                    <img src="/logo.svg" alt="CodeBreaker" aria-label="Codebreaker" class="print:invert print:w-36">
                </h1>
            </header>

            <div class="container">
                <livewire:create-code/>
            </div>
        </div>
    </section>
</x-layout>
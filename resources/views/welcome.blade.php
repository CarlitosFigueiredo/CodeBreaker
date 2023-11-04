<x-layout>

    <section class="container mx-auto px-6 h-full flex flex-col" style="max-width: 1000px" >

        <div class="container mx-auto">
            
            <header class="flex">

                <h1>
                    <img src="/logo.svg" alt="CodeBreaker" aria-label="Codebreaker" class="print:invert w-52 print:w-36">
                </h1>
            </header>

            <div class="container">
                <livewire:create-code/>
            </div>
        </div>
    </section>
</x-layout>
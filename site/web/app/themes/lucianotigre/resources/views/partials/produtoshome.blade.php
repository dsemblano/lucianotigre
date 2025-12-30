<section id="shop_products" class="container">
    <h2 class="text-primary font-bold text-xl md:text-2xl mb-4">Produtos essenciais para sobrevivência</h2>
    @php
        $products = wc_get_products([
            'status' => 'publish',
            'limit' => 3,
        ]);
    @endphp

    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($products as $product)
            <x-product-card :product="$product" />
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a href="/loja"
            class="px-6 py-3 bg-secondary text-white hover:bg-secondary-dark rounded-lg no-underline hover:underline text-center">Todos
            os produtos</a>
    </div>


</section>

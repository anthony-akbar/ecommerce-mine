<div class="grid grid-cols-12 gap-5 mt-5">
    @foreach($categories as $key => $category)

        <div wire:click="getproducts({{ $category->category_name }})" id="{{$category->id}}" class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
            <div class="font-medium text-base">{{ $category->category_name ?? '' }}</div>
            <div class="text-slate-500">{{ count($category->products) }} Items</div>
        </div>

    @endforeach
</div>
<div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
    @foreach($products as $product)
        <button wire:click="product">1231</button>
        <a href="javascript:;" wire:click="product" data-tw-toggle="modal" data-tw-target="#add-item-modal"
           class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
            <div class="box rounded-md p-3 relative zoom-in">
                <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                    <div class="absolute top-0 left-0 w-full h-full image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-md"
                             src="https://enigma.left4code.com/dist/images/food-beverage-4.jpg">
                    </div>
                </div>
                <div class="block font-medium text-center truncate mt-3">{{ $product->product_title }}</div>
            </div>
        </a>
    @endforeach
</div>

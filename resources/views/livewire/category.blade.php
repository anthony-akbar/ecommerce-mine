@extends('admin.layouts.app')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Categories</h2>
    @can('client_create')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a class="btn btn-primary shadow-md mr-2" {{--href="{{ route('admin.categories.create') }}"--}}
                   control-id="ControlID-2">Add New ategory</a>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown"
                            control-id="ControlID-3">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="plus" class="lucide lucide-plus w-4 h-4" data-lucide="plus"><line x1="12" y1="5"
                                                                                                          x2="12"
                                                                                                          y2="19"></line><line
                                x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="printer"
                                         data-lucide="printer" class="lucide lucide-printer w-4 h-4 mr-2">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    Print
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                         data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                        <path
                                            d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <line x1="10" y1="9" x2="8" y2="9"></line>
                                    </svg>
                                    Export to Excel
                                </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                         data-lucide="file-text" class="lucide lucide-file-text w-4 h-4 mr-2">
                                        <path
                                            d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <line x1="10" y1="9" x2="8" y2="9"></line>
                                    </svg>
                                    Export to PDF
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search..."
                               control-id="ControlID-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" icon-name="search"
                             class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
                             data-lucide="search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10"
                           placeholder="Search item..." control-id="ControlID-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         icon-name="search"
                         class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500"
                         data-lucide="search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <select class="form-select py-3 px-4 box w-full lg:w-auto mt-3 lg:mt-0 ml-auto"
                        control-id="ControlID-4">
                    <option>Sort By</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lowest Price</option>
                    <option>Highest Price</option>
                </select>
            </div>
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
        </div>
    </div>
@endsection

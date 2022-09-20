@extends('front.layout.master')

@section('title','Home')

@section('body')
    <div class="container">
        <div class="category-product">
            <div class="list-category">
                <ul>
                    <li>

                            <a href="./shop">All product</a>


                    </li>
                    @for($i=0;$i<8;$i++)
                        <li>
                            <a href="./shop?c={{$categories[$i]->id}}">{{$categories[$i]->name}}</a>
                        </li>
                    @endfor

                </ul>
            </div>
            <div  class="category-product-bottom" style="margin-left: 40px;margin-bottom: 40px;overflow: hidden;">
                <div class="list-product-title">
                    <h1>All Product</h1>
                    <div class="filter-right">
                        <div class="list-filter">
                            <div class="wrap-list-filter">
                                <span>Nguyễn Nhật Ánh</span>
                                <span>1$-2$</span>
                            </div>
                        </div>
                        <div class="list-product-filter">
                            <button class="toggle-filter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path id="Icon_awesome-filter" data-name="Icon awesome-filter" d="M19.062,0H.939A.938.938,0,0,0,.276,1.6L7.5,8.826v8.049a.938.938,0,0,0,.4.768l3.125,2.187a.938.938,0,0,0,1.475-.768V8.826L19.724,1.6A.938.938,0,0,0,19.062,0Z" fill="#187498"/>
                                </svg>
                            </button>
                            <button class="filter-item filer-price">
                                <div class="filter-wrap"></div>
                                Price
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="5.207" viewBox="0 0 9.414 5.207">
                                    <path id="Icon_feather-chevron-down" data-name="Icon feather-chevron-down" d="M3,4.5l4,4,4-4" transform="translate(-2.293 -3.793)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                </svg>
                                <div class="change-filter">
                                    <p>Chọn khoảng giá</p>
                                    <div class="d-flex-center">
                                        <input class="price-from" type="text" pattern="[0-9]{3}" value="0">
                                        -
                                        <input class="price-to" type="text" pattern="[0-9]{3}">
                                    </div>
                                </div>
                            </button>

                            <button class="filter-item filer-author">
                                <div class="filter-wrap"></div>
                                Author
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="5.207" viewBox="0 0 9.414 5.207">
                                    <path id="Icon_feather-chevron-down" data-name="Icon feather-chevron-down" d="M3,4.5l4,4,4-4" transform="translate(-2.293 -3.793)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                </svg>
                                <div class="change-filter">
                                    <p>Chọn khoảng giá</p>
                                    <div class="d-flex-center">
                                        <input class="price-from" type="text" pattern="[0-9]{3}" value="0">
                                        -
                                        <input class="price-to" type="text" pattern="[0-9]{3}">
                                    </div>
                                </div>
                            </button>


                        </div>
                    </div>


                </div>

                <div class="list-product">
                    @foreach($products as $product)
                        @include('front.components.product_component',compact('product'))
                    @endforeach
                </div>
                <div style="margin-top: 40px">
                    {!! $products->links() !!}
                </div>



            </div>

        </div>
    </div>
@endsection

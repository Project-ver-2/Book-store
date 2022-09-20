@extends('front.layout.master')

@section('title','Home')

@section('body')
<div class="container">
    <section class="mycart">
        <div class="mycart-title">
            <h1><span class="title-bold">Address</span> <span class="title-border">List</span></h1>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="21.5" viewBox="0 0 17.5 21.5">
                    <g id="Icon_feather-file-text" data-name="Icon feather-file-text" transform="translate(-3.25 -1.25)">
                        <path id="Path_515" data-name="Path 515" d="M14,2H6A2,2,0,0,0,4,4V20a2,2,0,0,0,2,2H18a2,2,0,0,0,2-2V8Z" fill="none" stroke="#187498" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Path_516" data-name="Path 516" d="M14,2V8h6" fill="none" stroke="#187498" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Path_517" data-name="Path 517" d="M16,13H8" fill="none" stroke="#187498" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Path_518" data-name="Path 518" d="M16,17H8" fill="none" stroke="#187498" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                        <path id="Path_519" data-name="Path 519" d="M10,9H8" fill="none" stroke="#187498" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                    </g>
                </svg>
            </a>
        </div>
        <div class="mycart-content list-address row">
            <div class="address-item address-default">
                <p>Vũ Viết Quý
                    <span class="icon-default">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.25" height="16.25" viewBox="0 0 16.25 16.25">
                                <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M6.669,8.456,5.531,9.594,9.188,13.25l8.125-8.125L16.175,3.988,9.188,10.934ZM16.5,10a6.472,6.472,0,1,1-4.712-6.256l1.259-1.259A7.558,7.558,0,0,0,10,1.875,8.125,8.125,0,1,0,18.125,10Z" transform="translate(-1.875 -1.875)" fill="#323c7a"/>
                            </svg>
                        </span>

                </p>
                <p>0326459773</p>
                <p>Hà Nội,quận Cầu Giấy, phường Mai Dịch, phố Doãn Kế Thiện</p>
                <p>Hà Nội,quận Cầu Giấy, phường Mai Dịch, phố Doãn Kế Thiện nghõ  105,
                    ngách 56,số nhà 21</p>
                <button class="btn edit-address">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.53" height="14.414" viewBox="0 0 14.53 14.414">
                        <g id="Icon_feather-edit" data-name="Icon feather-edit" transform="translate(-0.833 -0.752)">
                            <path id="Path_505" data-name="Path 505" d="M7.333,2.667H2.667A1.333,1.333,0,0,0,1.333,4v9.333a1.333,1.333,0,0,0,1.333,1.333H12a1.333,1.333,0,0,0,1.333-1.333V8.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_506" data-name="Path 506" d="M12.333,1.667a1.414,1.414,0,1,1,2,2L8,10l-2.667.667L6,8l6.333-6.333Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="address-item">
                <p>Vũ Viết Quý</p>
                <p>0326459773</p>
                <p>Hà Nội,quận Cầu Giấy, phường Mai Dịch, phố Doãn Kế Thiện</p>
                <p>Hà Nội,quận Cầu Giấy, phường Mai Dịch, phố Doãn Kế Thiện nghõ  105,
                    ngách 56,số nhà 21</p>
                <button class="btn edit-address">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.53" height="14.414" viewBox="0 0 14.53 14.414">
                        <g id="Icon_feather-edit" data-name="Icon feather-edit" transform="translate(-0.833 -0.752)">
                            <path id="Path_505" data-name="Path 505" d="M7.333,2.667H2.667A1.333,1.333,0,0,0,1.333,4v9.333a1.333,1.333,0,0,0,1.333,1.333H12a1.333,1.333,0,0,0,1.333-1.333V8.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_506" data-name="Path 506" d="M12.333,1.667a1.414,1.414,0,1,1,2,2L8,10l-2.667.667L6,8l6.333-6.333Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="address-item">
                <p>Vũ Viết Quý</p>
                <p>0326459773</p>
                <p>Hà Nội,quận Cầu Giấy, phường Mai Dịch, phố Doãn Kế Thiện</p>
                <p>Hà Nội,quận Cầu Giấy, phường Mai Dịch, phố Doãn Kế Thiện nghõ  105,
                    ngách 56,số nhà 21</p>
                <button class="btn edit-address">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.53" height="14.414" viewBox="0 0 14.53 14.414">
                        <g id="Icon_feather-edit" data-name="Icon feather-edit" transform="translate(-0.833 -0.752)">
                            <path id="Path_505" data-name="Path 505" d="M7.333,2.667H2.667A1.333,1.333,0,0,0,1.333,4v9.333a1.333,1.333,0,0,0,1.333,1.333H12a1.333,1.333,0,0,0,1.333-1.333V8.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                            <path id="Path_506" data-name="Path 506" d="M12.333,1.667a1.414,1.414,0,1,1,2,2L8,10l-2.667.667L6,8l6.333-6.333Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="add-address">
                <a href="" class="add-address-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <g id="Group_562" data-name="Group 562" transform="translate(-214.5 -589.5)">
                            <path id="Path_507" data-name="Path 507" d="M0,0V16" transform="translate(222.5 589.5)" fill="none" stroke="#187498" stroke-width="3"/>
                            <line id="Line_58" data-name="Line 58" x2="16" transform="translate(214.5 597.5)" fill="none" stroke="#187498" stroke-width="3"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>



    </section>
</div>
@endsection

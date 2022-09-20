@extends('front.layout.master')

@section('title','Home')

@section('body')
    <div class="container">
        <section class="mycart">
            <div class="mycart-title">
                <h1><span class="title-bold">Edit</span> <span class="title-border">Address</span></h1>
                <a class="back-link" href="#">Back</a>
            </div>
            <div class="mycart-content new-address">
                <form action="" id="new-address">
                    <div class="row-1">
                        <input type="text" class="fullname info-item" placeholder="Full name">
                        <input type="text" class="phone info-item" placeholder="Phone number">
                    </div>
                    <select name="city" id="city" class="info-item">
                        <option value="1">Hà Nội</option>
                        <option value="2">Thái Bình</option>
                    </select>
                    <select name="district" id="district" class="info-item">
                        <option value="1">Thái Thụy</option>
                        <option value="2">Thái Thủy</option>
                    </select>
                    <select name="region" id="region" class="info-item">
                        <option value="1">Thụy Dũng</option>
                        <option value="2">Thụy Hồng</option>
                    </select>
                    <textarea name="address" id="address" class="info-item"></textarea>
                    <div class="row-2">
                        <input type="checkbox" id="default-address-new">
                        <label for="default-address-new">Đặt làm địa chỉ mặc định</label>
                    </div>

                    <button>Save</button>
                </form>



            </div>

        </section>
    </div>
@endsection

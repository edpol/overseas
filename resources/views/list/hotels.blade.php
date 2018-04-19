@extends('layouts.master')

@section('box1')
<section class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                 <h2>OverSeas</h2>
             </div>
         </div>
    </div>
 </section>
@endsection

@section('box2')
<section class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"> </div>
            <div class="col-sm-8 ml-auto">
                <table border=0 cellpadding=12 cellspacing=12 style="background-color:#ddd;">
                @foreach ($hotels as $hotel)
                <tr><td>
<div style="padding:16px; background-color:#fff; ">
                    <table border=0 style="background-color:#fff; border-radius:8px; width:100%;">
                        <tr style="padding:12px; margin:32px;">
                            <td rowspan=2><img src="img/{{ $hotel->image }}" style="padding-right:6px;" /></td>
                            <td valign="top">{{ $hotel->name }}  | {!! stars($hotel->stars) !!} <br />{{ $hotel->address }}</td>
                            <td style="border-top:solid 10px red; text-align: right;">starting at<br />
    helper function that gets the lowest price
    {{ number_format($hotel) }}<br/>
                                per room / night<br />* Taxes Not Included</td>
                        </tr>
                        <tr><td valign="bottom"><button style="color:white; background-color:#F0AD4E; padding:8px; font-weight:bold; border-radius:8px;">Rooms / Availability</button></td></tr>
                    </table>
</div>
                </td></tr>
                @endforeach
            </table>
            </div>
        </div>
    </div><!-- /.blog-main -->
</section>
@endsection
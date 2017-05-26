@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Миний сагсанд одоогоор...</div>

                <div class="panel-body">
                    @if($myBasket != null)
                        @foreach($myBasket->items as $key => $item)
                            <img src="{{ $item['item']->imgur }}" style="max-width: 60px; max-height: 60px">
                            <span class="" style="font-size: 19px">
                            {{ $item['item']->name }}
                            </span> &nbsp;&nbsp;&nbsp;
                            <span class="badge" style="font-size: 19px">
                            {{ $item['qty'] }}
                            </span>
                            <a href="/mybasket/remove/{{$key}}" style="font-size: 15px" class="btn btn-default pull-right">
                                Жагсаалтаас хасах
                            </a>
                            <br><br>
                        @endforeach
                    @else
                        <center><p>Таны сагсанд ямар нэгэн бүтээгдэхүүн алга байна.</p></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
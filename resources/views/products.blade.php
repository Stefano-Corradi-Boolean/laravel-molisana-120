@extends('layout.main')

@section('content')
<h2>Le mie paste</h2>

<div class="container">

  @foreach ($products_obj as $product)
  
    <div class="card">
      <img src="{{ $product->src }}" alt="{{ $product->titolo  }}">
        <h4>{{ $product->titolo  }}</h4>
    </div>
    
  @endforeach

</div>
@endsection
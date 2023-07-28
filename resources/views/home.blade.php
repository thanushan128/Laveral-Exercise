@extends('layouts.sample');
@section('title','JVL Code Home page');
@section('main-content')
    <div>
        <h1>This is the Home page</h1>
        <p><h1><?php echo $heading ?></h1></p>
        <p>{!!$subheading!!}</p>
        {{-- <?php if ($no_of_users==0) { ?>
           No user available
           <?php } elseif($no_of_users==1) { ?>
            One user available <?php
           } else { ?>
           Multi user available
           <?php
           }
?> --}}

{{-- use the blade syntex --}}
@if ($no_of_users==0)
    No user
@elseif ($no_of_users==1)
    One user
@else
    Many users

@endif
<br>
@unless ($is_user_online)
   User is offline
@endunless

@isset($settings)
 Set the pass variable
@endisset


{{-- 16 video --}}
{{-- for loop --}}

{{-- @for ($i=0;$i<10;$i++)
    This is a number <b>{{$i}}</b><br>

@endfor --}}

{{-- @foreach ($authors as $item)
  <p>Authors name {{$item['name']}} </p>
@endforeach --}}

{{-- @if (count($authors)>0)
    @while ($author = array_pop($authors))
        <p>Author name while {{$author['name']}} </p>
    @endwhile
@else
   <p> No authors </p>
@endif --}}

<br>
@forelse ($authors as $author)
  <p> Author name {{$author['name']}} </p>
@empty
  No Author
@endforelse
    </div>
@show
{{-- @endsection --}}



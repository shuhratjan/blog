<h2>{{$title}}</h2>

<ol class="breadcrumb">
    <li><a href="{{route('admin.index')}}">{{$parent}}</a></li>
    <li>{{$just_slash}}  <span>&#47;</span>   </li>
    <li class="active"> {{$active}} </li>
</ol>
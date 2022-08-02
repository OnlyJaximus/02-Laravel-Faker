@if ($message = Session::get('updated'))
{{-- <div class="col s4 offset-s8">
    <strong class="red-text right yellow">{{$message}}</strong>
</div> --}}
<script>
     M.toast({html: '{{ $message }}'})
</script>
@endif



@if ($message = Session::get('delete'))
{{-- <div class="col s4 offset-s8">
    <strong class="red-text right yellow">{{$message}}</strong>
</div> --}}
<script>
    M.toast({html: '{{ $message }}'})
</script>
@endif



@if ($message = Session::get('create'))
{{-- <div class="col s4 offset-s8">
    <strong class="red-text right yellow">{{$message}}</strong>
</div> --}}

<script>
    M.toast({html: '{{ $message }}'})
</script>

@endif
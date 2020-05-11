<button {{ $attributes->merge(['class' => 'btn']) }} type="button" data-toggle="modal" data-target="#{{$id}}">
  {{ $text }}
</button>

<div class="modal modal-blur fade" id="{{$id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-{{$size}}" role="document">
    <div class="modal-content">
      <div class="modal-header">
        @isset( $header )
        {{ $header }}
        @else
        <h5 class="modal-title">{{ $title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        @endisset
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>

@push('scripts')
@if($open)
<script type="text/javascript">
    $(window).on('load',function(){
        $('#{{$id}}').modal('show');
    });
</script>
@endif
@endpush

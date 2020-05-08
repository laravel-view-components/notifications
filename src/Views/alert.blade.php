<div {{ $attributes->merge([ 'class' => $getClassAttributes() . ($dismissible ? ' alert-dismissible' : '') ]) }} role="alert">
  {{ $slot }}
  @if($dismissible)
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  @endif
</div>

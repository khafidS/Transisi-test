<table class="table">
  <thead></thead>
  <tbody>
      @foreach ($items as $item)
            <img src="{{url ('storage/'. $item->logo)}}" class="img-fluid" alt="Responsive image"/>
      @endforeach
  </tbody>
</table>
<ul class="mb-0">
    @foreach($row->services as $service)
        @include('web::alliance.structures.partials.service', compact('service'))
    @endforeach
</ul>

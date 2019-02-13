@if (count($breadcrumbs))
    <ul class="breadcrumb" 
    style="all:initial;height:10px;">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item" style="color:black;"><a style="color:black;" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active" style="color:black;">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif
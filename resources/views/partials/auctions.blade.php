

<div class="row" style="margin: 1rem; width: max">
@foreach($auctions->chunk(2) as $chunk)
    <div class = "col-md-6">
    @each('partials.auctionPreview', $chunk, 'auction')
    </div>
@endforeach
</div>



@extends('layouts.main')
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="buy-tickets" class="section-with-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h2>Get out Service</h2>
      <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
    </div>

    <div class="row">
      @foreach($prices2 as $price)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $price->name }}</h5>
              <h6 class="card-price text-center">${{ number_format($price->price2) }}</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($amenities2 as $amenity)
                  <li @if(!$price->amenities2->contains($amenity->id))class="text-muted"@endif>
                    <span class="fa-li"><i class="fa fa-{{ $price->amenities2->contains($amenity->id) ? 'check' : 'times' }}"></i></span>{{ $amenity->name }}
                  </li>
                @endforeach
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="{{ Str::slug($price->name) }}">Request Now</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </div>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buy Tickets</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form  action="#" method="POST">
          @csrf
            <h1>hello</h1>
            <div class="form-group">
              <input type="text" class="form-control" name="your-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="your-email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <select id="ticket-type" name="ticket-type" class="form-control" >
                <option value="">-- Select Your Ticket Type --</option>
                @foreach($prices2 ?? '' as $price)
                  <option value="{{ Str::slug($price->name) }}">{{ $price->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn">Request Now</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>

</body>
</html>
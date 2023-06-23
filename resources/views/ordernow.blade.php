@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="col-sm-10 mx-auto">
            <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Amount</th>
                    <td>{{$total}} $</td>
                  </tr>
                  <tr>
                    <th scope="row">Tax</th>
                    <td>0 $</td>
                  </tr>
                  <tr>
                    <th scope="row">Delivery</th>
                    <td colspan="2">10 $</td>
                  </tr>
                  <tr>
                    <th scope="row">Total Amount</th>
                    <td colspan="2">{{$total +10}} $</td>
                  </tr>
                </tbody>
              </table>
              {{-- input Address  --}}
              <form action="/orderplace" method="POST">
                @csrf
                <div class="col-12">
                    <textarea name="address" class="form-control" placeholder="enter your address"></textarea>
                </div>
                <br>
                <div class="form_check">
                    <label for="pwd">Payment Method</label><br><br>
                    <input class="form-check-input me-3" type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
                    <input class="form-check-input me-3" type="radio" value="cash" name="payment"><span>EMI Payment</span><br><br>
                    <input class="form-check-input me-3" type="radio" value="cash" name="payment"><span>Payment On Delivery</span><br><br>

                </div>
                <div class="caontainer mx-auto">
                    <a  class="btn btn-danger" href="/">Go Back</a>
                    <button type="sumit" class="btn btn-primary"> Order Now</button>
                </div>
                </form>
        </div>
    </div>
@endsection

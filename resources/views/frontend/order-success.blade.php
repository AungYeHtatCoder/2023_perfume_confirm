<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>In Scents - Order Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <style>
        *{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="py-3">
            <div class="d-flex justify-content-between">
                <div class="">
                    <a href="{{ url('/shop') }}" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left me-2"></i>Back To Shop</a>
                </div>
                <div class="">
                    <button class="btn btn-sm btn-outline-secondary" id="print">Print</button>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ asset('assets/img/logo.png') }}" width="100px" alt="">
                </div>
                <div>
                    <h3 class="mt-5" style="color:purple">In Scents</h3>
                </div>
            </div>

        </div>
        <h3 class="text-center mt-3 text-success">Your Order Have Been Submitted Successfully.</h3>
        <div class="row mt-4">
            <div class="col-lg-6 mb-3">
                <div class="card p-3 shadow border border-none">
                    <h4 class="text-center">Delivery Information</h4>
                    <b class="mb-2">Name : <span>{{ Auth::user()->name }}</span></b>
                    <b class="mb-2">Email : <span>{{ Auth::user()->email }}</span></b>
                    <b class="mb-2">Phone : <span>{{ Auth::user()->phone }}</span></b>
                    <b class="mb-2">Address : <span>{{ Auth::user()->address }}</span></b>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card p-3 shadow border border-none">
                    <h4 class="text-center">Ordered Products</h4>
                    <div class="table-responsive">
                        <table class="table table-centered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product</th>
                                    <th>Size</th>
                                    <th>Qty</th>
                                    <th>Unit Price</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($order->order_products as $key => $order_product)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>
                                        @foreach ($products as $p)
                                        {{ $p->id === $order_product->product_id ? $p->name : "" }}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($sizes as $s)
                                        {{ $s->id === $order_product->size_id ? $s->name : "" }}
                                        @endforeach
                                    </td>
                                    <td>
                                        {{ $order_product->qty }}
                                    </td>
                                    <td>
                                        @php
                                            $product = App\Models\Admin\Product::find($order_product->product_id);
                                        @endphp
                                        @foreach ($product->sizes as $s)
                                        @if ($s->id === $order_product->size_id)
                                        {{ $s->pivot->discount_price ? number_format($s->pivot->discount_price) : number_format($s->pivot->normal_price) }} MMK
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        {{ number_format($order_product->total_price) }} MMK
                                    </td>
                                    <td>
                                        @if ($order_product->status === "pending")
                                        <span class="badge text-bg-warning">{{ $order_product->status }}</span>
                                        @elseif($order_product->status === "delivering")
                                        <span class="badge text-bg-warning">{{ $order_product->status }}</span>
                                        @elseif($order_product->status === "completed")
                                        <span class="badge text-bg-success">{{ $order_product->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <b>Grand Total</b>
                                    </td>
                                    <td>
                                        <b>{{ number_format($order->sub_total) }} MMK</b>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetAlert.js') }}"></script>
    <script src="https://kit.fontawesome.com/b829c5162c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script>
        // When the button with id "printButton" is clicked, call the printPage function
        $("#print").on("click", function() {
          window.print();
        });
    </script>
    @if (Session::has('success'))
    <script>
    showSweetAlert("Success!", "{{ Session::get('success') }}", "success");
    </script>
    @endif
    @if (Session::has('error'))
    <script>
    showSweetAlert("Sorry!", "{{ Session::get('error') }}", "error");
    </script>
    @endif
</body>
</html>

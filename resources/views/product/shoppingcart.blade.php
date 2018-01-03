<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        @foreach($books as $books)
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{$books->path}}" alt="profile Pic" height="100" width="100" class="img-responsive"/></div>
                    <div class="col-sm-7">
                            <h4 class="nomargin">{{$books->book_name}}</h4>
                        <p>{{$books->text}}</p>
                    </div>
                </div>
            </td>
            <td data-th="Price">${{$books->price}}</td>
            <td data-th="Quantity">
                <input type="number" name="num" class="form-control text-center" value= "1">
            </td>
            <td data-th="Subtotal" class="text-center">{{$books->price}}</td>
            <td class="col-sm-1 col-md-1">
                <a href="{{route('product.singlecartdestroy',['id' => $books->id])}}"> <button type="button" class="btn btn-danger">
                        <span class="fa fa-remove"></span> 移除
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong></strong></td>
        </tr>
        <tr>
            <td><a href="{{route('product.cartdestroy')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i>送出訂單</a></td>
            <td><a href="{{route('product.shopindex')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i>回到首頁</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong></strong></td>
            <td><a  class="hidden-xs text-center"> <i class="fa fa-angle-right"></i></a></td>
        </tr>
        </tfoot>
    </table>
</div>



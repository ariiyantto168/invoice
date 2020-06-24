<section class="content-header">
        <h1>Invoice</h1>
        <ol class="breadcrumb">
          <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><i class="fa fa-cubes"></i>Invoice</li>
        </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Index</h3>
            <div class="box-tools pull-right">
                <a href="{{url('invoices/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
            </div>
         </div>
    </div>
    <div class="box-body table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Invoice Date</th>
                    <th>Due date</th>
                    <th>Invoice number</th>
                    <th>Invoice Status</th>
                    <th>Billing to</th>
                    <th>company</th>
                    <th>tittle</th>
                    <th>price</th>
                    <th>diskon price</th>
                    <th>total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($invoices as $number => $invoice)
                    <tr>
                        <td>{{$number+1}}</td>
                        <td>{{$invoice->name}}</td>
                        <td>{{$invoice->invoicedates}}</td>
                        <td>{{$invoice->due_date}}</td>
                        <td>{{$invoice->invoicesnumber}}</td>
                        <td>{{$invoice->invoicesstatus}}</td>
                        <td>{{$invoice->billingto}}</td>
                        <td>{{$invoice->company}}</td>
                        <td>{{$invoice->tittle}}</td>
                        <td>{{$invoice->price}}</td>
                        <td>{{$invoice->pricenexts}}</td>
                        <td>{{$invoice->total}}</td>
                        <td>
                            <center>
                                <a href="{{url('/invoices/update/'.$invoice->idinvoices)}}"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="{{url('/invoices/view/'.$invoice->idinvoices)}}" ><i class="fa fa-eye"></i></a>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</section>     
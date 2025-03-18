


<div class="container mt-5 mb-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex flex-row p-2"> <img src="products/qi.jpg" width="48">
                    <div class="d-flex flex-column"> <span class="font-weight-bold">Tax Invoice</span> <small>INV-001</small> </div>
                </div>
                <hr>
                <div class="table-responsive p-2">
                    <table >
                        <tbody>
                            <tr class="add">
                                <td>To</td>
                                <td>From</td>
                            </tr>
                            
                            <tr class="content">
                                <td class="font-weight-bold"> {{$data->user->name}} <br>{{$data->rec_address}}<br>Bangladesh</td>
                                <td class="font-weight-bold">Logeachi.com <br> Official showroom of Logeachi <br> USA</td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="products p-2">
                    <table border="1">
                        <tbody>
                            <tr class="add">
                                <td>Description</td>
                                
                                <td>Price</td>
                                <td>total</td>
                                
                            </tr>
                           
                            <tr class="content">
                                <?php
                                $value="0";
                                
                                ?>
                                <td>{{$data->product->title}}</td>
                                
                                <td>{{$data->product->price}}</td>
                                
                                <?php 
                                $value = $value + $data->product->price;
                                
                                ?>
                                <td>{{$value}}</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
              
                <div class="address p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td>Bank Details</td>
                            </tr>
                            <tr class="content">
                                <td> Bank Name : ADS BANK <br> Swift Code : ADS1234Q <br> Account Holder : Jelly Pepper <br> Account Number : 5454542WQR <br> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!DOCTYPE html>
<html  lang="" >
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Keranjang</title>

            <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/logo.png') }}">
    
<!-- General CSS Files -->
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/css/style.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/css/components.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91959012-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91959012-2');
</script>
    </head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-2">
            <div class="row">
                <div  class="col-12"  >
                    <div class="login-brand">
                        <a href="http://traineasyv3.intermaticsng.com">
                            <img  alt="logo" width="100" class="shadow-light" src="{{ url('img/logo.png') }}" >
                        </a>
                    </div>

                    
                        <div class="card card-primary">
     <div class="card-header">
        <h4>Keranjang Anda</h4>
         <div class="card-header-action">

             <!-- <div class="dropdown">
                 <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Select Currency</a>
                 <div class="dropdown-menu">
                    <a href="http://traineasyv3.intermaticsng.com/cart/change-currency/1" class="dropdown-item has-icon">$ - United States Dollar</a>
                 </div>
             </div> -->
         </div>
    </div>
    <div class="card-body">
                    <div class="table-responsive">
        <table class="table table-hover mb-3">
            <thead>
            <tr>
                <th>Item</th>
                <th class="text-center">Total</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
                        <tr  >
                <td class="col-sm-8 col-md-6 pt-2" >
                    <div class="media">

                        
                        

                        <a class="thumbnail float-left" href="http://traineasyv3.intermaticsng.com/courses/5/javascript-basics"> <img class="media-object" src="http://traineasyv3.intermaticsng.com/tmp/cache/usermedia/practice-javascript-and-learn-functions-400x277-72x72.png" style="width: 72px; height: 72px;"> </a>

                        


                        <div class="media-body pl-3">
                            <h5 class="media-heading"><a href="http://traineasyv3.intermaticsng.com/courses/5/javascript-basics">SMA Kelas 12</a></h5>

                            <span></span><span class="text-success"><strong>IPA - Terbatas</strong></span>
                        </div>
                    </div></td>

                <td class="col-sm-1 col-md-1 text-center pt-2"  ><strong>$ 0.00</strong></td>
                <td class="col-sm-1 col-md-1 pt-2"  >

                    <a class="btn btn-danger" href="http://traineasyv3.intermaticsng.com/cart/remove/5"><i class="fa fa-trash"></i> Hapus</a>

                </td>
            </tr>
            


            </tbody>
        </table>
    </div>


        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary">
                    <div class="card-header">Metode Pembayaran</div>
                    <div class="card-body">
                        <form method="post" class="form" action="http://traineasyv3.intermaticsng.com/cart">
                            <input type="hidden" name="_token" value="5Z1Olm2BfzSIE0s72rYuql7w5lay0NGmeNDNRO22">                            <div class="form-group">
                                <label for="code">Transfer ke No Rekening A/N Menthik Handoko :</label>
                                <input required="required" class="form-control" type="text" name="code" placeholder="361 855 401 11 4"/>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Apply</button> -->
                        </form>
                    </div>
                </div>

            </div>




                <!-- <div class="col-md-5">
                    <form action="http://traineasyv3.intermaticsng.com/cart/checkout" method="post" id="cart-form">
                        <input type="hidden" name="_token" value="5Z1Olm2BfzSIE0s72rYuql7w5lay0NGmeNDNRO22">                                            <div class="card card-success">
                        <div class="card-header" >Payment Method</div>
                        <div class="card-body">


                            <table class="table table-striped">
                                                                                                <tr>
                                    <td><input  id="method-1"     checked="checked"  required="required" type="radio" name="payment_method" value="1"/> </td>
                                    <td><label for="method-1">Paypal</label></td>
                                </tr>
                                                                                                <tr>
                                    <td><input  id="method-2"    required="required" type="radio" name="payment_method" value="2"/> </td>
                                    <td><label for="method-2">Bank Transfer/Cash Deposit</label></td>
                                </tr>
                                                                                                <tr>
                                    <td><input  id="method-3"    required="required" type="radio" name="payment_method" value="3"/> </td>
                                    <td><label for="method-3">Stripe</label></td>
                                </tr>
                                                                                            </table>

                        </div>
                    </div>
                                         </form>
                </div> -->

                <div class="col-md-4 ">
                    <table class="table table-hover">
                                                <tr>

                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>$ 0.00</strong></h3></td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-md-6"  >
                            <a class="btn btn-link btn-block" href="http://traineasyv3.intermaticsng.com/courses/">
                                <i class="fa fa-cart-plus"></i> Continue Shopping
                            </a>

                        </div>
                        <div class="col-md-6"    >
                            <button type="button" onclick="$('#cart-form').submit()" class="btn btn-success btn-block">
                                <i class="fa fa-money-bill"></i>  Checkout
                            </button>
                        </div>
                    </div>
                </div>

        </div>
            </div>
    </div>



                    <div class="simple-footer">
                       <div class="mb-4"> <a href="http://traineasyv3.intermaticsng.com/cart" data-toggle="tooltip" data-placement="top" title="Back" class="btn btn-icon btn-success"><i class="fa fa-chevron-left"></i></a> <a data-toggle="tooltip" data-placement="top" title="Home"  href="http://traineasyv3.intermaticsng.com" class="btn btn-icon btn-primary"><i class="fa fa-home"></i></a>
                          </div>
                        Copyright &copy; 2021  My Site
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/jquery.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/popper.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/tooltip.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/modules/moment.min.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/js/stisla.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/js/scripts.js"></script>
<script src="http://traineasyv3.intermaticsng.com/client/themes/admin/assets/js/custom.js"></script>
<div id="demo-creds" style="display: none">

    <div class="alert alert-primary">
        <div class="alert-title">Demo Credentials</div>
        <div class="row">

            <div class="col-md-4 offset-md-2">
                <strong style="text-decoration: underline">Administrator</strong> <br>
                Email: <strong>admin@email.com</strong> <br>
                Password: <strong>password</strong>
            </div>
            <div class="col-md-4  ">
                <strong  style="text-decoration: underline">Student</strong><br>
                Email: <strong>student@email.com</strong> <br>
                Password: <strong>password</strong>
            </div>

        </div>
    </div>



</div>


<script>
    $('.login-email').val('admin@email.com');
    $('.login-password').val('password');

    var msg = $('#demo-creds').html();
    $('#login-info-box').html(msg);

</script>

<div class="modal fade" id="generalModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generalModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="genmodalinfo">
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="generalLargeModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="generalLargeModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  id="genLargemodalinfo">
            </div>

        </div>
    </div>
</div>

<!-- END SIMPLE MODAL MARKUP -->
<script>
    function openModal(title,url){
        $('#genmodalinfo').html(' <img  src="http://traineasyv3.intermaticsng.com/img/ajax-loader.gif');
        $('#generalModalLabel').text(title);
        $('#genmodalinfo').load(url);
        $('#generalModal').modal();
    }
    function openLargeModal(title,url){
        $('#genLargemodalinfo').html(' <img  src="http://traineasyv3.intermaticsng.com/img/ajax-loader.gif');
        $('#generalLargeModalLabel').text(title);
        $('#genLargemodalinfo').load(url);
        $('#generalLargeModal').modal();
    }
    function openPopup(url){
        window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        return false;
    }
</script>
</body>
</html>

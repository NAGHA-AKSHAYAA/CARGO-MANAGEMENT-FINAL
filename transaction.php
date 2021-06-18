<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="transtyle.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php $amount = $_SESSION['price_of_order'];?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<div class="container d-flex justify-content-center mt-5 mb-5">
    <div class="row g-3">
        <div class="col-md-6"> <span>Payment Method</span>
            <div class="card">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header p-0">
                            <h2 class="mb-0"> <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex align-items-center justify-content-between"> <span>Credit card</span>
                                        <div class="icons"> <img src="https://i.imgur.com/2ISgYja.png" width="30"> <img src="https://i.imgur.com/W1vtnOV.png" width="30"> <img src="https://i.imgur.com/35tC99g.png" width="30"> <img src="https://i.imgur.com/2ISgYja.png" width="30"> </div>
                                    </div>
                                </button> </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <form method="post" action="transaction.php">
                            <div class="card-body payment-card-body"> <span class="font-weight-normal card-text">Card Number</span>
                                <div class="input"> <i class="fa fa-credit-card"></i> <input type="text" id="cr_no" class="form-control" required placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"></div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-md-6"> <span class="font-weight-normal card-text">Expiry Date</span>
                                        <div class="input"> <i class="fa fa-calendar"></i> <input type="text" id="exp" class="form-control"  required placeholder="MM/YY" minlength="5" maxlength="5"> </div>
                                    </div>
                                    <div class="col-md-6"> <span class="font-weight-normal card-text">CVC/CVV</span>
                                        <div class="input"> <i class="fa fa-lock"></i> <input type="password" class="form-control" required placeholder="000" minlength="3" maxlength="3"> </div>
                                    </div>
                                </div>
                                <button type="submit" style="width: 100%;" name="completedTransaction" class="btn btn-primary btn-block">Complete Transaction</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6"> <span>Order Summary</span>

            <div class="card">
                <div class="d-flex justify-content-between p-3">
                    <div class="d-flex flex-column"> <span>Order Details</span></div>
                    <div class="mt-1"> <sup class="super-price">Rs <?php echo round($amount,2); ?></div>
                </div>
                <hr class="mt-0 line">
                <div class="p-3">
                    <div class="d-flex justify-content-between mb-2"> <span>Discount</span> <span>-Rs0.00</span> </div>
                </div>
                <hr class="mt-0 line">
                <div class="p-3 d-flex justify-content-between">
                    <div class="d-flex flex-column"> <span>Total amount </span> <small></small> </div> <span>Rs <?php echo round($amount,2)?></span>
                </div>
            </div>


        </div>
    </div>
</div>
<script>
$(document).ready(function(){
//For Card Number formatted input
var cardNum = document.getElementById('cr_no');
cardNum.onkeyup = function (e) {
if (this.value == this.lastValue) return;
var caretPosition = this.selectionStart;
var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
var parts = [];

for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
    var c = this.value[i];
    if (c < '0' || c> '9') {
        caretPosition--;
        }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join(' ');
        this.selectionStart = this.selectionEnd = caretPosition;
        }

        //For Date formatted input
        var expDate = document.getElementById('exp');
        expDate.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i +=2) { parts.push(sanitizedValue.substring(i, i + 2)); } for (var i=caretPosition - 1; i>= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c> '9') {
                caretPosition--;
                }
                }
                caretPosition += Math.floor(caretPosition / 2);

                this.value = this.lastValue = parts.join('/');
                this.selectionStart = this.selectionEnd = caretPosition;
                }



                })
</script>
</body>
</html>

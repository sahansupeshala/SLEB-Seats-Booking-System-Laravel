@extends('layouts.HomeNav')
@section('content')
<style>
        .abc{
            background-color: #ECECEC;

            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 10px ;
            height:auto;
        }
    </style>


<div class="abc">
    
<div class="box">
    <p class="heading">FAQs</p>
    <div class="faqs">
    <link href="faq.css" rel="stylesheet" type="text/css">
       
        <details>
            <summary><h4>How to book bus tickets with this web site?</h4></summary>
            <p class="text">Search buses as per your route and journey date => Select preferred bus => Choose preferred seats and give passenger details => Pay => Get tickets via SMS/Email</p>
        </details>

        <details>
            <summary><h4>What payment methods do you accept?</h4></summary>
            <p class="text">Online Payments: Any Credit cards (VISA, MASTER, AMEX), Debit cards (should be activated by your bank to do online payments), eZ Cash (Dialog, Etisalat, and Hutch), FriMi, mCash.

                Offline Payments: Deposit total amount to our bank accounts (Nation Trust Bank or Hatton National Bank) by calling our hotline to book the seats. But this is hassle for you to go to bank unless you have online banking to do CEFT trasnfers. We do not accept SLIPS transfer which will not be immediately credit money to our bank accounts.         
                Partial deposits are not accepted and it will lead to cancellation if the full amount is not deposited.
                
                We encourage online payments for hassle free and fast booking experiece.</p>
        </details>

        <details>
            <summary><h4> cancellation process?</h4></summary>
            <p class="text">Call us 0700508000  to cancel your tickets. If you could not reach the hotline, Email us to slebgroup10@gmail.com with the details. Please read the terms and condtions to know about cancellation of booked tickets.</p>
        </details>

        <details>
                <summary><h4>How can I get refund in case I cancal my bus ticket?</h4></summary>
                <p class="text">Refund amount is calculated as per cancellation policy. The amount will be credited to any bank accounts in Sri Lanka or to a PayPal account. Unfortunately we are unable to refund to the original payment account.</p>
        </details>

        <details>
            <summary><h4>I have given wrong account for refund. What should I do?</h4></summary>
            <p class="text">You have to inform us and if the refund is not initiated at that time, we can process the refund to correct account. If the refund is already initiated and it is successful, we cannot do anything from our end. But if the refund is returned to us, we can process refund again with applicable charges occured.</p>
    </details>
    </div>
</div>   
</div>  
@endsection

     

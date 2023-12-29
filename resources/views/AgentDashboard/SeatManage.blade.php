@extends('layouts.AgentNav')
  
@section('content')
<head>
<link rel="stylesheet" type="text/css" href=" {{ asset('css/style.css') }}">
</head>
<style>
        .abc{
            background-color: #EDF1D6;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding:10px;
            height: 1450px;
        }

        
 </style>


<div class="abc">


<div class="wrapper">
        <div class="container1">
            <div class="row">
                <div class="grid-50 col-6">
                    <div id="seat-map">
                        <div class="front-indicator">Bus Seat Reservation</div>
                        <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">From Front Row</h4>
                        <div id="bus-seat-map">
                            
                        </div>
                        <h4 class="text-muted fw-bold text-center" style="padding-left:3em; margin:.5em">End of Seat Row</h4>
                    </div>
                </div>
               

                <div class="grid-50 col-6"> 
                <form method="post" action="/AgentSeat">
                @csrf
                <input type="hidden" name="busno"  value="{{$Route['Bus_no']}}">
                <input type="hidden" name="id"  value="{{$Route['id']}}">
                <input type="hidden" name="price"  value="{{$Route['Tikcet']}}">
                <input type="hidden" id="seats" name="seat">
                <div >
                        <div> <h2>Booking Details</h2></div>
                        <h5> Available seats [<span value="{{$available}}">{{$available}}/55</span>]</h5>
                       
                   
                 
                        <h3> Selected Seats (<span name="count" id="counter">0</span>):</h3>
                        <ul id="selected-seats"></ul>

                        <h2>Total: <b>Rs.<span name="total" id="total">0</span></b></h2>
                      
                        <button type="submit" id="checkout-button">Submit Booking</button>
                       
                        </div>  
                        
                     
                        

                    </form>

                  
                   
                    <div id="legend" ></div>
                    <a id="reset-btn"  href="/resetSeat/{{$Route['id']}}">Reset Booking</a>
                  
                </div>
                
                
                 
            </div>
        </div>
    </div>

    </div>
<script>
  var firstSeatLabel = 1;
  
  //console.log(app);
  
var booked = !!localStorage.getItem('booked') ? $.parseJSON(localStorage.getItem('booked')) : [];

$(document).ready(function() {
    
    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),
        sc = $('#bus-seat-map').seatCharts({
            map: [
                '___ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'ee_ee',
                'eeeee',
            ],
            seats: {
                e: {
                    price: {{$Route['Tikcet']}},
                    classes: 'economy-class', //your custom CSS class
                    category: 'Seat'
                }

            },
            naming: {
                top: false,
                getLabel: function(character, row, column) {
                    return firstSeatLabel++;
                },
            },
            legend: {
                node: $('#legend'),
                items: [
                    ['e', 'available', 'Seat Available'],
                    ['f', 'unavailable', 'Already Booked']
                ]
            },
            click: function() {
                if (this.status() == 'available') {
                    //let's create a new <li> which we'll add to the cart items
                    $('<li>' + this.data().category + ' No: ' + this.settings.label + ': <b>Rs.' + this.data().price + '</b> <a href="#" class="cancel-cart-item">  <b>[Remove]<b></a></li>')
                        .attr('id', 'cart-item-' + this.settings.id)
                        .data('seatId', this.settings.id)
                        .appendTo($cart);


                
                          
                       
      
                    /*
                     * Lets update the counter and total
                     *
                     * .find function will not find the current seat, because it will change its stauts only after return
                     * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                     */
                    $counter.text(sc.find('selected').length + 1);
                    $total.text(recalculateTotal(sc) + this.data().price);

                    return 'selected';

                } else if (this.status() == 'selected') {
                   
                    //update the counter
                    $counter.text(sc.find('selected').length - 1);

                    //and total
                    $total.text(recalculateTotal(sc) - this.data().price);
                
                    //remove the item from our cart
                    $('#cart-item-' + this.settings.id).remove();

                    //seat has been vacated
                    return 'available';

                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });

    //this will handle "[cancel]" link clicks
    $('#selected-seats').on('click', '.cancel-cart-item', function() {
        //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
        sc.get($(this).parents('li:first').data('seatId')).click();
    });

    var app1 = {{ Js::from($seat2) }};
    
    
 
    
 //let's pretend some seats have already been booked
 sc.get(app1).status('unavailable');
    //sc.get(booked).status('unavailable');
    //sc.get([]).status('unavailable');

});

function recalculateTotal(sc) {
    var total = 0;

    //basically find every selected seat and sum its price
    sc.find('selected').each(function() {

        total += this.data().price;

    });

    return total;
}

$(function() {
    $('#checkout-button').click(function() {
        var items = $('#selected-seats li')
        if (items.length <= 0) {
            alert("Please select atleast 1 seat first.")
            return false;
        }
        var selected = [];
        items.each(function(e) {
            var id = $(this).attr('id')
            id = id.replace("cart-item-", "")
            selected.push(id)
        })
        if (Object.keys(booked).length > 0) {
            Object.keys(booked).map(k => {
                selected.push(booked[k])
            })
        }
        //localStorage.setItem('booked', JSON.stringify(selected))
        //const myJSON = JSON.stringify(obj);
        document.getElementById("seats").setAttribute('value',JSON.stringify(selected));
      
    
        alert("Seats has been Reserved successfully.")
        location.reload()
    })
    $('#reset-btn').click(function() {
        if (confirm("are you sure to reset the reservation of the bus?") === true) {
            localStorage.removeItem('booked')
           
            alert("Seats has been Reset successfully.")
            location.reload()
        }
    })
})


   </script>             
  
           
       
   

@endsection
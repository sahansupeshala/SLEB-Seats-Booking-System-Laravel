@extends('layouts.HomeNav')
@section('content')
<style>
        .abc{
            background-image: url('public-transit-industry.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 60px ;
            height: 800px;
        }



*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  /*--color-primary: #f6aca2;
  --color-secondary: #f49b90;
  --color-tertiary: #f28b7d;
  --color-quaternary: #f07a6a;
  --color-quinary: #ee6352;*/

  --color-primary: #5192ED;
  --color-secondary: #69A1F0;
  --color-tertiary: #7EAEF2;
  --color-quaternary: #90BAF5;
  --color-quinary: #A2C4F5;

}



.content {
  display: flex;
  align-content: center;
  justify-content: center;
}

.text_shadows {
  text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary),
    9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  font-family: bungee, sans-serif;
  font-weight: 100;
  text-transform: uppercase;
  font-size: calc(0.9rem + 3vw);
  text-align: center;
  margin: 0;
  color: var(--color-primary);
  //color: transparent;
//background-color: blue;
  //background-clip: text;
  animation: shadows 1.2s ease-in infinite, move 1.2s ease-in infinite;
  letter-spacing: 0.3rem;
}

@keyframes shadows {
  0% {
    text-shadow: none;
  }
  10% {
    text-shadow: 1px 1px 0 var(--color-secondary);
  }
  20% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary);
  }
  30% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary), 7px 7px var(--color-quaternary);
  }
  40% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary), 7px 7px var(--color-quaternary),
      8px 8px 0 var(--color-quinary);
  }
  50% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary), 7px 7px var(--color-quaternary),
      8px 8px 0 var(--color-quinary);
  }
  60% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary), 7px 7px var(--color-quaternary),
      8px 8px 0 var(--color-quinary);
  }
  70% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary), 7px 7px var(--color-quaternary);
  }
  80% {
    text-shadow: 1px 1px 0 var(--color-secondary),
      4px 4px 0 var(--color-tertiary);
  }
  90% {
    text-shadow: 1px 1px 0 var(--color-secondary);
  }
  100% {
    text-shadow: none;
  }
}

@keyframes move {
  0% {
    transform: translate(0px, 0px);
  }
  40% {
    transform: translate(-8px, -8px);
  }
  50% {
    transform: translate(-8px, -8px);
  }
  60% {
    transform: translate(-8px, -8px);
  }
  100% {
    transform: translate(0px, 0px);
  }
}

button {
height: 33px;
width: 200px;
}



    </style>



<div class="content bg-light">
  <h2 class="text_shadows pt-3">Welcome to SLEB</h2>

</div>


  <div class="abc">

<div class="text-center ">

<h4> <small class="text-muted">The Sri Lanka's Pioneer and Number One Online Expressway Bus Ticket Booking Platform.</small></h4>
</div>




          @include('message')
      <div class="container mt-3 flex  justify-content-center rounded-2 shadow-lg " style="--bs-bg-opacity: .9;height:18vh;width:1700px; background-color: #060047;">
        <h3 class="text-light pt-1" style="text-align: center;">Select Your Journey</h3>
          <form action="/searchbus" class="was-validated m-3" method="post">
            @csrf

           <div class="row ">
            <div class="  col-3 " >
            <select name="from"  class=" livesearchone  form-control col" >
              <option value="From" selected>From</option>

              </select>
            </div>
            <div class="col-3">
            <select name="to"  class="livesearchtwo form-control col" >
              <option  value="To" selected > To</option>

              </select>
            </div>
            <div class="col-3" >
            <span ><i class="fa fa-calendar" ></i></span>
            <input type="date"  id="date"  class="form-control col" name="date"  />
            </div>
            <div class="col-3 d-grid gap-6 mx-auto">
            <button type="submit" class="btn btn-outline-dark bg-primary bus-front " data-aos="fade-down" data-aos-duration="1000">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-bus-front pb-1" viewBox="0 0 16 16">
                  <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.303 44.303 0 0 0 8 4Zm0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44.304 44.304 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43.306 43.306 0 0 0 8 3Z"/>
                  <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A43.61 43.61 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2V8ZM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A42.611 42.611 0 0 1 8 1Z"/>
                </svg>Search Bus</button>
            </div>
          </div>





          </form>
      </div>
          </div>
    </div>






  </div>



  <script type="text/javascript">
    $('.livesearchone').select2({

        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            processResults: function (data) {

              const uniqueValues = new Set();
              const filteredData = [];

              // Filter out duplicate depature_city values
              data.forEach(function (item) {
                  if (!uniqueValues.has(item.depature_city)) {
                      uniqueValues.add(item.depature_city);
                      filteredData.push(item);
                  }
              });
              return {
                  results: $.map(filteredData, function (item) {
                      return {
                          text: item.depature_city,
                          id: item.id
                      }
                  })
              };
          },

            cache: true
        }
    });

    $('.livesearchtwo').select2({

ajax: {
    url: '/ajax-autocomplete-searchtwo',
    dataType: 'json',

    processResults: function (data) {

      const uniqueValues = new Set();
              const filteredData = [];

              // Filter out duplicate depature_city values
              data.forEach(function (item) {
                  if (!uniqueValues.has(item.depature_city)) {
                      uniqueValues.add(item.depature_city);
                      filteredData.push(item);
                  }
              });

        return {
            results: $.map(filteredData, function (item) {
                return {
                    text: item.arrival_city,
                    id: item.id
                }
            })
        };
    },
    cache: true
}
});

var tid = setInterval(tagline_vertical_slide, 2500);

// vertical slide
function tagline_vertical_slide() {
    var curr = $("#tagline ul li.active");
    curr.removeClass("active").addClass("vs-out");
    setTimeout(function () {
        curr.removeClass("vs-out");
    }, 500);

    var nextTag = curr.next('li');
    if (!nextTag.length) {
        nextTag = $("#tagline ul li").first();
    }
    nextTag.addClass("active");
}



</script>

@endsection




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    @vite('resources/css/app.css')
    @include('sweetalert::alert')

    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}">
</head>
<body>
   <div class="mx-auto max-w-full flex flex-col justify-center items-center py-4 px-4 background2">
      <div class="max-w-7xl w-1/2 py-4 flex justify-center">
         <h1 class="text-[40px] font-semibold text-white">Reservation Form</h1>
      </div>
       <div class="card relative max-w-7xl min-w-1/2 w-1/2 h-auto rounded-2xl shrink-0 bg-white bg-opacity-10 shadow-lg shadow-white">
           <form  action="{{ route('store') }}" method="POST" class="mx-auto py-8 px-8 flex flex-wrap flex-col ">
              @csrf
               <div class="flex flex-wrap flex-row gap-4 px-4 ">
                    <span class="flex flex-col flex-1">
                        <label for="fname" class="font-poppins font-medium text-white">Firstname</label>
                        <input id="fname" name="fname" placeholder="Firstname" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="lname" class="font-poppins font-medium text-white">Lastname</label>
                    <input id="lname" name="lname" placeholder="Lastname" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                 </div>
                 <div class="flex flex-col flex-wrap px-4 py-4">
                    <label for="address" class="font-poppins font-medium text-white">Address</label>
                    <input id="address" name="address" placeholder="Address" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                 </div>
                 <div class="flex flex-wrap flex-row gap-4 px-4 ">
                   <span class="flex flex-col flex-1">
                    <label for="lname" class="font-poppins font-medium text-white">City</label>
                    <input id="city" name="city" placeholder="City" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="state" class="font-poppins font-medium text-white">State</label>
                    <input id="state" name="state" placeholder="State" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="zip" class="font-poppins font-medium text-white">Zip Cod</label>
                    <input id="zip" name="zip" placeholder="Zip Code" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                 </div>
                 <div class="flex flex-wrap flex-row gap-4 px-4 py-2">
                 <span class="flex flex-col flex-1">
                    <label for="phone" class="font-poppins font-medium text-white">Phone</label>
                    <input name="phone" placeholder="Phone" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="email" class="font-poppins font-medium text-white">Email</label>
                    <input name="email" placeholder="Email" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                 </div>
                 <div class="flex flex-wrap flex-row gap-4 px-4 py-2">
                 <span class="flex flex-col flex-1">
                    <label for="room" class="font-poppins font-medium text-white">Room</label>
                    <input name="room" placeholder="Room" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="amount" class="font-poppins font-medium text-white">Amount</label>
                    <input name="amount" placeholder="Amount" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                 </div>
                 <div  class="flex flex-wrap flex-row gap-4 px-4 py-2">
                 <span class="flex flex-col flex-1">
                    <label for="checkinDate" class="font-poppins font-medium text-white">Check-in Date</label>
                    <input id="checkinDate" name="checkinDate" placeholder="Check-in Date" type="date" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="checkinTime" class="font-poppins font-medium text-white">Check-in Time</label>
                    <input name="checkinTime" placeholder="Check-in Time" type="time" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                 </div>

                 <div  class="flex flex-wrap flex-row gap-4  px-4  py-2">
                   <span class="flex flex-col flex-1">
                    <label for="checkoutDate" class="font-poppins font-medium text-white">Check-out Date</label>
                    <input id="checkoutDate" name="checkoutDate" placeholder="Check-out Date" type="date" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                    <span class="flex flex-col flex-1">
                    <label for="checkoutTime" class="font-poppins font-medium text-white">Check-out Time</label>
                    <input name="checkoutTime" placeholder="Check-out Time" type="time" class="flex-1 px-2 py-1 focus:outline-none border-b-2 font-poppins font-light text-white border-blue bg-transparent"/>
                    </span>
                 </div>
    
                 <div class="flex flex-wrap flex-col gap-4  px-4 py-2 ">
                     <h1 class="font-poppins font-medium text-white">Room Preference</h1>
                     <span class="flex flex-1">
                     <span >
                     <input type="radio" id="standard" name="preference" value="Standard">
                     <label for="standard" class="font-poppins font-medium text-white">Standard</label>
                     <input type="radio" id="deluxe" name="preference" value="Deluxe">
                     <label for="deluxe" class="font-poppins font-medium text-white">Deluxe</label>
                     <input type="radio" id="suite" name="preference" value="Suite">
                     <label for="suite" class="font-poppins font-medium text-white">Suite</label>
                     </span>
                     <span class="flex flex-col px-8">
                     <label for="adults" class="font-poppins font-medium text-white">Adults</label>
                     <select name="adults" id="adults">
                         @for($i = 0; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                         @endfor
                     </select>
                     </span> 
                     <span class="flex flex-col px-8">
                     <label for="childs" class="font-poppins font-medium text-white">Childs</label>
                     <select name="childs" id="childs">
                         @for($i = 0; $i <= 10; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                         @endfor
                     </select>
                     </span> 
                 </div>
                 <div class="flex justify-center mt-4">
                     <button type="submit" class="btn-gradient text-white  w-[50%] px-4 py-2 rounded-2xl shadow-sm shadow-white">Submit<button>
                 </div>
           </form>
       </div>
   </div>
</body>
</html>
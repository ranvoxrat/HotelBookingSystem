<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    @vite('resources/css/app.css')
    
    <link href="https://cdn.datatables.net/2.0.1/css/dataTables.tailwindcss.css" rel="stylesheet">
</head>
<body>
    <di class="mx-auto max-w-full flex flex-col items-center py-4 px-4 background">
    <h1 class="text-[40px] font-semibold text-white">Reservation</h1>  
      <div class="w-auto h-auto mx-auto py-8 px-8  bg-white bg-opacity-5">
      
         <table id="registrations-table" class="relative display text-white shadow-lg">  
        <span class="flex gap-4">     
            <button onclick="window.location.href='{{ route('registration') }}'" class="  text-white bg-blue rounded-lg bg-opacity-10 shadow-md shadow-white py-2 px-4 hover:bg-blue hover:duration-300 hover:transition-all hover:scale-105">Add</button> 
            <button onclick="window.location.href='{{ route('custom.logout') }}'" class=" text-white bg-blue rounded-lg bg-opacity-10 shadow-md shadow-white py-2 px-4 hover:bg-blue hover:duration-300 hover:transition-all hover:scale-105">Logout</button> 
           </span>
            <thead class= "px-4">
           <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Room</th>
                <th>Amout</th>
                <th>Check-in Date</th>
                <th>Check-in Time</th>
                <th>Check-out Date</th>
                <th>Check-out Time</th>
                <th>Preference</th>
                <th>Adults</th>
                <th>Childs</th>
            </tr>
            </thead>
            <tbody >
                @foreach($registrations as $registration)
                <tr>
                    <td>{{$registration->fname}}</td>
                    <td>{{$registration->lname}}</td>
                    <td>{{$registration->address}}</td>
                    <td>{{$registration->phone}}</td>
                    <td>{{$registration->room}}</td>
                    <td>{{$registration->amount}}</td>
                    <td>{{$registration->checkinDate}}</td>
                    <td>{{$registration->checkinTime}}</td>
                    <td>{{$registration->checkoutDate}}</td>
                    <td>{{$registration->checkoutTime}}</td>
                    <td>{{$registration->preference}}</td>
                    <td>{{$registration->adults}}</td>
                    <td>{{$registration->childs}}</td>
                </tr>
                @endforeach
            </tbody>
       </table>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.tailwindcss.js"></script>
    <script>
       $(document).ready(function() {
        new DataTable('#registrations-table', {
        layout: {
            topStart: null,
            topEnd: 'search',
            bottomStart: 'info',
            bottomEnd: 'paging' 
        }
    });
});
    </script>
</body>
</html>

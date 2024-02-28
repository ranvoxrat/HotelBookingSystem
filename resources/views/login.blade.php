<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
   <div class="relative mx-auto max-w-full min-w-8xl h-auto  w-screen flex items-center background overflow-hidden">
       <div class="flex flex-wrap max-w-7xl min-w-3xl mx-auto bg-white  w-1/2 h-1/2 rounded-xl shadow-md overflow-hidden">
           <div class="max-w-2xl mx-auto flex-1 ml-2 mt-2 ">
               <div class="relative inline-flex justify-center mt-4 ml-4 mb-6">
                    <h1 class="pl-7 py-5 font-poppins font-semibold text-[25px] text-blue">Login</h1>
                    <p class="py-6 px-2 font-poppins text-[20px] font-light">Your Account</p>
                    <span class="bg-blue line mt-4 ml-4"></span>                
               </div>
               <form method="POST" action="{{ route('login') }}" class="mx-auto w-full flex flex-col py-4 px-4 gap-6 ">
                 @csrf  
                <span class="relative inline-flex w-full px-6">
                    <x-fas-user-lock class="w-8 text-blue absolute top-0"/>
                    <input type="text" name="username" placeholder="Username" class="txt-input"/>                 
                  </span>  
                  @error('username')
                      <span>{{ $message }}</span>
                  @enderror             
                  <span class="relative inline-flex w-full px-6">
                    <x-ri-key-fill class="w-8 text-blue absolute top-0"/>
                    <input type="password" name="password" placeholder="Password" class="txt-input"/>                  
                  </span>
                  <span class="relative inline-flex w-full px-6 py-4">
                     <button class="bg-btn">Login<x-iconsax-bul-login-1 class="w-6"/></button>
                  </span>
                  @error('password')
                       <span>{{ $message }}</span>
                  @enderror
               </form>
           </div>
           <div class="max-w-2xl mx-auto flex items-center flex-1 py-4">
               <img src="{{ asset('../../images/image2.jpg') }}" alt="Description">
           </div>
       </div>
   </div>
</body>
</html>
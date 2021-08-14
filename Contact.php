<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="icon" href="image\sd.png" type="image/icon type">
    <title>Hope</title>
</head>
<body>
    <header class="text-gray-500 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0" href="./index.html"> 
            <img src="image\logo1.png" class="logo" alt="">
            <span class="ml-3 text-xl">Hope</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
             <a href="index.html" class="mr-5 hover:text-white">Home</a>
       <a href="gallery.html" class="mr-5 hover:text-white">Gallery</a>
     <a href="Our-Team.html" class="mr-5 hover:text-white">Our Team</a>
        <a href="Contact.php" class="mr-5 hover:text-white">Contact</a>
    <a href="donate.html" class="mr-5 bg-red-500  text-black hover:text-white  border-0 py-1 px-3 focus:outline-none hover:bg-red-600 rounded text-lg">Donate</a>
      
          </nav>
        </div>
      </header>
      <section>
        <div class="container1  px-5 py-24 mx-auto flex sm:flex-no-wrap ">
          <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
           

               <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.645735271072!2d94.07324051481729!3d26.723762383209394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3746c29aaaaaaaa9%3A0x2d892aae4e814384!2sKaziranga%20University!5e0!3m2!1sen!2sin!4v1571250396460!5m2!1sen!2sin" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6">
              <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">ADDRESS</h2>
                <p class="leading-relaxed">Kaziranga University,Koraikhowa, NH-37, Jorhat, Assam 785006</p>
              </div>
              <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">EMAIL</h2>
                <a class="text-green-500 leading-relaxed">taniyach17@gmail.com</a>
              </div>
            </div>
          </div>
  <div class="container" style="margin-bottom: 60px;">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="name" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="sub" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                             <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
      <footer class="text-gray-500 bg-gray-900 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-small items-center md:justify-start justify-center text-white">
            <img src="image\logo1.png" class="logo" alt="">
            <span class="ml-3 text-xl">Hope</span>
          </a>
          <p class="text-sm text-gray-600 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2021 Hope  @Taniya & Sajid</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            
            <a class="ml-3 text-gray-600">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-600">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
      
           
          </span>
        </div>
      </footer>
</body>
</html>


@extends('layout.main')

@section('container')
</div class=" relative inline-flex items-center justify-center">
    <aside id="default-sidebar" class=" mt-[55px] left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white">
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                       <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                       <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3">Beranda</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                       <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Verifikasi Petani</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                       <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Laporan</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                       <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Notifikasi</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                       <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Akun Kelompok Tani</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Akun Pemerintah</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center top-10 p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                       <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                       <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                       <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                 </a>
              </li>
           </ul>
        </div>
     </aside>

   <div class="ml-[650px] mt-[-650px] space-y-[600px]">
      <div class=" -mb-[100px]">
         <h1 class=" text-5xl font-bold">Halo, <span class=" text-white">Kelompok Tani</span> !</h1>
      </div>
      <div>
         <div>
            <a href="/daftar">
               <button class="flex flex-col ml-[-200px] space-between items-center justify-center mb-14 -mt-[550px] bg-white border-2 border-[#72B944] rounded-3xl h-[450px] w-[300px]">
                  <img src="img/petanireg.png" alt="" class="w-[250px] pb-20">
                  <p class=" font-bold text-2xl w-60">Masukkan Data Petani</p>
               </button>
            </a>

            <a href="/verifikasi">
               <button class="flex flex-col ml-[350px] space-between items-center justify-center mb-28 -mt-[500px] bg-white border-2 border-[#72B944] rounded-3xl h-[450px] w-[300px]">
                  <img src="img/verifpetani.png" alt="" class="w-[250px] pb-20">
                  <p class=" font-bold text-2xl w-60">Verifikasi Petani</p>
               </button>
            </a>
         </div>
      </div>
   </div>

   <button class="chatbot-toggler">  
      <span class="material-symbols-rounded">+</span>
      <span class="material-symbols-outlined">v</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>SIPENDAP ASSIST</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined"> + </span>
          <p>Halo SIPENDAPERS👋<br>Selamat datang di Virtual Assisten, ada yang bisa saya bantu?<br><br>Ketik halo untuk memulai! </p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Masukkan Pesan..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>

   <style>
      body{
          background-image:linear-gradient( #72B944, #FFFFFF);
      }
      
      .login{
          background-color:none ;
          /* justify-items: center; */
          /* justify-content: center; */
          /* align-items: center; */
          /* align-content: center; */
          display: flex;
          margin-top: 200px;
      }
      
      .login a{
          text-decoration: underline;
          color: blue;
      }
      
      .box_regist{
          display: flex;
          margin-top:150px;
          margin-x:50px;
          background-color: 
      }
      
      .container{
          display: flex;
          /* margin-top: 50px;  */
      
      }
      
      .container_kiri h1{
          margin-left: 80px;
          margin-top: 80px; 
          font-size: 70px;
          font-family: Red Hat display;
          font-weight: 900;
      }
      
      .container_kiri p{
          font-family: Red Hat display;
          font-size: 27px;
          margin-left: 80px;
      }
      
      .container_kanan {
          margin-left: 240px;
      }
      
      .box{
          display: flex;
          background-color: FFFFFF;
      }
      
      /* Import Google font - Poppins */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      
      /* body {
        background: #E3F2FD;
      } */
      
      .chatbot-toggler {
        position: fixed;
        bottom: 30px;
        right: 35px;
        outline: none;
        border: none;
        height: 50px;
        width: 50px;
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #08b808;
        transition: all 0.2s ease;
      }
      body.show-chatbot .chatbot-toggler {
        transform: rotate(90deg);
      }
      .chatbot-toggler span {
        color: #fff;
        position: absolute;
      }
      .chatbot-toggler span:last-child,
      body.show-chatbot .chatbot-toggler span:first-child  {
        opacity: 0;
      }
      body.show-chatbot .chatbot-toggler span:last-child {
        opacity: 1;
      }
      .chatbot {
        position: fixed;
        right: 35px;
        bottom: 90px;
        width: 420px;
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        opacity: 0;
        pointer-events: none;
        transform: scale(0.5);
        transform-origin: bottom right;
        box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                    0 32px 64px -48px rgba(0,0,0,0.5);
        transition: all 0.1s ease;
      }
      body.show-chatbot .chatbot {
        opacity: 1;
        pointer-events: auto;
        transform: scale(1);
      }
      .chatbot header {
        padding: 16px 0;
        position: relative;
        text-align: center;
        color: #fff;
        background: #08b808;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      }
      .chatbot header span {
        position: absolute;
        right: 15px;
        top: 50%;
        display: none;
        cursor: pointer;
        transform: translateY(-50%);
      }
      header h2 {
        font-size: 1.4rem;
      }
      .chatbot .chatbox {
        overflow-y: auto;
        height: 510px;
        padding: 30px 20px 100px;
      }
      .chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
        width: 6px;
      }
      .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
        background: #fff;
        border-radius: 25px;
      }
      .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 25px;
      }
      .chatbox .chat {
        display: flex;
        list-style: none;
      }
      .chatbox .outgoing {
        margin: 20px 0;
        justify-content: flex-end;
      }
      .chatbox .incoming span {
        width: 32px;
        height: 32px;
        color: #fff;
        cursor: default;
        text-align: center;
        line-height: 32px;
        align-self: flex-end;
        background: #08b808;
        border-radius: 4px;
        margin: 0 10px 7px 0;
      }
      .chatbox .chat p {
        white-space: pre-wrap;
        padding: 12px 16px;
        border-radius: 10px 10px 0 10px;
        max-width: 75%;
        color: #fff;
        font-size: 0.95rem;
        background: #724ae8;
      }
      .chatbox .incoming p {
        border-radius: 10px 10px 10px 0;
      }
      .chatbox .chat p.error {
        color: #721c24;
        background: #f8d7da;
      }
      .chatbox .incoming p {
        color: #000;
        background: #f2f2f2;
      }
      .chatbot .chat-input {
        display: flex;
        gap: 5px;
        position: absolute;
        bottom: 0;
        width: 100%;
        background: #fff;
        padding: 3px 20px;
        border-top: 1px solid #ddd;
      }
      .chat-input textarea {
        height: 55px;
        width: 100%;
        border: none;
        outline: none;
        resize: none;
        max-height: 180px;
        padding: 15px 15px 15px 0;
        font-size: 0.95rem;
      }
      .chat-input span {
        align-self: flex-end;
        color: #724ae8;
        cursor: pointer;
        height: 55px;
        display: flex;
        align-items: center;
        visibility: hidden;
        font-size: 1.35rem;
      }
      .chat-input textarea:valid ~ span {
        visibility: visible;
      }
      
      @media (max-width: 490px) {
        .chatbot-toggler {
          right: 20px;
          bottom: 20px;
        }
        .chatbot {
          right: 0;
          bottom: 0;
          height: 100%;
          border-radius: 0;
          width: 100%;
        }
        .chatbot .chatbox {
          height: 90%;
          padding: 25px 15px 100px;
        }
        .chatbot .chat-input {
          padding: 5px 15px;
        }
        .chatbot header span {
          display: block;
        }
      }
      
      </style>
      
      <script>
      
      const chatbotToggler = document.querySelector(".chatbot-toggler");
      const closeBtn = document.querySelector(".close-btn");
      const chatbox = document.querySelector(".chatbox");
      const chatInput = document.querySelector(".chat-input textarea");
      const sendChatBtn = document.querySelector(".chat-input span");
      
      let userMessage = null; // Variable to store user's message
      const inputInitHeight = chatInput.scrollHeight;
      
      const createChatLi = (message, className) => {
          // Create a chat <li> element with passed message and className
          const chatLi = document.createElement("li");
          chatLi.classList.add("chat", `${className}`);
          let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
          chatLi.innerHTML = chatContent;
          return chatLi; // return chat <li> element
      }
      
      const generateResponse = (userMessage) => {
          // Define responses based on user input using if-else conditions
          let response;
          if (userMessage.toLowerCase().includes("halo")) {
              response = "Halo! Ada yang bisa saya bantu? Mohon Ketik 1 untuk Penjelasan, Ketik 2 untuk Cara Penggunaan";
          } else if (userMessage.toLowerCase().includes("1")) {
              response = "SIPENDAP adalah Sistem Pendistribusian Pupuk subsidi yang lebih efisien!😊 (Ada lagi yang ingin ditanyakan?(Ketik iya/tidak))";
          } else if (userMessage.toLowerCase().includes("2")) {
              response = "Cara menggunakan SIPENDAP adalah, silahkan Login terlebih dahulu ya!(Ada lagi yang ingin ditanyakan?(Ketik iya/tidak))";
          } else if (userMessage.toLowerCase().includes("tidak")) {
              response = "Terimakasih :)";
          } else if (userMessage.toLowerCase().includes("iya")) {
              response = "Baik, masih ada yang belum jelas??? Ketik 1 untuk penjelasan, Ketik 2 untuk cara penggunaan!";
          } else {
              // Default response if no specific condition matches
              response = "Wah maaf, saya masih belum bisa menjawab itu, mohon untuk pilih sesuai dengan angka ya!";
          }
          
          return response;
      }
      
      const handleChat = () => {
          userMessage = chatInput.value.trim(); // Get user entered message and remove extra whitespace
          if(!userMessage) return;
      
          // Clear the input textarea and set its height to default
          chatInput.value = "";
          chatInput.style.height = `${inputInitHeight}px`;
      
          // Append the user's message to the chatbox
          chatbox.appendChild(createChatLi(userMessage, "outgoing"));
          chatbox.scrollTo(0, chatbox.scrollHeight);
          
          setTimeout(() => {
              // Display "Thinking..." message while waiting for the response
              const incomingChatLi = createChatLi("Sedang Berpikir....", "incoming");
              chatbox.appendChild(incomingChatLi);
              chatbox.scrollTo(0, chatbox.scrollHeight);
              
              // Generate response based on user input
              const botResponse = generateResponse(userMessage);
              
              // Update chatbox with bot's response
              const messageElement = incomingChatLi.querySelector("p");
              messageElement.textContent = botResponse;
              chatbox.scrollTo(0, chatbox.scrollHeight);
          }, 600);
      }
      
      chatInput.addEventListener("input", () => {
          // Adjust the height of the input textarea based on its content
          chatInput.style.height = `${inputInitHeight}px`;
          chatInput.style.height = `${chatInput.scrollHeight}px`;
      });
      
      chatInput.addEventListener("keydown", (e) => {
          // If Enter key is pressed without Shift key and the window 
          // width is greater than 800px, handle the chat
          if(e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
              e.preventDefault();
              handleChat();
          }
      });
      
      sendChatBtn.addEventListener("click", handleChat);
      closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
      chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
      
      
      </script>
      
      
      
      
      
      @endsection
      


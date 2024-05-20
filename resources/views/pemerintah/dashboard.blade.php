@extends('layout.pemerintah')
@section('container')
 

    <div class="items-center justify-center  ">
    <div class="ml-[650px] mt-12 space-y-[600px]">
        <div class="mb-[100px]">
            <h1 class=" text-5xl font-bold">Halo, <span class=" text-white">Pemerintah</span> !</h1>
        </div>
        <div>
            <div>
                <a href="/daftar-kelompok-tani">
                    <button
                        class="flex flex-col ml-[-200px] space-between items-center justify-center mb-12 -mt-[550px] bg-white border-2 border-[#72B944] rounded-3xl h-[450px] w-[300px]">
                        <img src="img/keltani.png" alt="" class="w-[250px] pb-16">
                        <p class=" font-bold text-2xl w-[180px]">Buat Akun Kelompok Tani</p>
                    </button>
                </a>

                <a href="/verif">
                    <button
                        class="flex flex-col ml-[350px] space-between items-center justify-center mb-28 -mt-[500px] bg-white border-2 border-[#72B944] rounded-3xl h-[450px] w-[300px]">
                        <img src="img/verifpetani.png" alt="" class="w-[250px] pb-20">
                        <p class=" font-bold text-2xl w-60">Verifikasi Petani</p>
                    </button>
                </a>
            </div>
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
                <p>Halo SIPENDAPERS👋 Selamat datang di Virtual Assisten, ada yang bisa saya bantu?<br><br>Ketik halo untuk memulai !</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Masukkan Pesan..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
    </div>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        body {
            background-image: linear-gradient(#72B944, #FFFFFF);
            background-attachment: fixed;

        }

        .login {
            background-color: none;
            /* justify-items: center; */
            /* justify-content: center; */
            /* align-items: center; */
            /* align-content: center; */
            display: flex;
            margin-top: 200px;
        }

        .login a {
            text-decoration: underline;
            color: blue;
        }

        .box_regist {
            display: flex;
            margin-top: 150px;
            margin-x: 50px;
            background-color:
        }

        .container {
            display: flex;
            /* margin-top: 50px;  */

        }

        .container_kiri h1 {
            margin-left: 80px;
            margin-top: 80px;
            font-size: 70px;
            font-family: Red Hat display;
            font-weight: 900;
        }

        .container_kiri p {
            font-family: Red Hat display;
            font-size: 27px;
            margin-left: 80px;
        }

        .container_kanan {
            margin-left: 240px;
        }

        .box {
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
        body.show-chatbot .chatbot-toggler span:first-child {
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
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
                0 32px 64px -48px rgba(0, 0, 0, 0.5);
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            color: #000;
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

        .chat-input textarea:valid~span {
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
            let chatContent = className === "outgoing" ? `<p>${message}</p>` :
                `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
            chatLi.innerHTML = chatContent;
            return chatLi; // return chat <li> element
        }

        const generateResponse = (userMessage) => {
            // Define responses based on user input using if-else conditions
            let response;
            if (userMessage.toLowerCase().includes("halo")) {
                response =
                    "Halo!\n Ada yang bisa saya bantu?\n Mohon Ketik 1 untuk Penjelasan, Ketik 2 untuk Cara Penggunaan";
            } else if (userMessage.toLowerCase().includes("1")) {
                response =
                    "SIPENDAP adalah Sistem Pendistribusian Pupuk subsidi yang lebih efisien!😊 \n\n (Ada lagi yang ingin ditanyakan?)\n(Ketik iya/tidak)";
            } else if (userMessage.toLowerCase().includes("2")) {
                response =
                    "Cara menggunakan SIPENDAP adalah, silahkan Login terlebih dahulu ya! \n\n (Ada lagi yang ingin ditanyakan?)\n(Ketik iya/tidak)";
            } else if (userMessage.toLowerCase().includes("tidak")) {
                response = "Terimakasih :)";
            } else if (userMessage.toLowerCase().includes("iya")) {
                response =
                    "Baik, masih ada yang belum jelas??? \n Ketik 1 untuk penjelasan, \n Ketik 2 untuk cara penggunaan!";
            } else {
                // Default response if no specific condition matches
                response = "Wah maaf, saya masih belum bisa menjawab itu, mohon untuk pilih sesuai dengan angka ya!";
            }

            return response;
        }

        const handleChat = () => {
            userMessage = chatInput.value.trim(); // Get user entered message and remove extra whitespace
            if (!userMessage) return;

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
            if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
                e.preventDefault();
                handleChat();
            }
        });

        sendChatBtn.addEventListener("click", handleChat);
        closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
        chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
    </script>
@endsection

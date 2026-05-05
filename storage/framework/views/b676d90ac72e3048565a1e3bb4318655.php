<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheto Bot - Layanan Bantuan Otomatis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Inter:wght@400;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-color: #00d2ff;
            --secondary-color: #3a7bd5;
            --dark-bg: #05070a;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        body {
            background: var(--dark-bg);
            color: white;
            font-family: 'Inter', sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 50% 50%, #0a101f 0%, #05070a 100%);
        }

        .chat-container {
            width: 100%;
            max-width: 600px;
            height: 90vh;
            background: rgba(15, 17, 26, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            margin: 20px;
        }

        .chat-header {
            padding: 25px;
            background: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .bot-profile {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .bot-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            box-shadow: 0 0 20px rgba(0, 210, 255, 0.3);
        }

        .status-dot {
            width: 10px;
            height: 10px;
            background: #25d366;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }

        .chat-body {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Custom Scrollbar */
        .chat-body::-webkit-scrollbar {
            width: 6px;
        }

        .chat-body::-webkit-scrollbar-thumb {
            background: var(--glass-border);
            border-radius: 10px;
        }

        .message {
            max-width: 80%;
            padding: 15px 20px;
            border-radius: 20px;
            font-size: 0.95rem;
            line-height: 1.5;
            position: relative;
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .bot-msg {
            background: rgba(255, 255, 255, 0.05);
            color: #e0e0e0;
            align-self: flex-start;
            border-bottom-left-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .user-msg {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: black;
            font-weight: 600;
            align-self: flex-end;
            border-bottom-right-radius: 5px;
            box-shadow: 0 4px 15px rgba(0, 210, 255, 0.2);
        }

        .options-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 10px;
        }

        .option-btn {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            color: white;
            padding: 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            text-align: left;
            transition: 0.3s;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .option-btn:hover {
            background: rgba(0, 210, 255, 0.1);
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .option-btn i {
            color: var(--primary-color);
        }

        .chat-footer {
            padding: 25px;
            background: rgba(255, 255, 255, 0.02);
            border-top: 1px solid var(--glass-border);
            text-align: center;
        }

        .back-btn {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            opacity: 0.6;
            transition: 0.3s;
        }

        .back-btn:hover {
            opacity: 1;
            color: var(--primary-color);
        }

        .wa-btn {
            background: #25d366;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 15px;
            font-weight: 600;
            width: 100%;
            margin-top: 15px;
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .wa-btn:hover {
            background: #1eb954;
            transform: scale(1.02);
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.3);
        }

        /* Typing Animation */
        .typing {
            display: flex;
            gap: 5px;
            padding: 10px 15px;
        }

        .dot {
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out;
        }

        .dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {

            0%,
            80%,
            100% {
                transform: scale(0);
            }

            40% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

    <div class="chat-container">
        <div class="chat-header">
            <div class="bot-profile">
                <div class="bot-avatar">
                    <i class="fas fa-robot"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bold">Cheto Bot</h5>
                    <small class="text-white-50"><span class="status-dot"></span>Online & Aktif</small>
                </div>
            </div>
            <a href="/" class="back-btn"><i class="fas fa-times"></i></a>
        </div>

        <div class="chat-body" id="chatBody">
            <div class="message bot-msg">
                Halo! Selamat datang di layanan bantuan otomatis **Cheto Kos**. Saya asisten virtual Anda. Ada yang bisa
                saya bantu?
            </div>

            <div class="options-grid" id="initialOptions">
                <div class="option-btn" onclick="ask('apa')">
                    <i class="fas fa-question-circle"></i> Apa itu Cheto Kos?
                </div>
                <div class="option-btn" onclick="ask('fitur')">
                    <i class="fas fa-star"></i> Fitur unggulan?
                </div>
                <div class="option-btn" onclick="ask('harga')">
                    <i class="fas fa-tag"></i> Daftar harga?
                </div>
                <div class="option-btn" onclick="ask('beli')">
                    <i class="fas fa-shopping-cart"></i> Cara beli?
                </div>
            </div>
        </div>

        <div class="chat-footer">
            <p class="small text-white-50 mb-3">Butuh bantuan langsung dari Admin?</p>
            <a href="https://wa.me/6288994575261" class="wa-btn text-decoration-none">
                <i class="fab fa-whatsapp"></i> Hubungi WhatsApp Admin
            </a>
            <div class="mt-3">
                <a href="/" class="back-btn">Kembali ke Beranda</a>
            </div>
        </div>
    </div>

    <script>
        function ask(type) {
            let userText = "";
            let botText = "";

            if (type === 'apa') {
                userText = "Apa itu Cheto Kos?";
                botText = "**Cheto Kos** adalah alat bantu (tools) premium untuk game 8 Ball Pool yang dirancang untuk memberikan presisi tinggi (Line Prediction), keamanan akun, dan fitur otomatisasi terbaik di kelasnya.";
            } else if (type === 'fitur') {
                userText = "Fitur unggulannya apa saja?";
                botText = "Fitur unggulan kami meliputi:\n• **Auto-Play & Auto-Queue** (Hanya paket tertentu)\n• **Long Line Prediction** yang sangat akurat\n• **Anti-Ban Protection** tingkat lanjut\n• Support Login Google, FB, & Miniclip.";
            } else if (type === 'harga') {
                userText = "Berapa daftar harganya?";
                botText = "Kami punya 3 paket utama:\n• **Basic**: Mulai 30K\n• **Mod**: Mulai 35K\n• **Premium**: Mulai 45K\nDetail durasi (1, 7, 15, 30 hari) bisa dicek langsung di halaman produk.";
            } else if (type === 'beli') {
                userText = "Bagaimana cara belinya?";
                botText = "Caranya mudah:\n1. Pilih paket di beranda\n2. Klik durasi yang diinginkan\n3. Isi Nama & Nomor WA\n4. Pilih metode pembayaran\n5. Klik 'Bayar Sekarang' untuk konfirmasi.";
            }

            addUserMsg(userText);

            // Show typing indicator
            const typing = document.createElement('div');
            typing.className = 'typing';
            typing.innerHTML = '<div class="dot"></div><div class="dot"></div><div class="dot"></div>';
            document.getElementById('chatBody').appendChild(typing);
            scrollToBottom();

            setTimeout(() => {
                typing.remove();
                addBotMsg(botText);
            }, 800);
        }

        function addUserMsg(text) {
            const div = document.createElement('div');
            div.className = 'message user-msg';
            div.innerText = text;
            document.getElementById('chatBody').appendChild(div);
            scrollToBottom();
        }

        function addBotMsg(text) {
            const div = document.createElement('div');
            div.className = 'message bot-msg';
            // Simple markdown-like bold replacement
            div.innerHTML = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>').replace(/\n/g, '<br>');
            document.getElementById('chatBody').appendChild(div);
            scrollToBottom();
        }

        function scrollToBottom() {
            const body = document.getElementById('chatBody');
            body.scrollTop = body.scrollHeight;
        }
    </script>
</body>

</html><?php /**PATH D:\website_chetokos\resources\views/chatbot.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="./public/styles/chatbot.css">
</head>
<body>
    
    <div class="main">

        <button class="chatbot-toggler">
            <span><img src="https://img.icons8.com/?size=256&id=54385&format=png" alt=""></span>
            <span><img src="https://img.icons8.com/?size=256&id=71200&format=png" alt=""></span>
        </button>
        <div class="chatbot">
            <header>
                <h2>ChatBot</h2>
                <small><img src="https://img.icons8.com/?size=256&id=JIlJqN3SJL07&format=png" alt="">Online</small>
                <span class="close-btn"></span>
            </header>
            <ul class="chatbox">
                <li class="chat incoming">
                    <span><img src="https://img.icons8.com/?size=256&id=37410&format=png" alt=""></span>
                    <p>Bonjour, comment est-ce que je peux vous aider ?</p>
                </li>
            </ul>
            <div class="chat-input">
                <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
                <span id="send-btn"><img src="https://img.icons8.com/?size=256&id=ZznWGhUzgWtS&format=png" alt=""></span>
            </div>
        </div>
    </div>


    <script src="./chatbot.js"></script>
</body>
</html>
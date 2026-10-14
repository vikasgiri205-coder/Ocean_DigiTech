<?php
/**
 * Ocean Digitech - Chatbot Widget Component
 */
?>
<!-- Floating Chatbot Widget Start -->
<div id="od-chatbot-widget-container">
    <button id="od-chatbot-toggle-btn" aria-label="Toggle Chat" title="Chat with Ocean Digitech AI">
        <span class="ti-comments"></span>
    </button>

    <div id="od-chatbot-box" class="d-none">
        <div class="od-chatbot-header">
            <div class="d-flex align-items-center">
                <span class="ti-headphone-alt mr-2" style="font-size: 1.2rem;"></span>
                <div>
                    <h6 class="mb-0 text-white" style="font-size: 14px; font-weight: 600;">Ocean Digitech AI Assistant</h6>
                    <small style="color: rgba(255,255,255,0.8); font-size: 11px;">Online | Ready to help</small>
                </div>
            </div>
            <button id="od-chatbot-close-btn" aria-label="Close Chat">&times;</button>
        </div>

        <div id="od-chatbot-messages">
            <div class="od-chat-msg bot-msg">
                Hello! 👋 Welcome to Ocean Digitech. How can we help you with your web, mobile, or digital growth project today?
            </div>
        </div>

        <form id="od-chatbot-form" onsubmit="return false;">
            <div class="input-group">
                <input type="text" id="od-chatbot-input" class="form-control" placeholder="Type your message..." autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="od-chatbot-send-btn">
                        <span class="ti-send"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
#od-chatbot-widget-container {
    position: fixed;
    bottom: 25px;
    right: 25px;
    z-index: 99999;
    font-family: inherit;
}

#od-chatbot-toggle-btn {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: linear-gradient(135deg, #00d2ff 0%, #0066ff 100%);
    color: #ffffff;
    border: none;
    box-shadow: 0 4px 20px rgba(0, 102, 255, 0.4);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#od-chatbot-toggle-btn:hover {
    transform: scale(1.08);
    box-shadow: 0 6px 24px rgba(0, 102, 255, 0.5);
}

#od-chatbot-box {
    width: 350px;
    max-width: calc(100vw - 30px);
    height: 460px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.18);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: absolute;
    bottom: 65px;
    right: 0;
    border: 1px solid rgba(0,0,0,0.08);
    animation: odChatFadeIn 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

@keyframes odChatFadeIn {
    from { opacity: 0; transform: translateY(12px) scale(0.96); }
    to { opacity: 1; transform: translateY(0) scale(1); }
}

.od-chatbot-header {
    background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%);
    padding: 14px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#od-chatbot-close-btn {
    background: none;
    border: none;
    color: #ffffff;
    font-size: 22px;
    cursor: pointer;
    opacity: 0.8;
    line-height: 1;
}

#od-chatbot-close-btn:hover {
    opacity: 1;
}

#od-chatbot-messages {
    flex-grow: 1;
    padding: 16px;
    overflow-y: auto;
    background: #f8fafc;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.od-chat-msg {
    max-width: 82%;
    padding: 10px 14px;
    border-radius: 14px;
    font-size: 13px;
    line-height: 1.5;
}

.od-chat-msg.bot-msg {
    background: #ffffff;
    color: #1e293b;
    align-self: flex-start;
    border-bottom-left-radius: 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

.od-chat-msg.user-msg {
    background: #0066ff;
    color: #ffffff;
    align-self: flex-end;
    border-bottom-right-radius: 4px;
}

#od-chatbot-form {
    padding: 12px;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
}

#od-chatbot-input {
    border-radius: 20px 0 0 20px;
    font-size: 13px;
    padding-left: 14px;
    border-color: #cbd5e1;
}

#od-chatbot-send-btn {
    border-radius: 0 20px 20px 0;
    background: #0066ff;
    border-color: #0066ff;
    padding: 0 16px;
}

@media (max-width: 480px) {
    #od-chatbot-box {
        width: calc(100vw - 30px);
        right: -10px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('od-chatbot-toggle-btn');
    const closeBtn = document.getElementById('od-chatbot-close-btn');
    const chatBox = document.getElementById('od-chatbot-box');
    const chatForm = document.getElementById('od-chatbot-form');
    const chatInput = document.getElementById('od-chatbot-input');
    const messagesContainer = document.getElementById('od-chatbot-messages');

    if (!toggleBtn || !chatBox) return;

    toggleBtn.addEventListener('click', function() {
        chatBox.classList.toggle('d-none');
        if (!chatBox.classList.contains('d-none')) {
            chatInput.focus();
        }
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            chatBox.classList.add('d-none');
        });
    }

    if (chatForm) {
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const text = chatInput.value.trim();
            if (!text) return;

            // Append User Message
            const userDiv = document.createElement('div');
            userDiv.className = 'od-chat-msg user-msg';
            userDiv.textContent = text;
            messagesContainer.appendChild(userDiv);
            chatInput.value = '';
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            // Typing indicator
            const typingDiv = document.createElement('div');
            typingDiv.className = 'od-chat-msg bot-msg';
            typingDiv.id = 'od-typing-indicator';
            typingDiv.textContent = 'Typing...';
            messagesContainer.appendChild(typingDiv);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            // Fetch response from chatbot-proxy.php
            fetch('chatbot-proxy.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: text })
            })
            .then(res => res.json())
            .then(data => {
                const indicator = document.getElementById('od-typing-indicator');
                if (indicator) indicator.remove();

                const botDiv = document.createElement('div');
                botDiv.className = 'od-chat-msg bot-msg';
                botDiv.textContent = data.output || data.error || 'Thank you for reaching out! A representative will contact you shortly.';
                messagesContainer.appendChild(botDiv);
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            })
            .catch(err => {
                const indicator = document.getElementById('od-typing-indicator');
                if (indicator) indicator.remove();

                const botDiv = document.createElement('div');
                botDiv.className = 'od-chat-msg bot-msg';
                botDiv.textContent = 'Thank you for your message! Our team will get back to you soon.';
                messagesContainer.appendChild(botDiv);
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            });
        });
    }
});
</script>
<!-- Floating Chatbot Widget End -->

const chat = {
    1: {
        text: 'Hi! Welcome to Exclusive Kasi Living.',
        options: [
            {
                text: '👋',
                next: 2
            }
        ]
    },
    2: {
        text: 'Exclusive Kasi Living is a leading property rental agency that specializes in township rentals.',
        next: 3
    },
    3: {
        text: 'But you probably knew that anyway.',
        options: [
            {
                text: "<strong>Yes</strong>, I did!",
                next: 4
            },
            {
                text: "<strong>Nope</strong>, this is news.",
                next: 5
            }
        ]
    },
    4: {
        text: 'Awesome. This chat is still in development. Happy coding!',
    },
    // 4: {
    //     text: '<div class="card"><h2>Awesome</h2><p>This is some awesome content!</p></div>',
    // },
    5: {
        text: 'Aah, you\'re missing out!',
        next: 6
    },
    6: {
        text: 'Exclusive Kasi Living prides itself on simplicity and convenience, which is why we have developed a chatbot framework called KasiBot.',
        next: 7
    },
    7: {
        text: '<div><label for="input-text">Enter text:</label><input type="text" id="input-text" name="input-text"><button onclick="storeInput(8)">Send</button></div>',
    },
    // 8: {
    //     text: '<div>Hi $username!</div>',
    // },
    8: {
        text: '<div>Hi '+sessionStorage.getItem('username')+'!</div>',
    },
};

function storeInput(nextStep) {
    var userInput = document.getElementById('input-text').value;
    sessionStorage.setItem('username', userInput);
    chat[7].next = nextStep;
    renderChat(nextStep);
}
